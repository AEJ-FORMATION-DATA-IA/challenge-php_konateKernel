<?php include("partiels/_header.php");?> 
<?php include("partiels/_nav.php");?>   
<div class="container kernel-marge">
  <div class="text-center"><h1>Je fais mon inscription<br> pour le challenge</h1></div>
   <form method="post" class="col-md-6 offset-md-3 bg-light border kernel-marge">
      <?php if(isset($er_nom)){?>
        <div><?= $er_nom; ?></div>
      <?php ;}?>
      <input type="text" placeholder="Votre nom" class="form-control" name="nom" value="<?php if(isset($nom)){ echo $nom; }?>" required>   
      <?php if(isset($er_prenom)){?>
        <div><?= $er_prenom; ?></div>
      <?php ;}?>
      <input type="text" placeholder="Votre prénom" class="form-control" name="prenom" value="<?php if(isset($prenom)){ echo $prenom; }?>" required>   
      <?php if(isset($er_mail)){?>
            <div><?= $er_mail ;?></div>
      <?php ;}?>
      <input type="email" placeholder="Adresse mail" class="form-control" name="mail" value="<?php if(isset($mail)){ echo $mail; }?>" required>
      <?php if(isset($er_mdp)){?>
        <div><?= $er_mdp ;?></div>
      <?php ;}?>
      <input type="password" placeholder="Mot de passe" class="form-control" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>" required>
      <input type="password" placeholder="Confirmer le mot de passe" class="form-control" name="confmdp" required>

      <button type="submit" class="btn btn-primary text-center kernel-marge" name="inscription">Envoyer</button>
      <div class="form-text"><code> si vous avez déjà un compte challenge veuillez cliquer</code> <a href="login.php">ici</a> <code>pour vous connecter.</code></div>
   </form>
</div>	
<?php include("partiels/_footer.php");?>