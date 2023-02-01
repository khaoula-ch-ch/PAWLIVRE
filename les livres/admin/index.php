<?php
require("../config/commande.php");
$mesproduits=affichercomm();

?> 
<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../">Les livres</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active " href="afficher.php" style="font-weight : bold">Reclamations</a>
        </li>
     
     </ul>
    <div style="display : flex; justify-content : flex-end ;">
       <a herf="deconnexion.php" class="btn btn-danger" >Se deconnecter </a>
    </div>
    </div>
  </div>
</nav>

    <div class="album py-5 bg-light">
        <div class="container">
             <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
             <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First name</th>
                <th scope="col">Last name</th>
                <th scope="col">email</th>
                <th scope="col">phone number</th>
                <th scope="col">Commantaire</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($mesproduits as $comm): ?>
                <tr>
                <th scope="row"><?= $comm->id ?></th>
                <td><?= $comm->nom?></td>
                <td>
               <?= $comm->prenom ?>
                </td>
               
                <td><?= $comm->mail?>DA</td>
                <td><?=$comm->num ?></td>
                <td><?=$comm->recla ?></td>
                </tr>      
<?php endforeach; ?>

            </tbody>
            </table>
              
             </div>
       </div>
    </div>
    </body>
</html>
