<!DOCTYPE html>
<html lang="fr">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="icon" type="image/png" sizes="16x16" href="Déconnexion.png">
     <link rel="stylesheet" type="text/css" href="logout.css">
     <title>Déconnexion</title>
</head>

<body>

</body>

</html>

<?php
echo "<center>";
echo "<br><br><br><br><br>";
// Initialisation de la session.
// Si vous utilisez un autre nom
// session_name("autrenom")
session_start();
// Détruit toutes les variables de session 
$_SESSION = array();
// Si vous voulez détruire complètement la session, effacez également // le cookie de session.
// Note : cela détruira la session et pas seulement les données de session !
if (ini_get("session.use_cookies")) {
     $params = session_get_cookie_params();
     setcookie(
          session_name(),
          '',
          time() - 42000,
          $params["path"],
          $params["domain"],
          $params["secure"],
          $params["httponly"]
     );
     echo "<em>.. destruction des cookies ..</em>";
     echo "<br><br>";
}
?>

<?php
// Finalement, on détruit la session.
session_destroy();
?>
     <div class="succès_deconnexion">
          <?php
               echo "Déconnexion avec succès !<br/>";
          ?>
     </div>
     <div class="retour_accueil">
          <?php
               echo "<a href='Accueil.php' class='btn_deconnexion'>Revenir à l'accueil</a>";
          ?>
     </div>