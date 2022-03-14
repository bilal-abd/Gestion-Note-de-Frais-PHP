<?php

//ouverture connexion bdd
$objetPdo = new PDO('mysql:host=localhost;dbname=gsb','root','');

//preparation requete

$pdoStat = $objetPdo->prepare('DELETE FROM frais WHERE id=:num LIMIT 1');

//liason param
$pdoStat->bindValue(':num',$_GET['numfrais'], PDO::PARAM_INT);


// exe requete
$executeisok = $pdoStat->execute();

if($executeisok){
$message = 'Les frais clients ont été supprimé';

}
else {
$message = 'Echec de la suppresion des frais clients';

}



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
   <h1>Suppresion</h1> 
   <p><?= $message ?></p>
</body>
</html>