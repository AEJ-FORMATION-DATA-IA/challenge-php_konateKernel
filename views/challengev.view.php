<?php include("partiels/_header.php");?> 
<?php include("partiels/_nav.php");?>
<div class="container bg-light border h-100" style="margin-top: 50px; padding:10px">
    <div class="row">
        <div class="col-md-6">
        <img src="assets/images/validech.jpg" style="width: 400px; height:200px" class="rounded float-start rounded mx-auto d-block" alt="...">
        </div>
        <div class="col-lg col-md-6 text-center" style="margin: 35px;">
            <h1 class="text-warning">CHALLENGE <code class="text-success">validé</code></h1>
            <p><code>Félicitation,</code> <?='<code>'.$afficher_profile['nom']." ".$afficher_profile['prenom'].'</code>'; ?> vous avez reussir le challenge du jour en ajoutant un pseudo à votre profile qui est <code><strong><?= $afficher_profile['pseudo']?></strong></code></p>
        </div>
    </div>


</div>


<?php include("partiels/_footer.php");?>