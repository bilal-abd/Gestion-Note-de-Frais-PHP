<?php
//$bool1 = 0;
//$bool2 = 1;
$objetPdo = new PDO('mysql:host=localhost;dbname=gsb','root','');

    $pdoStat = $objetPdo->prepare('UPDATE `frais` SET `verif` = 1 WHERE id=:num LIMIT 1 ');
    $pdoStat->bindValue(':num',$_GET['numfrais'], PDO::PARAM_INT);
    $executeisok = $pdoStat->execute();

