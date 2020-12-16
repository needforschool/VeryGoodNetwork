<?php

include('../inc/pdo.php');
include('../inc/function.php');

$errors = array();
$success = false;

$nom = cleanXSS($_POST['nom-signin']);
$prenom = cleanXSS($_POST['prenom-signin']);
$email = cleanXSS($_POST['email-signin']);
$password = cleanXSS($_POST['password-signin']);
$confirmPassword = cleanXSS($_POST['confirm-password-signin']);

$errors = verifText($errors, $nom, 2, 50, 'nom');
$errors = verifText($errors, $prenom, 2, 50, 'prenom');

$errors = validateEmail($email, 3, 100, $errors, 'email');

$errors = validatePassword($password, $confirmPassword, $errors, 'password', 'confirm-password', 3);

$errors = checkIfAlreadyTaken('vgn_users', 'lastname', $nom, $errors, 'nom', $pdo);
$errors = checkIfAlreadyTaken('vgn_users', 'firstname', $prenom, $errors, 'prenom', $pdo);
$errors = checkIfAlreadyTaken('vgn_users', 'email', $email, $errors, 'email', $pdo);

$data = array(
  'error' => $errors,
);
showJson($data);