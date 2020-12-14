<?php
include('inc/pdo.php');
include('inc/function.php');
$title = 'Home';



include('inc/header.php');
?>


<section id="banner">
        <img src="asset/img/logo-light.svg" class="logo">
        <div class="banner-text">
                <h1>VeryGoodNetwork</h1>
                <p>Responsive Network Website available now 24h/24h</p>
        </div>
        <div class="banner-btn">
                <?php if (empty($_SESSION)) : ?>
                        <a href="signin.php" class="btn btn1">Inscription</a>
                        <a href="login.php" class="btn btn2">Connexion</a>
                <?php endif; ?>
        </div>
</section>


<div class="wrap">
        <div class="content">
                <h2>Lorem ipsum dolor s<br />Lorem ipsum dolor sit amet consectetur, .<br />Lorem ipsum dolor sit amet consectetur, adipisicing .</h2>
        </div>
</div>
<div class="content2">
        <img src="img_avatar.png" alt="Avatar" class="image" style="width:100%">
        <div class="middle">
                <div class="text">John Doe</div>
        </div>

</div>

<?php
include('inc/footer.php');
