<nav class="navbar navbar-expand-lg navbar-expand-md navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CHALLENGE IGS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
          <li class="nav-item"><a href="index.php" class="nav-link">Accueil</a></li>
          <?php if(isset($_SESSION['id'])): ?>
            <li class="nav-item"><a href="profile.php" class="nav-link">Dashbord</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link">Deconnexion</a></li>
          <?php else: ?>
            <li class="nav-item"><a href="register.php" class="nav-link">Inscription</a></li>
            <li class="nav-item"><a href="login.php" class="nav-link">Connexion</a></li>
          <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>