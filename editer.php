<?php 

include ("connexion.php");
$m=$_GET['x'];
$l=mysqli_query($brahim,"SELECT * FROM voiture WHERE numc='$m'");
$r=mysqli_fetch_array($l);

 ?>

<center><h1>Modifications</h1><hr></center>
<body>
 <form action="modifier.php" method="POST">
<table style="font-size:15px;font-family:Microsoft JhengHei;" border="0" align="center">
    <tr>
                <td></td>
                <td>
                    <input type="hidden" name="numc" value="<?=$r['numc']?>">
                </td>
            </tr>
    <tr>
            <td>MARQUE: </td>
            <td>
                <select type="text" name="marq">
                    <option></option>
                    <option>BMW</option>
                    <option>LAMBORGINI</option>
                    <option>AUDI</option>
                    <option>FERARI</option>
            </td>
        </tr>
        <tr>
            <td>MODEL: </td>
            <td>
                <input type="text" name="modele">
            </td>
        </tr>
        <tr>
            <td>ANNEE(circulation): </td>
            <td>
                <input type="date" name="anneec">
            </td>
        </tr><tr>
            <td>PRIX: </td>
            <td>
                <input type="text" name="prix">
            </td>
        <tr>
            <td> </td>
            <td>
                <input type="submit" name="ok" value="Modifier">
            </td>
        </tr>

    </table>
    <button><a href="Listedesvoitures.php">Retour</a>
</form> 
</body>   