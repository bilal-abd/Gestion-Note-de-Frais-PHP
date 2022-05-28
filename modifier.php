<?php
//ouverture connexion bdd
$objetPdo = new PDO('mysql:host=localhost;dbname=gsb','root','');

$pdoStat = $objetPdo->prepare('UPDATE frais set id=:id, nom=:nom, deplacement=:deplacement, hotel=:hotel, restauration:=restauration, imprevu=:imprevu');

$pdoStat->bindValue(':id', $_POST['id'],PDO::PARAM_INT);
$pdoStat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$pdoStat->bindValue(':deplacement', $_POST['deplacement'], PDO::PARAM_STR);
$pdoStat->bindValue(':hotel', $_POST['hotel'], PDO::PARAM_STR);
$pdoStat->bindValue(':restauration', $_POST['restauration'], PDO::PARAM_STR);
$pdoStat->bindValue(':imprevu', $_POST['imprevu'], PDO::PARAM_STR);

$executeisok= $pdoStat->execute();
if($executeisok) {

    $message = 'Les frais ont été mis a jour dans la base de données';
    }
    else {
        $message = 'Echec de la mise a jour des frais';
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <title>Modifier</title>
</head>
<body>
   <h1>Modification des données</h1> 
   <p><?= $message ?> </p>
</body>
</html>