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
        $trames[$i]['ip_from'] = $dataTrame['ip_from'];
        $trames[$i]['ip_dest'] = $dataTrame['ip_dest'];


        //Décryptage des dates
        $dateLog = date("Y-m-d H:i:s", $dataTrame['date']);
        $dateGraph = strftime("%A %d %B", $dataTrame['date']);
        $trames[$i]['date-log'] = $dateLog;
        $trames[$i]['date-graph'] = $dateGraph;

        //Création des logs

        $logTrame = $trames[$i]['date-log'] . ' - Source (X.X.X.X.) vers (X.X.X.X.) - requête '. $trames[$i]['protocol_name'] .' - OK';
        $trames[$i]['log'] = $logTrame;
        //echo $dateLog;
        //debug($trames);
        ++$i;
    }

    debug($trames);