<?php
session_start();

require("../config/commande.php");

if(!isset($_SESSION['azerty']))
{
    header("Location: loginscolaire.php");
}

if(empty($_SESSION['azerty']))
{
    header("Location: loginscolaire.php");
}

if(!isset($_GET['id'])){
    header("Location: afficher.php");
}

if(empty($_GET['id']) OR !is_numeric($_GET['id'])){
    header("Location: afficher.php");
}

if(isset($_GET['id'])){
    
    if(!empty($_GET['id']) OR is_numeric($_GET['id']))
    {
        $id = $_GET['id'];
        $lelivre = afficherUnProduitscolaire($id);
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="scolaire.php">Les livres</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="afficher.php">livre</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Nouveau</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="supprimer.php">Supprimer</a>
            </li>

            <li class="nav-item">
            <a class="nav-link active" style="font-weight: bold; color: green" href="" >Modification</a>
            </li>
            
        </ul>

    </div>
    </nav>

    <div class="album py-5 bg-light">
        <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

<?php foreach ($lelivre as $scolaire): ?>
        
    <form method="post">
    
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nom du produit</label>
        <input type="text" class="form-control" name="nom" value="<?= $scolaire->nom ?>"  required>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Prix</label>
        <input type="number" class="form-control" name="prix" value="<?= $scolaire->prix ?>" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">L'image du produit</label>
        <input type="name" class="form-control" name="image" value="<?= $scolaire->image ?>" required>

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Description</label>
        <textarea class="form-control" name="description" required><?= $scolaire->description ?></textarea>
    </div>

    <button type="submit" name="valider" class="btn btn-success">Enregistrer</button>
    </form>

    <?php endforeach; ?>

</div></div></div>

    
</body>
</html>

<?php

    if(isset($_POST['valider']))
    {
        if( isset($_POST['nom']) AND isset($_POST['prix']) AND  isset($_POST['image']) AND isset($_POST['description']))
        {
        if( !empty($_POST['nom']) AND !empty($_POST['prix']) AND  !empty($_POST['image']) AND !empty($_POST['description']))
            {
                
                $nom = htmlspecialchars(strip_tags($_POST['nom']));
                $prix = htmlspecialchars(strip_tags($_POST['prix']));
                $image = htmlspecialchars(strip_tags($_POST['image']));
                $description = htmlspecialchars(strip_tags($_POST['description']));
            
                if(isset($_GET['id'])){
    
                    if(!empty($_GET['id']) OR is_numeric($_GET['id']))
                    {
                        $id = $_GET['id'];
                    }
                }

            try 
            {
                modifierscolaire( $nom, $prix, $image,  $description, $id);
                header('Location: afficher.php');
            } 
            catch (Exception $e) 
            {
                $e->getMessage();
            }

            }
        }
    }

?>