<?php
session_start();
include('inc/pdo.php');
include('inc/function.php');
$title = 'Client area';

if (!isLogged()) {
    header('location: 403.php');
}


include('inc/header.php');
?>

<section id="banner-client">
    <div class="navBar">
        <div class="title">Votre Espace</div>
    </div>
    <div class="button-choose">
        <button id="btn-ca-main">Acceuil</button>
        <button id="btn-ca-graph">Graph</button>
        <button id="btn-ca-logs">Logs</button>
    </div>
    <section id="client-area-main">
        <div class="title-main">
            <h1>Mode de consultation</h1>
        </div>
        <div class="select">
            <div class="graph">
                <img src="asset/img/graphique.svg" alt="">
                <div class="btn">
                    <a href="#" class="btn from-left">Graphiques</a>
                </div>
                <!-- <p>Graphiques</p> -->
            </div>
            <div class="split"></div>
            <div class="logs">
                <img src="asset/img/logs.svg" alt="">
                <div class="btn">
                    <a href="#" class="btn from-right">Logs</a>
                </div>
                <!-- <p>Logs</p> -->
            </div>
        </div>
    </section>

    <section id="client-area-graph">
       <div class="navbar-graph">
            <ul>
                <li>Graphique 1</li>
                <li>Graphique 2</li>
                <li>Graphique 3</li>
                <li>Graphique 4</li>
            </ul>
       </div>
    </section>

    <section id="client-area-logs">
        <div class="box-log"></div>
    </section>

    <!-- <div class="footer-client"></div> -->
</section>

<?php
include('inc/footer.php');
