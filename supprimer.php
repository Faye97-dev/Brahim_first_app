<?php
include("connexion.php");
$n=$_GET['x'];

$s=mysqli_query($brahim,"DELETE FROM voiture WHERE numc='$n'");


?>