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
  if (empty($_SESSION['user'])) {
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

function checkIfAlreadyTaken($table, $data, $databis, $errors, $key)
{
  $sql = "SELECT * FROM $table WHERE $data LIKE :databis";
  $query = $pdo->prepare($sql);
  $query -> bindValue(':databis', $databis, PDO::PARAM_STR);
  $query->execute();
  $verifData = $query->fetch();
  if (!empty($verifData)) {
    $errors[$key] = $key . ' déjà utilisé';
  }
}