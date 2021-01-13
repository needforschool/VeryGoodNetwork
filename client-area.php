<?php
session_start();
include('inc/pdo.php');
include('inc/function.php');
$title = 'Espace Client';

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
        <div class="title"><span id="btn-ca-main"><i class="fas fa-arrow-left fa-sm arrow"></i> | </span>Votre Espace</div>
    </div>
</section>

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
            <li class="tabButton active" id="buttonOnglet-1">Dashboard</li>
            <li class="tabButton" id="buttonOnglet-2">Type de protocole</li>
            <li class="tabButton" id="buttonOnglet-3">Analyse temporelle des trames</li>
            <li class="tabButton" id="buttonOnglet-4">Aide</li>
        </ul>
    </div>
    <div id="tabs">
        <section id="client-area-graph-onglet-1">

            <div class="allcards">

                <div class="card-1 card">
                    <div class="titleCard">
                        <h2>Bienvenue</h2>
                    </div>
                    <div class="contentCard">
                        <p><?php echo ucfirst($_SESSION['user']['prenom']) ?></p>
                        <i class="fas fa-user"></i>
                    </div>
                </div>

                <div class="card-2 card">
                    <div class="titleCard">
                        <h2>Nombre total de trames</h2>
                    </div>
                    <div class="contentCard">
                        <p class="numberOfAllTrame">0</p>
                        <i class="fas fa-network-wired"></i>
                    </div>
                </div>

                <div class="card-3 card">
                    <div class="titleCard">
                        <h2>Qualité de vos trames :</h2>
                    </div>
                    <div class="contentCard">
                        <p class="qualityTrame">Erreur</p>
                        <i id="qualityIcon" class="fas fa-smile"></i>
                    </div>
                </div>

            </div>
            
            <div class="graphTypeTrame">

                <div id="graph-circulairetimeok">
                    <canvas id="graphcamenbert" width="200" height="200"></canvas>
                </div>

                <div id="graph-day">
                    <canvas id="graphlineday" width="200" height="200"></canvas>
                </div>

            </div>
            
        </section>

        <section id="client-area-graph-onglet-2" class=" hidden-onglet">
            <div class="graphOnglet2">

                <div id="graph-protocol">
                        <canvas id="graphbarprotocol" width="200" height="200"></canvas>
                </div>

                <div id="graph-ttl">
                    <canvas id="graphbarttl" width="400" height="400"></canvas>
                </div>

            </div>
        </section>

        <section id="client-area-graph-onglet-3" class=" hidden-onglet">
            <p>Veuillez choisir votre option : </p>
            <div>
                <form action="">
                    <div class="lineform1">
                        <div>
                            <label for="">Année</label>
                            <input type="radio" value="years" name="choose" id="gtmyYears">
                        </div>
                        <div>
                            <label for="">Mois</label>
                            <input type="radio" value="mois" name="choose" id="gtmyMonth">  
                        </div> 
                    </div>

                    <div class="lineform2">
                        <div class="select formyearstime">
                            <select name="" id="formyearstime">
                                <option value="years">Année</option>
                            </select> 
                        </div>

                        <div class="select gtmyMonthShowGraphbis">
                            <select name="" id="formyearstimemonth" class="gtmyMonthShowGraph">
                                <option value="01">Janvier</option>
                                <option value="02">Février</option>
                                <option value="03">Mars</option>
                                <option value="04">Avril</option>
                                <option value="05">Mai</option>
                                <option value="06">Juin</option>
                                <option value="07">Juillet</option>
                                <option value="08">Août</option>
                                <option value="09">Septembre</option>
                                <option value="10">Octobre</option>
                                <option value="11">Novembre</option>
                                <option value="12">Décembre</option>
                            </select>
                        </div>

                        <div class="select gtmyMonthShowGraphbis">
                            <select name="" id="formyearstimemonthy" class="gtmyMonthShowGraph">
                                <option value="">année</option>
                            </select>
                        </div>
                    </div>
                    
                </form>
                <div id="graph-time">
                    <canvas id="graphlinetime" width="400" height="120"></canvas>
                </div>
            </div>

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
<div class="push"></div>
</div>

<?php
include('inc/footer.php');
