<?php
session_start();
include('inc/pdo.php');
include('inc/function.php');
$title = 'Mot de passe oublié';

if (isLogged()) {
    header('location: 403.php');
} elseif(!empty($_GET['email'])) {
    $email = $_GET['email'];
    $user = querySQLWhere('vgn_users', 'email', $email, $pdo);
    if(empty($user)){
        header('location: index.php?error=yes');
    }
}


include('inc/header.php');
?>

    <section id="fakeEmail">

    <div class="resetMail">
        <h1>Mail de : Very Good Network (verygoodnetwork@gmail.com)</h1>
        <h2>Objet : Réinitialisation de mot de passe</h2>
        <p>Bonjour <?php echo mb_strtoupper($user['lastname']) . ' ' . ucfirst($user['firstname']); ?>,<br><br>
        Un utilisateur a demandé un nouveau mot de passe pour le compte suivant sur VERY GOOD NETWORK :<br><br>
        Identifiant : <?php echo $user['email'] ?><br><br>
        Si vous n'êtes pas l'auteur de cette demande, ignorez simplement cet e-mail.<br><br>
        Pour continuer :<br><br>
        <a class="clickResetPassword">Cliquez ici pour réinitialiser votre mot de passe</a><br><br>
        Merci de votre attention.
        </p>
  </div>

    </section>

    <section id="resetPassword"></section>

<?php
include('inc/footer.php');