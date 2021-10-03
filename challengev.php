<?php 
session_start();
include('config/db_connect.php'); // Fichier PHP contenant la connexion à votre BDD
//s'il n'y a pas de session alors on ne vient pas sur cette page
if(!isset($_SESSION['id'])){
    header('location: login.php');
    exit;
}

//on recupere les informations de l'utilisateur connecte
$afficher_profile= $DB->query("SELECT * FROM utilisateur WHERE id=?", array($_SESSION['id']));

$afficher_profile = $afficher_profile->fetch();

?>

<?php include('views/challengev.view.php');?>