<?php
include("connexion.php");
//Je récupere mes données
$nu=$_POST['numc'];
$w=$_POST['marq'];
$b=$_POST['modele'];
$c=$_POST['anneec'];
$d=$_POST['prix'];
$x=mysqli_query($brahim,"UPDATE voiture SET marq='$w', modele='$b', anneec='$c', prix='$d' WHERE numc='$nu'");

header("location:Listedesvoitures.php");

?>