<?php 
   session_start();
   include "Logintest/db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id']) && ($_SESSION['role']=='admin')) {   ?>
<?php 

//ouverture connexion bdd
$objetPdo = new PDO('mysql:host=localhost;dbname=gsb','root','');

//preparation requete
$pdoStat = $objetPdo->prepare('SELECT * FROM frais WHERE verif=0');

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
    <link rel="stylesheet" type="text/css" href="listefichefrais.css">
    <title>Liste en attente admin</title>
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
    <h1>Liste des frais en attente </h1>
<hr>
    <h2>Consulter la liste des fiches de frais en attente</h2>
    <div id="volet_clos">
	    <div id="volet">
        <p>Connecté en tant que <?php echo $_SESSION['name'] ?></p>	
		<a href="#volet" class="ouvrir" aria-hidden="true"><i class="bi bi-person-lines-fill"></i></a>
        <a href="#volet_clos" class="fermer" aria-hidden="true">Fermer !</a>
	</div>
    <a href="page_admin_GSB.php" class="action-button"> Retour </a>

<?php foreach ($frais as $frai): ?>
    <div class="container mt-3">
  <table class="table table-bordered">
    <thead>
    <b><th>Nom </th>
        <th>Déplacement </th>
        <th>Hotellerie </th>
        <th>Restauration </th>
        <th>Imprévu </th>
        <th><i class="bi bi-check-circle"></i> </th>
        <th><i class="bi bi-x-circle"></i></th></b>
      <tbody>
    </thead>
    
    <td> <?= $frai['nom'] ?> 
    <td> <?= $frai['deplacement'] ?>
    <td> <?= $frai['hotel'] ?> 
    <td> <?= $frai['restauration'] ?> 
    <td> <?= $frai['imprevu'] ?> 
    <td><a href="validerfichefrais.php?numfrais=<?= $frai['id']?>">Valider</a></td>
    <td><a href="supprimer.php?numfrais=<?= $frai['id']?>">Supprimer</a></td>
      </tr>
    </tbody>
  </table>
    </div>

    <?php endforeach; ?>

</body>
</html>

<?php }else{
	header("Location: Logintest/index.php");
} ?>