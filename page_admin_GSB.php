
<?php 
   session_start();
   include "Logintest/db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="Comptable.png">
    <link rel="stylesheet" type="text/css" href="admin_page.css">
    <title>Connexion</title>
</head>

<body>

    </div>
    <center>
    <div class="container">
        
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="IconeAjoutFrais.png">
                    <h3>AJOUT Des fiches frais</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p><i>Cliquez ici pour ajouter une nouvelle fiche de frais ou de nouveaux frais</p>
                        <a href="ajoutfichefraisadmin.php">Accéder</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="IconeSuppressionFrais.png"> <img src="IconeModificationFrais.png">
                    <h3> Liste fiche frais : MODIFICATION / SUPPRESSION</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p><Canvas<I>Cliquez ici ou modifier ou supprimer des frais</Canvas></p>
                        <a href="listefichefrais.php">Accéder</a>
                </div>
            </div>
        </div>
    </div>
    </center>
    <a href='Logintest/logout.php' class="btn_deconnexion">Déconnexion</a>
    </center>

</body>

</html>
<?php }else{
	header("Location: Logintest/index.php");
} ?>