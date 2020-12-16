<?php
session_start();
include('../inc/pdo.php');
include('../inc/function.php');

$errors = [];
$success = false;
$_SESSION['user'] = '';

if(!empty($_POST['nom-signin']) && !empty($_POST['prenom-signin']) && !empty($_POST['email-signin']) && !empty($_POST['password-signin']) && !empty($_POST['confirm-password-signin'])){

  //Veification Faille XSS
  $nom = cleanXSS($_POST['nom-signin']);
  $prenom = cleanXSS($_POST['prenom-signin']);
  $email = cleanXSS($_POST['email-signin']);
  $password = cleanXSS($_POST['password-signin']);
  $confirmPassword = cleanXSS($_POST['confirm-password-signin']);

  
  $errors = verifText($errors, $nom, 2, 50, 'nom');
  $errors = verifText($errors, $prenom, 2, 50, 'prenom');
  $errors = validateEmail($email, 3, 100, $errors, 'email');
  $errors = validatePassword($password, $confirmPassword, $errors, 'password', 'confirm-password', 3);

  $errors = checkIfAlreadyTaken('vgn_users', 'email', $email, $errors, 'email', $pdo);

  if(count($errors) == 0) {

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO vgn_users (lastname,firstname,email,password,created_at)
            VALUES (:nom,:prenom,:email,:mdp,NOW())";
    $query = $pdo->prepare($sql);
    $query->bindValue(':nom', $nom, PDO::PARAM_STR);
    $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->bindValue(':mdp', $passwordHash, PDO::PARAM_STR);
    $query->execute();

    
    $user = querySQLWhere('vgn_users', 'email', $email, $pdo);
    
    if($user){
      $_SESSION['user'] = array(
        'id' => $user['id'],
        'nom' => $user['lastname'],
        'prenom' => $user['firstname'],
        'email' => $user['email'],
        'status' => $user['status'],
        'ip' => $_SERVER['REMOTE_ADDR']
      );
      
    }
    $success = true;
  }
} else {
  $errors['all'] = 'echec d\'envoi du formulaire, veuillez recommencer';
}

if(!empty($_SESSION['user'])){
  $data = array(
    'success' => $success,
    'errors' => $errors,
    'user' => $_SESSION['user']
  );
} elseif(empty($_SESSION['user'])){
  $data = array(
    'success' => $success,
    'errors' => $errors,
  );
}


var_dump($errors);
showJson($data);