<?php 

// connexion a la bdd gsb



$objetPdo = new PDO('mysql:host=localhost;dbname=gsb','root','');


// preparation insertion


$pdoStat = $objetPdo->prepare('INSERT INTO frais VALUES (NULL, :nom, :deplacement, :hotel, :restauration)');



$pdoStat->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$pdoStat->bindValue(':deplacement', $_POST['deplacement'], PDO::PARAM_STR);
$pdoStat->bindValue(':hotel', $_POST['hotel'], PDO::PARAM_STR);
$pdoStat->bindValue(':restauration', $_POST['restauration'], PDO::PARAM_STR);


// exe de la requete


$insertisok = $pdoStat->execute();

if($insertisok) {

$message = 'Les frais ont été ajouté dans la base de données';

}
else {

    $message = 'Echec de l/insertion';
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
    <h1> Insertion des contacts</h1>
    <p><?php echo $message; ?>   </p>
</body>
</html>