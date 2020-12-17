<?php
session_start();
include('inc/pdo.php');
include('inc/function.php');
$title = 'A propos';



include('inc/header.php');
?>

<section class="about-section" id="about-section0">
        <div class="flexbox">
                <h1>À propos</h1>
        </div>
</section>

<section class="about-section" id="about-section1" data-parallax="scroll" data-image-src="asset/img/parallax-about.jpg">
        <div class="flexbox">
                <h1 class="title">Nos services</h1>
                <p>Analyse de votre réseau pour votre entreprise. Des solutions innovantes pour vous.</p>
        </div>
</section>

<section class="about-section" id="about-section2">
        <h1>Notre Équipe</h1>
        <div class="profils">
                <div class="single-profil single-profil1">
                        <img src="asset/img/lucas.jpg" alt="">
                        <p>Lucas</p>
                </div>
                <div class="single-profil single-profil2">
                        <img src="asset/img/quentin.png" alt="" class="quentin">
                        <p>Quentin</p>
                </div>
                <div class="single-profil single-profil3">
                        <img src="asset/img/cyril.jfif" alt="">
                        <p>Cyril</p>
                </div>
                <div class="single-profil single-profil4">
                        <img src="asset/img/theo.jpg" alt="">
                        <p>Théo</p>
                </div>
        </div>
</section>

<section class="about-section" id="about-section3">
        <h1>Quelques chiffres</h1>
        <div class="box">
                <div class="about-section3number1">
                        <p class="number">1<span>er</span></p>
                        <p class="text">En Normandie</p>
                </div>
                <div class="about-section3number2">
                        <p class="number">4</p>
                        <p class="text">Développeurs</p>
                </div>
                <div class="about-section3number3">
                        <p class="number">56</p>
                        <p class="text">Partenaires</p>
                </div>
                <div class="about-section3number4">
                        <p class="number">6</p>
                        <p class="text">Module d'analyse</p>
                </div>
        </div>
</section>

<section class="about-section" id="about-section4">
        <h1>Notre Interface</h1>
        <div class="flexbox">
                <div class="picture">
                </div>
                <div class="stick">

                </div>
                <div class="textarg">
                        <p>Ergonomique</p>
                        <p>Performantes</p>
                        <p>Simple à comprendre</p>
                        <p>Cliquez sur l'image pour <br>lancer la démo</p>
                </div>
        </div>
</section>

<section class="about-section" id="about-section5">
        <h1>Ils parlent de nous</h1>
        <div class="flexbox">
                <img id="imagepubliciteaboutsection1" src="asset/img/BFM.png" alt="">
                <img id="imagepubliciteaboutsection2" src="asset/img/lemonde.png" alt="">
                <img id="imagepubliciteaboutsection3" src="asset/img/leParisien.png" alt="">
        </div>
</section>

<section class="about-section" id="about-section6">
        <h1>Satisfait ?</h1>
        <button id="aboutusbutton">Inscrivez vous</button>
</section>


<?php
include('inc/footer.php');
