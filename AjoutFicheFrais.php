<?php
//Ouverture de la session utilisateur//
session_start();
if (isset($_SESSION['connexion_id'])) :
?>

    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/afdb0ebcde.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="AjoutFicheFrais.css">
        <title>Ajouter une fiche de frais</title>
    </head>

    <body>
        <h1>Bienvenue sur l'interface d'ajout de fiches de frais</h1>

        <h3><i>Renseigner les champs suivants et cliquez sur "Ajouter"</i></h3>

        <div style="width: 85%" id="AjoutFrais">
            <img src="HeaderFrais.jpg" class="img_header">
            <div class="titre_fiche">Votre fiche</div>
            <div class="row">
                <center>
                    <label class="nom">Nom complet : <input type="text" name="nom" class="input_nom"></label>
                    <label class="fonction">Fonction : <input type="text" name="fonction" class="input_fonction"></label>
                </center>
            </div>
            <form method="POST" action="calcul.php">
                
            </form>
            <div class="titre_saisie_frais">Saisie de vos frais ..</div>
            <label class="frais_restauration">Frais de déplacement annexes : <input type="number" name="deplacements" class="input_frais" placeholder="en €"></label><br><br>
            <label class="frais_hotellerie">Frais de hôtellerie : <input type="number" name="hotellerie" class="input_frais" placeholder="en €"></label><br><br>
            <label class="frais_deplacement">Frais de restauration : <input type="number" name="restauration" class="input_frais" placeholder="en €"></label><br>
            <?php
                $total = 0;
                    $deplacements = $_POST['deplacements'];
                    $hotellerie = $_POST['hottellerie'];
                    $restauration = $_POST['restauration'];
                    echo "$deplacements + $hotellerie + $restauration = $total";
            ?>
            <label>Total :</label><input type = $total>
            <input type="submit" action="AjoutFicheFrais.php" name="Calculer" value="Calculer" class="btn_ajouter">
        </div>
    </body>

    </html>

<?php
endif;
if (!isset($_SESSION['Connexion_utilisateur'])) {
    echo "Vous n'avez pas le droit d'accéder à cette page !";
    echo '<a href="login.php">Revenir à la page de connexion</a>';
} else {
    echo "<a href='logout.php'>Déconnexion</a>";
}
?>