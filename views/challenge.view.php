<?php include("partiels/_header.php");?> 
<?php include("partiels/_nav.php");?>

<div class="container kernel-marge">
  <div class="text-center"><h1>Challenge du jour</h1></div>
  <form method="post" class="col-md-6 offset-md-3 bg-light border kernel-marge">
    <?php if(isset($er_pseudo)){?>
        <div><?= $er_pseudo?></div>
    <?php }?>
    <input type="text" class="form-control" placeholder="votre pseudo" name="pseudo" value="<?php if(isset($pseudo)){ echo $pseudo; }?>" required>
    <button type="submit" class="btn btn-primary text-center kernel-marge" name="modification">Ajouter son pseudo</button>
  </form> 
</div>


<?php include("partiels/_footer.php");?>