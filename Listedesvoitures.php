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
        <div class="h4">Liste des voitures</div>
        <div class="d-flex gap-3">
            <button class="btn btn-success">
                <a href="Listedesvoitures.php" class="text-white" style="text-decoration:none;">Actualiser</a>
            </button>

            <button class="btn btn-danger">
                <a href="index.html" class="text-white" style="text-decoration:none;">Retour</a>
            </button>
        </div>
    </div>

    <div class="d-flex align-items-center justify-content-center">
        <table class="table table-secondary table-striped" width="80%" align="center">
            <tr class="my-4">
                <th>N°Chassi</th>
                <th>Marque</th>
                <th>Model</th>
                <th>Annee (circulation)</th>
                <th>Prix (en MRO)</th>
                <th></th>
                <th></th>
            </tr>
            <?php
                include("connexion.php");
                $liste=mysqli_query($brahim,"SELECT * FROM voiture");
                while($fcndb=mysqli_fetch_array($liste))
            {?>
                <tr class="my-4">
                    <td><?php echo '00'.$fcndb['numc']; ?></td>
                    <td><?php echo $fcndb['marq'];  ?></td>
                    <td><?php echo $fcndb['modele'];  ?></td>
                    <td><?php echo $fcndb['anneec'];  ?></td>
                    <td><?php echo $fcndb['prix'];  ?> MRU</td>
                    <td><a href="editer.php?x=<?php echo $fcndb['numc']; ?>" style="text-decoration:none;">Modifier</a></td>
                    <td><a href="supprimer.php?x=<?php echo $fcndb['numc']; ?>" style="text-decoration:none;">Supprimer</a></td>
                </tr>
            <?php }?>


        
        </table>
    </div>
  </div>
</body>






