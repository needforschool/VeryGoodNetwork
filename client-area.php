<?php
session_start();
include('inc/pdo.php');
include('inc/function.php');
$title = 'Client area';

if(!isLogged()){
    header('location: 403.php');
}


include('inc/header.php');
?>
      
    <h1>Client area</h1>

<?php
include('inc/footer.php');