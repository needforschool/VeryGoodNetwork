<?php
include('inc/pdo.php');
include('inc/function.php');
$title = 'A propos';



include('inc/header.php');
?>
      
        <section>
                <h1>About US</h1> 
        </section>
        
        <section id="about-section1">
                <div class="flexbox">
                        <h1 class="title">Nos services</h1>
                        <p>Analyse de votre réseau<br> pour votre entreprise <br>Des solutions innovantes<br> pour vous</p>
                </div>
                <img id="about-picture1" class="about-picture responsive" src="asset/img/about-picture1.jpg" alt="">
                <img id="about-picture2" class="about-picture responsive" src="asset/img/about-picture2.jpg" alt="">
                <div class="leftpicture">
                <img id="about-picture3" class="about-picture responsive" src="asset/img/about-picture3.jpg" alt="">
                <img id="about-picture4" class="about-picture responsive" src="asset/img/about-picture4.jpg" alt="">
                </div>
        </section>

        <section id="about-section2">
                <h1>Notre Équipe</h1>
                <div class="profils">
                        <div class="single-profil">
                                <img src="asset/img/profil.png" alt="">
                                <p>Lucas</p>
                        </div>
                        <div class="single-profil">
                                <img src="asset/img/profil.png" alt="">
                                <p>Quentin</p>   
                        </div>
                        <div class="single-profil">
                                <img src="asset/img/profil.png" alt="">
                                <p>Cyril</p>  
                        </div>
                        <div class="single-profil">
                                <img src="asset/img/profil.png" alt="">
                                <p>Théo</p>        
                        </div>
                </div>
        </section>

        <section id="about-section3">
        <h1>Quelques chiffres</h1>
        <div class="box">
                <div>
                        <p class="number">1<span>er</sup></p>
                        <p class="text">En Normandie</p>
                </div>
                <div>
                        <p class="number">4</p>
                        <p class="text">Développeurs</p>
                </div>
                <div>
                        <p class="number">56</p>
                        <p class="text">Partenaires</p>  
                </div>
                <div>
                        <p class="number">6</p>
                        <p class="text">Module d'analyse</p>      
                </div>
        </div>
        </section>

        <section>
                <h1>Notre Interface</h1>
                <div>

                </div>
                <div>
                        <div></div>
                        <div>
                                <p>Ergonomique</p>
                                <p>Performantes</p>
                                <p>Simple à comprendre</p>
                                <p>Cliquez sur l'image pour tester</p>
                        </div>
                </div>
        </section>

        <section>
                <h1>Ils parlent de nous</h1>
                <div>
                        <img src="" alt="">
                        <img src="" alt="">
                        <img src="" alt="">
                </div>
        </section>

        <section>
                <h1>Satisfait ?</h1>
                <button>Inscrivez vous</button>
        </section>


<?php
include('inc/footer.php');