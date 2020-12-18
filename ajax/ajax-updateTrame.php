<?php
include('../inc/pdo.php');
include('../inc/function.php');

//date + id + flags + protocolName + type + code

//Récupération des trames réseaux
$trames = $_POST['trames'];
foreach ($trames as $trame) {
    
    //On met les vameur null a NULL

    if(empty($trame['protocol']['type']) || empty($trame['protocol']['code'])){
        $trame['protocol']['type'] = '';
        $trame['protocol']['code'] = '';
    }

    if(empty($trame['status'])){
        $trame['status'] = '';
    }

    if(empty($trame['protocol']['checksum']['code'])){
        $trame['protocol']['checksum']['code'] = '';
    }

    if(empty($trame['protocol']['version'])){
        $trame['protocol']['version'] = '';
    }

    if(empty($trame['protocol']['contentType'])){
        $trame['protocol']['contentType'] = '';
    }

    if(empty($trame['protocol']['flags']['code'])){
        $trame['protocol']['flags']['code'] = '';
    }

    if(empty($trame['protocol']['type'])){
        $trame['protocol']['type'] = '';
    }

    if(empty($trame['protocol']['code'])){
        $trame['protocol']['code'] = '';
    }


    $sql = "SELECT * FROM vgn_trames WHERE (date = :datebis AND identification = :idbis AND flags_code = :flagbis AND protocol_name = :protoname AND protocol_type = :prototype AND protocol_code = :protocode)";
    $query = $pdo->prepare($sql);
    $query -> bindValue(':datebis', $trame['date'], PDO::PARAM_INT);
    $query -> bindValue(':idbis', $trame['identification'], PDO::PARAM_STR);
    $query -> bindValue(':flagbis', $trame['flags']['code'], PDO::PARAM_STR);
    $query -> bindValue(':protoname', $trame['protocol']['name'], PDO::PARAM_STR);
    $query -> bindValue(':prototype', $trame['protocol']['type'], PDO::PARAM_INT);
    $query -> bindValue(':protocode', $trame['protocol']['code'], PDO::PARAM_INT);
    $query->execute();
    $verifData = $query->fetch();



    if(empty($verifData)){
        //insertion en BDD
        echo 'pouet';

        $sql = "INSERT INTO vgn_trames (date,version,headerLength,service,identification,status,flags_code,ttl,protocol_name,protocol_flags_code,protocol_checksum_status,protocol_checksum_code,protocol_ports_from,protocol_ports_dest,protocol_version,protocol_contentType,protocol_type,protocol_code,headerChecksum,ip_from,ip_dest)
            VALUES (:date,:version,:headerLength,:service,:idbis,:status,:flagscode,:ttlbis,:protocolname,:protocolflagscode,:protocolchecksumstatus,:protocolchecksumcode,:protocolportsfrom,:protocolportsdest,:protocolversion,:protocolcontentType,:protocoltype,:protocolcode,:headerChecksum,:ipfrom,:ipdest)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':date', $trame['date'], PDO::PARAM_INT);
        $query->bindValue(':version', $trame['version'], PDO::PARAM_INT);
        $query->bindValue(':headerLength', $trame['headerLength'], PDO::PARAM_INT);
        $query->bindValue(':service', $trame['service'], PDO::PARAM_STR);
        $query->bindValue(':idbis', $trame['identification'], PDO::PARAM_STR);
        $query->bindValue(':status', $trame['status'], PDO::PARAM_STR);
        $query->bindValue(':flagscode', $trame['flags']['code'], PDO::PARAM_STR);
        $query->bindValue(':ttlbis', $trame['ttl'], PDO::PARAM_INT);
        $query->bindValue(':protocolname', $trame['protocol']['name'], PDO::PARAM_STR);
        $query->bindValue(':protocolflagscode', $trame['protocol']['flags']['code'], PDO::PARAM_STR);
        $query->bindValue(':protocolchecksumstatus', $trame['protocol']['checksum']['status'], PDO::PARAM_STR);
        $query->bindValue(':protocolchecksumcode', $trame['protocol']['checksum']['code'], PDO::PARAM_STR);
        $query->bindValue(':protocolportsfrom', $trame['protocol']['ports']['from'], PDO::PARAM_INT);
        $query->bindValue(':protocolportsdest', $trame['protocol']['ports']['dest'], PDO::PARAM_INT);
        $query->bindValue(':protocolversion', $trame['protocol']['version'], PDO::PARAM_STR);
        $query->bindValue(':protocolcontentType', $trame['protocol']['contentType'], PDO::PARAM_STR);
        $query->bindValue(':protocoltype', $trame['protocol']['type'], PDO::PARAM_INT);
        $query->bindValue(':protocolcode', $trame['protocol']['code'], PDO::PARAM_INT);
        $query->bindValue(':headerChecksum', $trame['headerChecksum'], PDO::PARAM_STR);
        $query->bindValue(':ipfrom', $trame['ip']['from'], PDO::PARAM_STR);
        $query->bindValue(':ipdest', $trame['ip']['dest'], PDO::PARAM_STR);
        $query->execute();

    } else {
        //Ne rien faire
        echo 'nothing';
    }
}

//var_dump($_POST['trames']);
debug($_POST['trames']);