<?php
session_start();
$nom = 'Younes';
$psw = 'younes';
?>
<?php
$data = [
    'host' => 'localhost',
    'database' => 'bd_gsb',
    'user' => 'root',
    'password' => '',
];
function getPDO(array $data): PDO {
    try {
        $bdd = new PDO(
            'mysql:host=' . $data['host'] . ';dbname=' . $data['database'] . ';charset=utf8',
            $data['user'],
            $data['password']
        );
        return $bdd;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
$nom = '';
$password = '';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login_connexion.css">
    <title>Connexion</title>
</head>

<body>

    <header>
        <div class="titre"><i>Interface de gestion de frais - GSB</i></div>
    </header>

    <div class="sous-titre">Connectez-vous avec vos identifiants et accédez à vos fonctionnalités ...</div>
    <?php   // Vérification que les deux champs sont bons //
    if (!isset($_POST['nom']) && isset($_POST['psw'])) :
    ?>
    
        <?php   // Si non connecté //
        if ($_POST['nom'] == $nom && $_POST['psw'] == $password) {
            
            $_SESSION['connexion'] = $nom;
            echo "<center>";
            echo "<h2>Bienvenue </h2> $nom";
            echo "</center>";
        } else {
            echo "<em>Vous</em>";
            echo "<a href='login.php'>Revenir à l'accueil</a>";
        }
    else :
        ?>
        <div style="width: 48.4%" id="connexion_user">
            <center>
                <form name="connexion" method="post" action="user_page.php">
                    <div class="user">Connexion visiteur</div>
                    <div class="identifiant_visiteur">Identifiant : </div><input type="text" class="saisie_identifiant" name="nom" placeholder="Saisir votre identifiant"><br><br>
                    <div class="mdp_visiteur">Mot de passe : </div><input type="password" class="saisie_mdp" name="mdp" placeholder="Saisir votre mot de passe"><br>
                    <input type="submit" name="send" value="Connexion" class="btn_connexion">
                </form>
            </center>
        </div>
        <div style="width: 48.4%" id="connexion_user">
            <center>
                <form name="connexion" method="post" action="admin_page.php">
                    <div class="admin">Connexion comptable</div>
                    <div class="identifiant">Identifiant : </div><input type="text" class="saisie_identifiant" name="nom" placeholder="Saisir votre identifiant"><br><br>
                    <div class="mdp">Mot de passe : </div><input type="password" class="saisie_mdp" name="psw" placeholder="Saisir votre mot de passe"><br>
                    <input type="submit" name="send" value="Connexion" class="btn_connexion">
                </form>
            </center>
        </div>

    <?php
    endif;
    ?>

</body>

</html>