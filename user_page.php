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
    <link rel="icon" type="image/png" sizes="16x16" href="Commercial.png">
    <link rel="stylesheet" type="text/css" href="user_page.css">
    <title>Connexion</title>
</head>

<body>

    <?php
    // Vérification que les deux champs sont bons //
    if (isset($_POST['nom_user']) && isset($_POST['mdp_user'])) :
    foreach ($id_users as $user) {      //On rentre dans une boucle pour vérifier l'exactitude des identifiants //
        if ($_POST['nom_user'] == $user['login'] && $_POST['mdp_user'] == $user['psw']) {
            // Si non connecté //
            $_SESSION['connexion'] = $user['login'];
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
    <center><a href='FicheFrais.php' class="accès_fiche"> Accéder à la page de renseignements des frais</a></center>
    <p style="margin-bottom: 250px"></p>
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