<?php 
   session_start();
   include "Logintest/db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id']) && ($_SESSION['role']=='admin')) {   ?>
<?php 

//ouverture connexion bdd
$objetPdo = new PDO('mysql:host=localhost;dbname=gsb','root','');

//preparation requete
$pdoStat = $objetPdo->prepare('SELECT * FROM frais WHERE verif=1');

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
    <title>Frais validés </title>
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
        <a class="nav-link" href="#">Accueil</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Logintest/logout.php" class="deconnexion">Deconnexion
        <i class="bi bi-box-arrow-right"></i></a>
      </li>
    </ul>
  </div>
</nav>
    
<h1>Liste des frais validés</h1>

<ul>
<?php foreach ($frais as $frai): ?>
    <table class="table table-bordered border-primary">
    <?= $frai['nom'] ?> :  <?= $frai['deplacement'] ?> - <?= $frai['hotel'] ?> > - <?= $frai['restauration'] ?> - <?= $frai['imprevu'] ?>
    <a href="supprimer.php?numfrais=<?= $frai['id']?>">Supprimer</a>
    <a href="form_modification.php?numfrais=<?= $frai['id']?>">Modifier</a>
</table>
    <?php endforeach; ?>

</ul>
</body>
</html>

<?php }else{
	header("Location: Logintest/index.php");
} ?>