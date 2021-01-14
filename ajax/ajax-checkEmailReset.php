<?php
session_start();
include('../inc/pdo.php');
include('../inc/function.php');
$success = false;
$errors = array();

if (!empty($_POST['email-emailReset'])){

    //Verification failleXSS;
    $email = cleanXSS($_POST['email-emailReset']);

    $errors = validateEmail($email, 3, 100, $errors, 'email');

    if (count($errors) == 0){
        $user = querySQLWhere('vgn_users', 'email', $email, $pdo);
        if (!empty($user)) {
            $token = generateRandomString(80);
            $sql = "UPDATE vgn_users SET token = :token, token_at = NOW() WHERE id = :id";
            $query = $pdo->prepare($sql);
            $query->bindValue(':token',$token,PDO::PARAM_STR);
            $query->bindValue(':id',$user['id'],PDO::PARAM_STR);
            $query->execute();
            $success = true;
            $data = array(
                'success' => $success,
                'userEmail' => $user['email'],
                'errors' => $errors
              );
            showJson($data);
        } else{
            $errors ['email'] = 'Email invalide';
            $data = array(
                'success' => $success,
                'errors' => $errors
              );
            showJson($data);
        }
    } else{
        $errors ['email'] = 'Email invalide';
        $data = array(
            'success' => $success,
            'errors' => $errors
          );
        showJson($data);
    }
} else {
    $data = array(
        'success' => $success,
        'errors' => "Email invalide"
      );
    showJson($data);
}