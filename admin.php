<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Connexion Admin</title>
</head>

<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=gsb', 'root', '');

}
catch(PDOException $e)
{
 die('Erreur :'.$e->getMessage());
}

if(!$bdd){
   exit("Echec de la connexion");
}
    else
   {
   
    $id_admin = [
        ['login' => 'Admin', 'mdp' => 'admin']
    ];
} 	
if (isset($_POST['nom']) && isset($_POST['mdp'])) :
    foreach ($id_admin as $admin) {   
        if ($_POST['nom'] == $admin['nom'] && $_POST['mdp'] == $admin['mdp']) {
        
            $_SESSION['connexion'] = $admin['login'];
        } 
    }

?>
<html>
<body>
<header>
    <div class="titre"><i>Interface de gestion de frais - GSB</i></div>
</header>

<div class="sous-titre">Connectez-vous</div>

    <div style="width: 48.4%" id="connexion_user">
        <center>
            <form name="connexion" method="post" action="user_page.php">
                <div class="user">Connexion Admin</div>
                <div class="identifiant_user">Identifiant : </div><input type="text" class="identifiant_user" name="nom_user" placeholder="Saisir votre identifiant"><br><br>
                <div class="mdp_user">Mot de passe : </div><input type="password" class="mdp_user" name="mdp_user" placeholder="Saisir votre mot de passe"><br>
                <input type="submit" name="send" value="Connexion" class="btn_connexion">
            </form>
        </center>
    </div>
    </body>
</html>