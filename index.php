<?php
include('inc/pdo.php');
include('inc/function.php');
$title = 'Home';



include('inc/header.php');
?>


<section id="banner">
        <img src="asset/img/triangle.png" class="banner-img">
        <div class="wrap-banner">
                <div class="banner-text">
                        <h1>Very <span class="red">Good </span>Network</h1>
                        <p>Analyse Web</p>
                </div>

                <div class="banner-btn">
                        <?php if (empty($_SESSION)) : ?>
                                <button data-custom-open="modal-signin" id="openModalSignin">Registration</button>
                                <button data-custom-open="modal-login" id="openModalLogin">Connection</button>
                        <?php endif; ?>
                </div>
        </div>
        <img src="asset/img/triangle-blanc.png" class="banner-img-bottom">
</section>

<section id="content">
        <div class="box">
                <div class="content">
                        <h1>Solution d'analyse Web</h1>
                        <p>pour les professionnels</p>

                </div>


                <div class="wrap">
                        <div class="bigbox">

                                <img id="imgmiddle" src="asset/img/imgmiddle3.svg" alt="Avatar">

                                <div class="text">
                                        <h1>Des outils ergonomiques</h1>
                                        <br>
                                        <p>Nos outils d'analyse vous permet de <br> comprendre toutes les infos que vous<br> avez besoin pour votre site web. Avec <br>des modules facile à comprendre</p>
                                </div>
                        </div>
                        <div class="bigbox2">
                                <div class="text2">
                                        <h1>MADE IN <span id="bleu">FR</span><span id="blanc">AN</span><span id="rouge">CE</span></h1>
                                        <br>
                                        <p>Entreprise établie en france</p>
                                </div>

                                <img id="imgmiddle2" src="asset/img/imgmiddle2.svg" alt="Avatar">

                        </div>
                        <div class="bigbox3">

                                <img id="imgmiddle3" src="asset/img/imgmiddle1.svg" alt="Avatar">

                                <div class="text3">
                                        <h1>Analyse en temps réel</h1>
                                        <br>
                                        <p>Avec ses outils vous pouvez avoir <br> accès à des graphiques qui vous<br> permets de comprendre les besoins <br>de votre site</p>
                                </div>
                        </div>

                        <div class="text4">
                                <h1>Ils nous font confiance</h1>
                        </div>
                        <div class="bigbox4">
                                <div class="boximg4">
                                        <img id="imgmiddle4" src="asset/img/austin.jpg" alt="Avatar">
                                </div>
                                <div class="text5">
                                        <p>Grâce à VGN, je peux analyser mon site web et comprendre les besoins de mes clients. Un Super Outil, je recommande.</p>
                                </div>
                                <div class="boximg4">
                                        <img id="imgmiddle4" src="asset/img/alphawan.jpg" alt="Avatar">
                                </div>
                                <div class="text5">
                                        <p>Grâce à VGN, je peux analyser mon site web et comprendre les besoins de mes clients. Un Super Outil, je recommande.</p>
                                </div>
                        </div>
                        <div class="triangleinverse">
                                <img id="triangle1" src="asset/img/triangleinverse.png" alt="Avatar">
                        </div>
                </div>
</section>
<?php
include('inc/footer.php');
