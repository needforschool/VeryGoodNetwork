<?php
session_start();
include('../inc/pdo.php');
include('../inc/function.php');
$success = false;
$errors = array();

if (!empty($_POST['token']) && !empty($_POST['email']) && !empty($_POST['newPassword']) && !empty($_POST['confirmNewPassword'])){

    //Verification email

    $email = cleanXSS($_POST['email']);
    $token = cleanXSS($_POST['token']);
    $password = cleanXSS($_POST['newPassword']);
    $confirmPassword = cleanXSS($_POST['confirmNewPassword']);

    if (mb_strlen($password) < 6) {
        $errors['password'] = 'Veuillez renseigner au minimum 6 caractères';
    } elseif ($confirmPassword != $password) {
        $errors['confirm-password'] = 'Les mots de passe ne correspondent pas';
    }

    $errors = validateEmail($email, 3, 100, $errors, 'email');

    if(count($errors) == 0){
        $user = querySQLWhere('vgn_users', 'email', $email, $pdo);
        if(!empty($user)){
            if($user['token'] === $token && $user['email'] === $email){
                if (isActual($user['token_at'])){
                    $sql = "SELECT * FROM vgn_users WHERE email = :email AND token = :token";
                    $query = $pdo->prepare($sql);
                    $query->bindValue(':email',$email,PDO::PARAM_STR);
                    $query->bindValue(':token',$token,PDO::PARAM_STR);
                    $query->execute();
                    $user = $query->fetch();
                    if (!empty($user)) {
                        $passhash = password_hash($password, PASSWORD_DEFAULT);
                        $sql = "UPDATE vgn_users SET password = :passhash, token = '' WHERE email = :email";
                        $query = $pdo->prepare($sql);
                        $query->bindValue(':passhash',$passhash,PDO::PARAM_STR);
                        $query->bindValue(':email',$email,PDO::PARAM_STR);
                        $query->execute();
                        $success = true;

                        $data = array(
                            'success' => $success,
                          );
                        showJson($data);
                    }
                } else {
                    $data = array(
                    'success' => $success,
                    'errors' => 'Token expiré'
                  );
                    showJson($data);
                }
            }else {
                $data = array(
                'success' => $success,
                'errors' => 'Erreur durant le processus, veuillez recommencer'
                );
                showJson($data);
            }
        } else {
            $data = array(
            'success' => $success,
            'errors' => 'Email invalide'
          );
            showJson($data);
        }
    } else {
        $data = array(
            'success' => $success,
            'errors' => 'Les mots de passe ne correspondent pas'
          );
            showJson($data);
    }
}

$data = array(
    'success' => $success,
    'errors' => $errors
  );
showJson($data);