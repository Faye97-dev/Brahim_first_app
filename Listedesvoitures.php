<fieldset style="font-size:35px;font-family:revert-layer;">
<center><legend>LISTES DES VOITURES</center></legend>
<table width="80%" border="2" align="center">
<tr><th> N°Chassi</th><th>Marque</th><th> Model</th><th>Annee(circulation)</th><th> Prix(en MRO)</th></tr>
<?php
include("connexion.php");
$liste=mysqli_query($brahim,"SELECT * FROM voiture");
while($fcndb=mysqli_fetch_array($liste))
{
?>
 <tr>
 <td><?php echo '00'.$fcndb['numc']; ?></td>
 <td><?php echo $fcndb['marq'];  ?></td>
 <td><?php echo $fcndb['modele'];  ?></td>
 <td><?php echo $fcndb['anneec'];  ?></td>
 <td><?php echo $fcndb['prix'];  ?></td>
 <td><a href="editer.php?x=<?php echo $fcndb['numc']; ?>">Modifier</a></td>
 <td><a href="supprimer.php?x=<?php echo $fcndb['numc']; ?>">Supprimer</a></td>
 </tr>
<?php }  ?>


<button><a href="Listedesvoitures.php">Actualiser</a>
</table>
<button><a href="index.html">Retour</a>

</fieldset>
