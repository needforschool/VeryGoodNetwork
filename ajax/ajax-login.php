<?php
session_start();
include('../inc/pdo.php');
include('../inc/function.php');
$success = false;



if (!empty($_POST['email-login']) && !empty($_POST['password-login'])) {

  $email = cleanXSS($_POST['email-login']);
  $password = cleanXSS($_POST['password-login']);

  $user = querySQLWhere('vgn_users', 'email', $email, $pdo);

  if(!empty($user)){
    if(password_verify($password, $user['password']) && $user['status'] == 1){

      $_SESSION['user'] = array(
        'id' => $user['id'],
        'nom' => $user['lastname'],
        'prenom' => $user['firstname'],
        'email' => $user['email'],
        'status' => $user['status'],
        'ip' => $_SERVER['REMOTE_ADDR']
      );

      $success = true;
    }


  }

}

if(!empty($_SESSION['user'])){
  $data = array(
    'success' => $success,
    'user' => $_SESSION['user']
  );
} elseif(empty($_SESSION['user'])){
  $data = array(
    'success' => $success,
  );
}


showJson($data);