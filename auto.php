<?php
//je fait appelle à ma conection
include("connexion.php");
//je récupere mes données
$w=$_POST['marq'];
$b=$_POST['modele'];
$c=$_POST['anneec'];
$d=$_POST['prix'];
$x=mysqli_query($brahim,"INSERT INTO voiture (`marq`, `modele`, `anneec`, `prix`) VALUES ('$w', '$b', '$c', '$d')");
header("location:Listedesvoitures.php");

?>