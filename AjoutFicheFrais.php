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
        <h1>Ajout de fiches de frais</h1>

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
            <center>
                <form action="#">
                    <label>Frais de déplacements :</label> <input type="text" name="valeur_01" id="valeur_01" onchange="calculateSOMME()" value="0"><br /><br />
                    <label>Frais d'hôtellerie :</label> <input type="text" name="valeur_02" id="valeur_02" onchange="calculateSOMME()" value="0"><br /><br />
                    <label>Frais de restauration :</label> <input type="text" name="valeur_03" id="valeur_03" onchange="calculateSOMME()" value="0"><br /><br />
                    <label>Total :</label> <input type="text" name="valeur_somme" id="valeur_somme" style="color:red;">
                </form>
            </center>
            <script type=text/javascript>
                function calculateSOMME() {
                    var element1 = document.getElementById('valeur_01');
                    var element2 = document.getElementById('valeur_02');
                    var element3 = document.getElementById('valeur_03');
                    var somme_frais = document.getElementById('valeur_somme');
                    total = parseFloat(element1.value) + parseFloat(element2.value) + parseFloat(element3.value);
                    somme_frais.value = total;
                }
            </script>

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