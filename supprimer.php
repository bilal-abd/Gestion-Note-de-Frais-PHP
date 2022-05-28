<?php

//ouverture connexion bdd
$objetPdo = new PDO('mysql:host=localhost;dbname=gsb','root','');

//preparation requete
$pdoStat = $objetPdo->prepare('DELETE FROM frais WHERE id=:num LIMIT 1');

//liason param
$pdoStat->bindValue(':num',$_GET['nom'], PDO::PARAM_INT);

// exe requete
$executeisok = $pdoStat->execute();

if($executeisok){
$message =  header("Location: listefichefrais.php");

}
else {
$message = 'Echec de la suppresion des frais clients';
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer</title>
</head>
<body>
   <h1>Suppression</h1> 
   <p> <?= $message ?> </p>
</body>
</html>