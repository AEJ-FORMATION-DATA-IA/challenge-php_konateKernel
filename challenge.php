<?php
session_start();
include('config/db_connect.php'); // Fichier PHP contenant la connexion à votre BDD

// S'il y a une session alors on ne retourne plus sur cette page
if (!isset($_SESSION['id'])){
    header('Location: index.php');
    exit;
}
//on recupere les informations de l'utilisateur connecte
$afficher_profile = $DB->query("SELECT * FROM utilisateur WHERE id =?", array($_SESSION['id']));

$afficher_profile = $afficher_profile->fetch();

if(!empty($_POST)){
    extract($_POST);
    $valid = true;

    if(isset($_POST['modification'])){
        $pseudo = htmlentities(trim($pseudo));

        if(empty($pseudo)){
            $valid =false;
            $er_pseudo = "Veuillez entrer votre pseudo pour le challenge";
        }
    }
    if($valid){
        $DB->insert("UPDATE utilisateur SET pseudo = ? WHERE id = ?", array($pseudo, $_SESSION['id']));
        
        $_SESSION['pseudo']=$pseudo;

        header('location: challengev.php');
        exit;
    }
}

?>
<?php include('views/challenge.view.php');?>