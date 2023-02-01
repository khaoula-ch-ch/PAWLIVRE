<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../essay/styl.css">
	<title> site culturel de vente de livres </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFDBenfantIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../khaoula/pagep.css">
	<title> site culturel de vente de livres </title>
 
</head>
  <body>
  <nav id="menu">
        <h2 class="logo">Culturel children</h1>
        <ul class="menu-all">
        <li class="menu-item"><a  href="panierenfant.php" > <image src="../panier1.png" style=width:20px;></a></li>
            <li class="menu-item"><a href="loginenfant.php">Admin</a></li>
            <li class="menu-item"><a href="../index.php">Contact</a></li>
            <li class="menu-item"><a href="../index.php">Home</a></li>
           
        </ul>
    </nav>


      

   

      </ul>
    
    </div>
  </div>
</nav>






<br><br><br><br>
 
<?php


require("panierenfant.class.php");
require ("DBenfant.class.php");
$DBenfant= new DBenfant();
$panierenfant= new panierenfant($DBenfant);

if(isset($_GET['id'])){
    $mesproduits = $DBenfant->query('SELECT id FROM enfant WHERE id=:id', array('id'=> $_GET['id']));
    if(empty($mesproduits)){
      die("ce produit n'exicte pas" );
    }
      $panierenfant->add($mesproduits[0]->id); 
      die('le livre a bien ete ajouter aux panierenfant <a href="javascript:history.back()" style="color : black">retourner sur laccueil</a>');
}else{
    die("vous n'avez pas ajouter un prduit" );
}




?>
</body>
</html>