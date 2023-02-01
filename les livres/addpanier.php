<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="essay/styl.css">
	<title> site culturel de vente de livres </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">Les Livres </a>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <button class="btn btn btn-secondary me-2" type="button"  href="login.php" >
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorie
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="enfant/enfant.php">Enfant</a></li>
            <li><a class="dropdown-item" href="cuisine/cuisine.php">Cuisine</a></li>
            <li><a class="dropdown-item" href="cuisine/scolaire.php">Scolaire</a></li>
            <li><a class="dropdown-item" href="roman/roman.php">Roman</a></li>
            <li><a class="dropdown-item" href="univer/univer.php">universitaire</a></li>
          </ul>
          </li>
         </button> 
       <button class="btn btn btn-secondary me-2 " type="button"  href="login.php" >   
           <a class="nav-link " href="login.php" role="button" > Adminstrateur</a>
        </button>
            &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            <button class="btn btn btn-secondary me-2 " type="button" >  
            <a class="nav" href="panier.php" role="button" >
          <image src="panier.png" style=width:70px;>
      </a>
      </button>

      

   

      </ul>
    
    </div>
  </div>
</nav>

  
    <!--wibesite-->
        <div id="hero">
        </div>
 
<?php


require("panier.class.php");
require ("DB.class.php");
$DB= new DB();
$panier= new panier($DB);

if(isset($_GET['id'])){
    $mesproduits = $DB->query('SELECT id FROM livre WHERE id=:id', array('id'=> $_GET['id']));
      if(empty($mesproduits)){
        die("ce produit n'exicte pas" );
      }
      $panier->add($mesproduits[0]->id); 
      die('le livre a bien ete ajouter aux panier <a href="javascript:history.back()">retourner sur laccueil</a>');
}else{
    die("vous n'avez pas ajouter un prduit" );
}




?>
</body>
</html>