
<?php
require("../config/commande.php");
$mesproduits=afficherscolaire();

?> 
<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
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
          <a class="nav-link" href="afficher.php">livre</a>
        </li>
      <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Nouveau</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " href="supprimer.php" style="font-weight : bold">supprimer</a>
        </li>
       
     </ul>

    </div>
  </div>
</nav>
 
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <form method="post">
                 
              <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">identifiant</label>
                    <input type="number" class="form-control" name="idpro" required>
                 </div>
                
  
               <button type="submit" class="btn btn-primary" name ="valider">supprimer le produit </button>
            </form>
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php  foreach ($mesproduits as $scolaire):?>

                  <div class="col">
                  <div class="card shadow-sm">
   
                  
                 <img src="<?= $scolaire->image ?>">
                 <h3><?= $scolaire->id?></h3>
                   <div class="card-body">
                     </div>
                   </div>
                    </div>
                <?php  endforeach; ?>
              </div>
            </div>
       </div>
    </div>
    </body>
</html>
<?php
   if(isset($_POST['valider'])){
    if( isset($_POST['idpro'])){
        if(!empty($_POST['idpro']) AND is_numeric($_POST['idpro'])){
        
        $idpro=htmlspecialchars(strip_tags($_POST['idpro']));
        
        try{
            supprimerscolaire($idpro);
        }
        catch(Exception $e){
            $e->getMessage();
        }
        
        } 
    }
   }
?>