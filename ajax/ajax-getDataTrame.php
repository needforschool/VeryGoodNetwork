<?php
include('../inc/pdo.php');
include('../inc/function.php');
$trames = array();
$i = 0;
setlocale(LC_ALL,'fr_FR');

$sql = "SELECT date,version,status,ttl,protocol_name,ip_from,ip_dest FROM vgn_trames";
$query = $pdo->prepare($sql);
$query->execute();
$dataTrames = $query->fetchAll();

//var_dump($trames);

foreach ($dataTrames as $dataTrame) {
    
    $trames[$i]['date'] = $dataTrame['date'];
    $trames[$i]['version'] = $dataTrame['version'];
    $trames[$i]['status'] = $dataTrame['status'];
    $trames[$i]['ttl'] = $dataTrame['ttl'];
    $trames[$i]['protocol_name'] = $dataTrame['protocol_name'];
    $trames[$i]['ip-from'] = $dataTrame['ip_from'];
    $trames[$i]['ip-dest'] = $dataTrame['ip_dest'];


    //Décryptage des dates
    $dateLog = date("Y-m-d H:i:s", $dataTrame['date']);
    //$dateGraph = strftime("%A %d %B", $dataTrame['date']);
    $trames[$i]['date-log'] = $dateLog;
    //$trames[$i]['date-graph'] = $dateGraph;
    $trames[$i]['date-trame-year'] = date("Y", $dataTrame['date']);
    $trames[$i]['date-trame-month'] = date("m", $dataTrame['date']);
    $trames[$i]['date-trame-day'] = date("d", $dataTrame['date']);
    $trames[$i]['date-trame-hour'] = date("H", $dataTrame['date']);

    //Décryptage des ips
    $trames[$i]['ip-from-decrypt'] = ConvertHexIPToBase10($trames[$i]['ip-from']);
    $trames[$i]['ip-dest-decrypt'] = ConvertHexIPToBase10($trames[$i]['ip-dest']);
    

    //Création des logs
    if(empty($trames[$i]['status'])){
        $trames[$i]['status'] = 'OK';
    } else {
        $trames[$i]['status'] = 'TIMEOUT'; 
    }
    $logTrame = $trames[$i]['date-log'] . ' - Source : '. $trames[$i]['ip-from-decrypt'] .' vers '. $trames[$i]['ip-dest-decrypt'] .' - requête '. $trames[$i]['protocol_name'] .' - ' . $trames[$i]['status'];
    $trames[$i]['log'] = $logTrame;

    ++$i;
}

//debug($trames);

showJson($trames);