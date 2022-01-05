<?php
session_start();
    include('Variables.php');
?>

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

    <?php
    // Vérification que les deux champs sont bons //
    if (isset($_POST['nom_admin']) && isset($_POST['mdp_admin'])) :
    foreach ($id_admins as $admin) {      //On rentre dans une boucle pour vérifier l'exactitude des identifiants //
        if ($_POST['nom_admin'] == $admin['login'] && $_POST['mdp_admin'] == $admin['psw']) {
            // Si non connecté //
            $_SESSION['connexion'] = $admin['login'];
        } 
    }

    if(!isset($_SESSION['connexion'])): ?> <!-- si identifiants pas trouvés => pas connecté -->

         <p>Pas connecté !</p>

    <?php else: ?> <!-- Session ouverte donc idetifiants trouvés -->

    <div class="message_bienvenue">
        <?php
            echo '<h2>Bienvenue ' . $_SESSION['connexion'] ;
        ?>
    </div>
    <center>
    <div class="container">
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="ConsultationFicheFrais.png" height="100" width="300">
                    <h3>CONSULTATION</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p><i>Cliquez ici pour consulter les fiches de frais</i></p>
                        <a href="#">Accéder</a></a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="IconeAjoutFrais.png">
                    <h3>AJOUT</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p><i>Cliquez ici pour ajouter une nouvelle fiche de frais ou de nouveaux frais</p>
                        <a href="#">Accéder</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="face face1">
                <div class="content">
                    <img src="IconeSuppressionFrais.png"> <img src="IconeModificationFrais.png">
                    <h3>MODIFICATION / SUPPRESSION</h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <p><Canvas<I>Cliquez ici ou modifier ou supprimer des frais</Canvas></p>
                        <a href="#">Accéder</a>
                </div>
            </div>
        </div>
    </div>
    </center>
    <a href='logout.php' class="btn_deconnexion">Déconnexion</a>
    </center>



    <?php 
    endif; 
    else:?>
    <!-- non saisie des identifiants -->
        <p>Identifiants non saisi <br> <a href="login_connexion.php">Revenir à l'accueil</a></p>
    <?php endif; ?>

</body>

</html>