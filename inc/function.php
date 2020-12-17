<?php

function debug($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

function cleanXSS($notSafe)
{
    return trim(strip_tags($notSafe));
}

function showJson($data)
{
    header("Content-type: application/json");
    $json = json_encode($data, JSON_PRETTY_PRINT);
    if($json){
        die($json);
    } else {
        die('error in json encoding');
    }
}

function isLogged(): bool
{
  $isLogged = true;
  if (empty($_SESSION['user']) || $_SESSION['user'] == '' ) {
    $isLogged = false;
    return $isLogged;
  } else {
    foreach ($_SESSION['user'] as $key => $value) {
      if (!isset($key) && !isset($value)) {
        $isLogged = false;
        return $isLogged;
      }
    }
  }
  return $isLogged;
}


function verifText($errors, $notVerif, int $min, int $max, $key)
{
  if(!empty($notVerif)){
    if (mb_strlen($notVerif) < $min) {
      $errors[$key] = 'Veuillez renseigner au minimum '. $min .' caractères';
    } elseif (mb_strlen($notVerif) > $max) {
        $errors[$key] = 'Veuillez renseigner au maximum '. $max .' caractères';
      }
  } else {
    $errors[$key] = 'Veuillez renseigner ce champ';
  }
  return $errors;
}

function checkIfAlreadyTaken($table, $data, $databis, $errors, $key, $pdo)
{
  $sql = "SELECT * FROM $table WHERE $data LIKE :databis";
  $query = $pdo->prepare($sql);
  $query -> bindValue(':databis', $databis, PDO::PARAM_STR);
  $query->execute();
  $verifData = $query->fetch();
  if (!empty($verifData)) {
    $errors[$key] = $key . ' deja pris';
    return $errors;
  }
  return $errors;
}

function validateEmail($email, int $min, int $max, $errors, $key)
{
  if(!empty($email)){
    if (mb_strlen($email) < $min) {
      $errors[$key] = 'Veuillez renseigner au minimum '. $min .' caractères';
    } elseif (mb_strlen($email) > $max) {
        $errors[$key] = 'Veuillez renseigner au maximum '. $max .' caractères';
      }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[$key] = 'Veuillez renseigner un email valide';
        }
  } else {
    $errors[$key] = 'Veuillez renseigner ce champ';
  }

  return $errors;
}

function validatePassword($password, $confirmPassword, $errors, $keyPassword, $keyConfirmPassword, int $min)
{
  if (!empty($password) && !empty($confirmPassword)) {
    if (mb_strlen($password) < $min) {
      $errors[$keyPassword] = 'Veuillez renseigner au minimum '. $min .' caractères';
    } elseif ($confirmPassword != $password) {
      $errors[$keyPassword] = 'Les mots de passe ne correspondent pas';
    }
  } else {
    $errors[$keyPassword] = 'Veuillez renseigner ce/ces champs';
  }

  return $errors;
}

function querySQLWhere($table, $optionWhere1, $optionwhere2, $pdo)
{
  $sql = "SELECT * FROM $table WHERE $optionWhere1 = :query";
  $query = $pdo->prepare($sql);
  $query->bindValue(':query',$optionwhere2,PDO::PARAM_STR);
  $query->execute();
  $user = $query->fetch();
  return $user;
}