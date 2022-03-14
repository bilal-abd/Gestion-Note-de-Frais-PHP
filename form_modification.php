<?php

//ouverture connexion bdd
$objetPdo = new PDO('mysql:host=localhost;dbname=gsb','root','');

//preparation requete

$pdoStat = $objetPdo->prepare('SELECT * FROM frais WHERE id=:num');

//liason param
$pdoStat->bindValue(':num',$_GET['numfrais'],PDO::PARAM_INT);

// exe requete
$executeisok = $pdoStat->execute();

// recup le contact

$frai = $pdoStat->fetch();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Modification</h1>
   <form action="modifier.php" method="POST">
       <input type="hidden" name="numfrais" value="<?= $frai['id']?>">
            <center>Nom&nbsp;&nbsp;:&nbsp;&nbsp;<input type="text" name="nom" value="<?= $frai['nom']?>" placeholder="Entrez votre nom"><br></center>
            

            <center><i class="intro">Saisissez les différents frais engagés</i></center><br><br>
            
            <table>
                <tr>
                    <th scope="col">Type de prestation</th>
                    <th scope="col">Saisie</th>
                    
                </tr>
                <tr>
                    <th scope="row"><label>Frais de déplacements</label></th>
                    <td><input type="number" name="deplacement" value="<?= $frai['deplacement']?>" ></td>
                </tr>
                <tr>
                    <th scope="row"><label>Frais d'hôtellerie</label></th>
                    <td><input type="number" name="hotel" value="<?= $frai['hotel']?>" ></td>
                </tr>
                <tr>
                    <th scope="row"><label>Frais de restauration :</label></th>
                    <td><input type="number" name="restauration" value="<?= $frai['restauration']?>" ></td>
                </tr>
                <input type="submit" value="Enregistrer les modifications" >
                </form>
</body>
</html>