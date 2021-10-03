<?php include("partiels/_header.php");?> 
<?php include("partiels/_nav.php");?>
<div class="container bg-light border h-100" style="margin-top: 50px; padding:10px">
    <div class="row">
        <div class="col-md-6">
        <img src="assets/images/challengevalide.jpg" style="width: 400px; height:200px" class="rounded float-start rounded mx-auto d-block" alt="...">
        </div>
        <div class="col-lg col-md-6 text-center" style="margin: 35px;">
            <h1 class="text-warning">CHALLENGE of IGS</h1>
            <p><code>Hello,</code> Bonjour et bienvenu <?='<code>'.$afficher_profile['nom']." ".$afficher_profile['prenom'].'</code>'; ?> veuillez ajouter votre pseudo pour le premier challenge<br><code> Cliquer <a href="challenge.php">Ici</a> pour le challenge</code></p>
        </div>
    </div>


</div>
<?php include("partiels/_footer.php");?>