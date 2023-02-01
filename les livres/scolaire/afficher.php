<?php
require("../config/commande.php");
$mesproduits=afficherscolaire();

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
    <a class="navbar-brand" href="scolaire.php">Les livres</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active " href="afficher.php" style="font-weight : bold">livre</a>
        </li>
      <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php" >Nouveau</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="supprimer.php" style="font-weight : bold">Supprimer</a>
        </li>
</ul>
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
                <th scope="col">nom</th>
                <th scope="col">image</th>
                <th scope="col">prix</th>
                <th scope="col">Description</th>
                <th scope="col">Editer</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($mesproduits as $scolaire): ?>
                <tr>
                <th scope="row"><?= $scolaire->id ?></th>
                <td><?= $scolaire->nom?></td>
                <td>
                <img src="<?= $scolaire->image?>" style="width: 15%">
                </td>
               
                <td style="font-weight: bold; color: green;"><?= $scolaire->prix ?>DA</td>
                <td><?= substr($scolaire->description, 0, 100); ?></td>
                <td><a href="editer.php?id=<?= $scolaire->id ?>"><img src="editer.jpg" style=width:40px;></a></td>
                </tr>      
<?php endforeach; ?>

            </tbody>
            </table>
              
             </div>
       </div>
    </div>
    </body>
</html>
