<?php
session_start();
include('inc/pdo.php');
include('inc/function.php');
$title = 'Client area';

if (!isLogged()) {
    header('location: 403.php');
}
?>
<div class="wrapper">
<?php    

include('inc/header.php');
?>

<section id="banner-client">
    <div class="navBar">
        <div class="title">Votre Espace</div>
    </div>
    <div class="button-choose">
        <button id="btn-ca-main">Graph / Logs</button>
        <button id="update">update-date</button>
        <!-- <button id="btn-ca-logs">Logs</button> -->
    </div>
    <section id="client-area-main">
        <div class="title-main">
            <h1>Mode de consultation</h1>
        </div>
        <div class="select">
            <div class="graph">
                <a href="#" id="btn-ca-graph"><img src="asset/img/graphique.svg" alt="" class="img-log"></a>
                <div class="btn">
                    <p>Graphiques</p>
                </div>
            </div>
            <div class="split"></div>
            <div class="logs">
                <a href="#" id="btn-ca-logs"><img src="asset/img/logs.svg" alt="" class="img-log"></a>
                <div class="btn">
                    <p>Logs</p>
                </div>
            </div>
        </div>
    </section>

    <section id="client-area-graph">
        <div class="navbar-graph">
            <ul>
                <li class="tabButton active" id="buttonOnglet-1">Onglet 1</li>
                <li class="tabButton" id="buttonOnglet-2">Onglet 2</li>
                <li class="tabButton" id="buttonOnglet-3">Onglet 3</li>
                <li class="tabButton" id="buttonOnglet-4">Onglet 4</li>
            </ul>
        </div>
        <div id="tabs">
            <section id="client-area-graph-onglet-1">
                <div id="graph-circulairetimeok">
                    <canvas id="graphcamenbert" width="400" height="400"></canvas>
                </div>
                <div id="graph-protocol">
                    <canvas id="graphbarprotocol" width="400" height="400"></canvas>
                </div>
                <div id="graph-ttl">
                    <canvas id="graphbarttl" width="400" height="400"></canvas>
                </div>
                <div id="graph-day">
                    <canvas id="graphlineday" width="400" height="400"></canvas>
                </div>
            </section>

            <section id="client-area-graph-onglet-2" class=" hidden-onglet">
                <p>Onglet 2</p>
            </section>

            <section id="client-area-graph-onglet-3" class=" hidden-onglet">
                <p>Onglet 3</p>
            </section>

            <section id="client-area-graph-onglet-4" class=" hidden-onglet">
                <p>Onglet 4</p>
            </section>
        </div>

    </section>

    <section id="client-area-logs">
        <div class="box-log"></div>
    </section>

    <!-- <div class="footer-client"></div> -->
</section>
<div class="push"></div>
</div>

<?php
include('inc/footer.php');
