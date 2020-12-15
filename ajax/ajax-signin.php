<?php
include('../inc/function.php');

$errors = array();
$success = false;

$nom = cleanXSS($_POST['nom']);
$prenom = cleanXSS($_POST['prenom']);
$email = cleanXSS($_POST['email']);
$password = cleanXSS($_POST['password']);

$errors = verifText($errors, $nom, 2, 50, 'nom');
$errors = verifText($errors, $prenom, 2, 50, 'prenom');

if(!empty($email)){
    if (mb_strlen($email) < 3) {
      $errors['email'] = 'Veuillez renseigner au minimum 3 caractères';
    } elseif (mb_strlen($email) > 100) {
        $errors['email'] = 'Veuillez renseigner au maximum 100 caractères';
      }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Veuillez renseigner un email valide';
        }else {
          $sql = "SELECT * FROM nf_users WHERE email LIKE :emailbis";
          $query = $pdo->prepare($sql);
          $query -> bindValue(':emailbis', $email, PDO::PARAM_STR);
          $query->execute();
          $verifEmail = $query->fetch();
          if (!empty($verifEmail)) {
            $errors['email'] = 'Cet email est déjà utilisé';
          }
      }
  } else {
    $errors['email'] = 'Veuillez renseigner ce champ';
  }