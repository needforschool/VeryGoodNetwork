<?php
session_start();
include('../inc/pdo.php');
include('../inc/function.php');




$email = cleanXss($_POST['email']);
  $password = cleanXss($_POST['password']);
  if(!empty($email) && !empty($password)) {
    $sql = "SELECT * FROM vl_users WHERE email = :email";
    $query = $pdo->prepare($sql);
    $query->bindValue(':email',$email,PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch();
    if(!empty($user)) {
      if (password_verify($password, $user['password']) && $user['status'] == 1){

      };

    }
}