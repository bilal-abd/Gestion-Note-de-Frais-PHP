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
        <script src="https://kit.fontawesome.com/afdb0ebcde.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image/png" sizes="16x16" href="Frais.png">
        <link rel="stylesheet" type="text/css" href="FicheFrais.css">
        <title>Ajouter une fiche de frais</title>
    </head>

    <body>

        <img src="HeaderFF.png" width="100%">

        <div style="width: 94%" id="Fiche">

            <div class="titre_fiche">Fiche de frais &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="GSB.png" class="icone_GSB"></div>
            <form action="insertion.php" method="POST">
            <center>Nom&nbsp;&nbsp;:&nbsp;&nbsp;<input type="text" name="nom" placeholder="Entrez votre nom"><br></center>
            

            <center><i class="intro">Saisissez les différents frais engagés</i></center><br><br>
            
            <table>
                <tr>
                    <th scope="col">Type de prestation</th>
                    <th scope="col">Saisie</th>
                    
                </tr>
                <tr>
                    <th scope="row"><label>Frais de déplacements</label></th>
                    <td><input type="number" name="deplacement" ></td>
                </tr>
                <tr>
                    <th scope="row"><label>Frais d'hôtellerie</label></th>
                    <td><input type="number" name="hotel" ></td>
                </tr>
                <tr>
                    <th scope="row"><label>Frais de restauration :</label></th>
                    <td><input type="number" name="restauration" ></td>
                </tr>
                <input type="submit" value="Envoyer" >
                </form>
        
            </table>
            </div>
            
        

        </div>
    </body>

    </html>


<a href="Logintest/logout.php">Deconnexion</a>

    





    <?php }else{
	header("Location: index.php");
} ?>