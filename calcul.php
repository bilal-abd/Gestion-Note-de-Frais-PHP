<?php
$hotellerie=$_POST["hotellerie"];
$restauration=$_POST["restauration"];
$deplacement=$_POST["deplacements"];
$total= ($deplacement + $restauration +$hotellerie);

echo" la note total des frais de déplacement correspond a $total "
?>