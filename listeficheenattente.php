<?php 
   session_start();
   include "Logintest/db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id']) && ($_SESSION['role']=='user')) {   ?>
<?php 

//ouverture connexion bdd
$objetPdo = new PDO('mysql:host=localhost;dbname=gsb','root','');

//preparation requete
$test = "SELECT * FROM frais WHERE nom = '$_SESSION[name]' and verif='0'";
$pdoStat = $objetPdo->prepare($test); 

//exe requete
$executeisok = $pdoStat->execute();

// recup resultat
$frais = $pdoStat->fetchAll();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="Listefichefraisvalide.css">
    <title>Fiche en attente </title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<img class="imggsb" src="gsb_logo.png">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item active">
        <a class="nav-link" href="accueil.php">Accueil</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Logintest/logout.php" class="deconnexion">Deconnexion
        <i class="bi bi-box-arrow-right"></i></a>
      </li>
    </ul>
  </div>
</nav>

    <h1>Frais en attente </h1>
    <HR>
    <h2>Consulter sa liste de fiches de frais en attente</h2>
    <div id="volet_clos">
	    <div id="volet">
        <p>Connecté en tant que <?php echo $_SESSION['name'] ?></p>	
		<a href="#volet" class="ouvrir" aria-hidden="true"><i class="bi bi-person-lines-fill"></i></a>
        <a href="#volet_clos" class="fermer" aria-hidden="true">Fermer !</a>
	</div>

<?php foreach ($frais as $frai): ?>
    <div class="container mt-3">
  <table class="table table-bordered">
    <thead>
        <th>Déplacement </th>
        <th>Hotellerie </th>
        <th>Restauration </th>
        <th>Imprévu </th>
      </tr>
    </thead>
    <tbody>
    
    <td> <?= $frai['deplacement'] ?>
    <td> <?= $frai['hotel'] ?> 
    <td> <?= $frai['restauration'] ?> 
    <td> <?= $frai['imprevu'] ?> 
      </tr>
    </tbody>
  </table>
    </div>
    <a href="accueil.php" class="action-button"> Retour </a>

<?php endforeach; ?>

<?php
//preparation requete
$test2 = "SELECT * FROM frais WHERE nom = '$_SESSION[name]' and verif='1'  " ;
$pdoStat2 = $objetPdo->prepare($test2); 

//exe requete
$executeisok = $pdoStat2->execute();

// recup resultat
$frais = $pdoStat2->fetchAll();
?>

</body>
</html>

<?php }else{
	header("Location: Logintest/index.php");
} ?>