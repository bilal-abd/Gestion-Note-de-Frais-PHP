<?php
//Ouverture de la session utilisateur//
session_start();
if (isset($_SESSION['connexion'])) :
?>

    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/afdb0ebcde.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="FicheFrais.css">
        <title>Ajouter une fiche de frais</title>
    </head>

    <body>

        <img src="HeaderFF.png" width="100%">

        <div style="width: 94%" id="Fiche">
            <div class="titre_fiche">Fiche de frais &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="GSB.png" class="icone_GSB"></div>
            <div class="titre_identité_visiteur">Identité du visisteur :</div>
            <div class="nom_visiteur">Nom du visiteur</div><br>
            <div class="titre_fonction_visiteur">Fonction:</div>
            <div class="fonction_visiteur">fonction visiteur</div>

            <table>
                <tr>
                    <th scope="col">Type de prestation</th>
                    <th scope="col">Saisie</th>
                    <th scope="col">Total</th>
                </tr>
                <tr>
                    <th scope="row"><label>Frais de déplacements</label></th>
                    <td><input type="text" name="valeur_01" id="valeur_01" onchange="calculateSOMME()" value="0"></td>
                </tr>
                <tr>
                    <th scope="row"><label>Frais d'hôtellerie</label></th>
                    <td><input type="text" name="valeur_02" id="valeur_02" onchange="calculateSOMME()" value="0"></td>
                </tr>
                <tr>
                    <th scope="row"><label>Frais de restauration :</label></th>
                    <td><input type="text" name="valeur_03" id="valeur_03" onchange="calculateSOMME()" value="0"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="text" name="valeur_somme" id="valeur_somme" style="color:red;"></td>
                </tr>
            </table>
        </div>
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

        </div>
    </body>

    </html>

<?php
endif;
if (!isset($_SESSION['Connexion_utilisateur'])) {
    echo '<a href="login.php" class="btn_deconnexion">Revenir à la page de connexion</a>';
} else {
    echo "<a href='logout.php'>Déconnexion</a>";
}
?>