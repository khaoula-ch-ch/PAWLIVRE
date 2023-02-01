<?php
session_start();



if(!isset($_SESSION['azerty']))
{
    header("Location: ../login.php");
}

if(empty($_SESSION['azerty']))
{
    header("Location: ../login.php");
}



require("../config/commande.php");


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
    <a class="navbar-brand" href="enfant.php">Les livres D'enfants</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="afficher.php">livre</a>
        </li>
      <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="../admin/"style="font-weight : bold">Nouveau</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="supprimer.php">Supprimer</a>
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
            <form method="post">
                 
                 <div class="mb-3">
                   <label for="exampleInputPassword1" class="form-label">Nom</label>
                   <input type="text" class="form-control" name="nom" required>
                 </div>
                 <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Prix</label>
                    <input type="number" class="form-control" name="prix" required>
                 </div>
                 <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Titre de L'image</label>
                    <input type="text" class="form-control" name="image" required>
                 </div>
                 <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">description</label>
                    <textarea class="form-control" name="description" required></textarea>
                 </div>
  
               <button type="submit" class="btn btn-primary" name ="valider">Valider</button>
            </form>
            </div>
       </div>
    </div>
    </body>
</html>
<?php
   if(isset($_POST['valider'])){
    if( isset($_POST['nom']) AND isset($_POST['prix']) AND  isset($_POST['image']) AND isset($_POST['description'])){
        if(!empty($_POST['nom']) AND !empty($_POST['prix']) AND !empty($_POST['image']) AND  !empty($_POST['description'])){
        $nom=htmlspecialchars(strip_tags($_POST['nom']));
        $prix=htmlspecialchars(strip_tags($_POST['prix']));
        $image=htmlspecialchars(strip_tags($_POST['image']));
        $description=htmlspecialchars(strip_tags($_POST['description']));
        try{
         ajouterenfant($nom,$prix,$image,$description);
        }
        catch(Exception $e){
            $e->getMessage();
        }
        
        } 
    }
   }
?>