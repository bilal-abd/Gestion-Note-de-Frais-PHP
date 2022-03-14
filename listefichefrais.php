<?php 



//ouverture connexion bdd
$objetPdo = new PDO('mysql:host=localhost;dbname=gsb','root','');


//preparation requete

$pdoStat = $objetPdo->prepare('SELECT * FROM frais');


//exe requete
$executeisok = $pdoStat->execute();



// recup resultat

$frais = $pdoStat->fetchAll();


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
    
<h1>Liste des frais</h1>




<ul>




<?php foreach ($frais as $frai): ?>

    <li>


    <?= $frai['nom'] ?>   <?= $frai['deplacement'] ?> -   <?= $frai['hotel'] ?> -   <?= $frai['restauration'] ?> 
    <a href="supprimer.php?numfrais=<?= $frai['id']?>">Supprimer</a>
    <a href="form_modification.php?numfrais=<?= $frai['id']?>">Modifier</a>

</li>






    <?php endforeach; ?>

</ul>
</body>
</html>