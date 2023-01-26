<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"
  />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
    rel="stylesheet"
  />
</head>
<body style="font-family: 'Poppins', sans-serif">
    <?php 
        include ("connexion.php");
        $m=$_GET['x'];
        $l=mysqli_query($brahim,"SELECT * FROM voiture WHERE numc='$m'");
        $r=mysqli_fetch_array($l);
    ?>

    <nav class="navbar navbar-dark bg-primary p-2">
        <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-3" href="#">
            <img src="/logo.jpg" alt="" width="60" />
            <p class="h3 text-white mt-2">PARC AUTO</p>
        </a>
        </div>
    </nav>

    <div class="container mx-5 mt-5">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <div class="h4">Modification d'une voiture</div>
            <div class="d-flex gap-3">
                <button class="btn btn-danger">
                    <a href="Listedesvoitures.php" class="text-white" style="text-decoration:none;">
                        Retour
                    </a>
                 </button>
            </div>
        </div>

        <div class="d-flex align-items-center justify-content-center">
        <form action="modifier.php" method="POST">
            <input type="hidden" name="numc" value="<?=$r['numc']?>">

            <div class="d-flex align-items-center gap-3 mb-4">
                <label> MARQUE : </label>
                <select style="width: 250px" type="text" name="marq" value="">
                    <option></option>
                    <option>BMW</option>
                    <option>LAMBORGINI</option>
                    <option>AUDI</option>
                    <option>FERARI</option>
                </select>
            </div>

            <div class="d-flex align-items-center gap-3 mb-4">
                <label> MODEL : </label>
                <input style="width: 262px" type="text" name="modele" value="" />
            </div>

            <div class="d-flex align-items-center gap-3 mb-3">
                <label> ANNEE (circulation) : </label>
                <input
                    type="date"
                    style="width: 165px; padding: 3px"
                    name="anneec"
                    value="date"
                />
            </div>

            <div class="d-flex align-items-center gap-3 mb-4">
                <label> PRIX : </label>
                <input type="text" style="width: 283px" name="prix" value="" />
            </div>

            <div class="d-flex align-items-center gap-3 mb-4">
                <input
                    type="submit"
                    class="btn btn-primary px-4"
                    name="ok"
                    value="Modifier"
                />
            </div>
        </form>
        </div>
    </div>
</body>






<!-- <center><h1>Modifications</h1><hr></center>
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
</body>    -->