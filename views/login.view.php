<?php include("partiels/_header.php");?> 
<?php include("partiels/_nav.php");?>   
<div class="container kernel-marge">
  <div class="text-center"><h1>Se connecter</h1></div>
  <form method="post" class="col-md-6 offset-md-3 bg-light border kernel-marge">
  <?php if(isset($er_mail)){ ?>
    <div><?= $er_mail ?></div>
  <?php ;}?>
  <input type="email" class="form-control" placeholder="Adresse mail" name="mail" value="<?php if(isset($mail)){ echo $mail; }?>" required>
  <?php if(isset($er_mdp)){ ?>
    <div><?= $er_mdp ?></div>
  <?php ;}?>
  <input type="password" class="form-control" placeholder="Mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>" required>
  <button type="submit" class="btn btn-primary text-center kernel-marge" name="connexion">Se connecter</button>
<div class="form-text"><code>Hey, vous voulez participer au challenge <br>et vous n'avez pas de compte cliquer</code> <a href="register.php">ici</a> <code>pour créer.</code></div>
  </form> 
</div>	
<?php include("partiels/_footer.php");?>