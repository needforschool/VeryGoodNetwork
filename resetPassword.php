<?php
session_start();
include('inc/pdo.php');
include('inc/function.php');
$title = 'Mot de passe oublié';

if (isLogged()) {
    header('location: 403.php');
} elseif (!empty($_GET['email'])) {
    $email = $_GET['email'];
    $user = querySQLWhere('vgn_users', 'email', $email, $pdo);
    if (empty($user)) {
        header('location: index.php?error=yes');
    }
}
?>
<div class="wrapper">
    <?php include('inc/header.php');
    ?>

    <img src="asset/img/triangle.png" class="banner-img">
    <section id="fakeEmail">
        <div class="resetMail">
            <h2><span class="bold">Mail de :</span> Very Good Network (verygoodnetwork@gmail.com)</h2>
            <h3><span class="bold">Objet :</span> Réinitialisation de mot de passe</h3>
            <p>Bonjour <span class="bold"><?php echo mb_strtoupper($user['lastname']) . ' ' . ucfirst($user['firstname']); ?></span>,<br>
                Un utilisateur a demandé un nouveau mot de passe pour le compte suivant sur VERY GOOD NETWORK :<br>
                Identifiant : <?php echo $user['email'] ?><br><br>
                Si vous n'êtes pas l'auteur de cette demande, ignorez simplement cet e-mail.<br>
                Pour continuer :<br><br>
                <a class="clickResetPassword">Cliquez ici pour réinitialiser votre mot de passe</a><br>
                Merci de votre attention.
            </p>
        </div>
    </section>

    <section id="resetPassword"></section>
    <div class="push"></div>
</div>
<?php
include('inc/footer.php');
