
<?php 
   session_start();
   include "Logintest/db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id']) && ($_SESSION['role']=='admin')) {   ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="page_admin_GSB.css">
    <title>Page accueil admin</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<img class="imggsb" src="gsb_logo.png">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Accueil</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Logintest/logout.php" class="deconnexion">Deconnexion
        <i class="bi bi-box-arrow-right"></i></a>
      </li>
    </ul>
  </div>
</nav>
    <h1>Gestion de frais</h1>
    <HR>
    <h2>Consulter les fiches de frais émis par les visiteurs</h2>
    <div id="volet_clos">
	    <div id="volet">
        <p>Connecté en tant que <?php echo $_SESSION['name'] ?></p>	
        <a href="#volet" class="ouvrir" aria-hidden="true"><i class="bi bi-person-lines-fill"></i></a>
        <a href="#volet_clos" class="fermer" aria-hidden="true">Fermer !</a>
        </div>

<body>
<div class="cards-list">
    <div class="card">
      <img class="card-img-top" src="iconeajout.png" alt="ajouter fiche">
      <div class="card-body">
      <h3 class="card-title">AJOUTER</h3>
      <p class="card-text">Ajouter une nouvelle fiche de frais ou de nouveaux frais</p>
      <a href="ajoutfichefraisadmin.php" class="btn btn-primary">Cliquez pour voir <i class="bi bi-arrow-left-circle"></i></a>
    </div>
  </div>

  <div class="card">
      <img class="card-img-top" src="frais.png" alt="fiche valide">
      <div class="card-body">
        <h3 class="card-title">MODIFICATION / SUPPRESSION</h3>
        <p class="card-text">Modifier ou supprimer des fiches de frais</p>
        <a href="listefichefrais.php" class="btn btn-primary">Cliquez pour voir <i class="bi bi-arrow-left-circle"></i></a>
    </div>
  </div>

    <?php } else{
	header("Location: Logintest/logout.php");
} ?>

</body>
</html>