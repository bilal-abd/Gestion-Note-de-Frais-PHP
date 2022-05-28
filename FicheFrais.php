<?php
//Ouverture de la session utilisateur//
session_start();
include "Logintest/db_conn.php";
if (isset($_SESSION['username']) && isset($_SESSION['id']) && ($_SESSION['role']=='user')) {   ?>
 <!DOCTYPE html>
 <html lang="fr">

    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="FicheFrais.css">
        <title>Ajouter une fiche de frais</title>
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
        <div id="Fiche">
            <h1 class="titre_fiche">FICHE DE FRAIS</h1>
            <HR>
        <h2>Renseigner vos fiches de frais</h2>
            <form action="insertion.php" method="POST">
            <div id="volet_clos">
	    <div id="volet">
        <p>Connecté en tant que <?php echo $_SESSION['name'] ?></p>	
		<a href="#volet" class="ouvrir" aria-hidden="true"><i class="bi bi-person-lines-fill"></i></a>
        <a href="#volet_clos" class="fermer" aria-hidden="true">Fermer !</a>
	</div>
</div>

            <table class="table">
     <thead>
     	<tr>
     	 <th>Type de prestation</th>
     	 <th>Saisie</th>
     	</tr>
     </thead>
     <tbody>
     	  <tr>
     	  	  <td data-label="S.No">Frais de déplacements</td>
     	  	  <td data-label="Name"><input type="number" name="deplacement"></td>
     	  </tr>

     	  <tr>
     	  	  <td data-label="S.No">Frais d'hôtellerie</td>
     	  	  <td data-label="Name"><input type="number" name="hotel"></td>
     	  </tr>

     	  <tr>
     	  	  <td data-label="S.No">Frais de restauration</td>
     	  	  <td data-label="Name"><input type="number" name="restauration"></td>
     	  </tr>
           <tr>
     	  	  <td data-label="S.No">Frais imprévus </td>
     	  	  <td data-label="Name"><input type="number" name="imprevu"></td>
     	  </tr>
     </tbody>
   </table>
             <div class="envoyer">
              <input type="submit" value="Envoyer">
             </div>
          </form>
    </body>
        <a href="accueil.php" class="action-button"> Retour </a>
</html>

<?php }else{
header("Location: Logintest/index.php");
} 
?>