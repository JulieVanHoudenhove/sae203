<?php
      // On recupere l'URL de la page pour ensuite affecter class = "active" aux liens de nav
      $page = $_SERVER['REQUEST_URI'];
      $page = str_replace("/mmi21f15.sae203.ovh/", "",$page);
?>

<header>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="color: #141414; background-color: #fff;" fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
      <img src="images/netflix_serie.png" alt="" width="150" height="auto"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item" <?php if($page == "index.php"){echo 'class="active"';} ?>>
            <a class="nav-link" aria-current="page" href="index.php"><i class="bi bi-house"></i>Accueil</a>
          </li>
          <li class="nav-item" <?php if($page == "listing.php"){echo 'class="active"';} ?>>
            <a class="nav-link" href="listing.php">Catalogue</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Privé</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="form_recherche.php">Rechercher</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>