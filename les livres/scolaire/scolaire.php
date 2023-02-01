<?php
require("../config/commande.php");
$mesproduits=afficherscolaire();

?> 




<!doctype html>
<html lang="en">
  <head>
     <meta charset="utf-8">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="stylesheet" type="text/css" href="../khaoula/pagep.css">
	   <title> site culturel de vente de livres </title>
  </head>
 
<body>
  <nav id="menu">
        <h2 class="logo">Culturel Schools</h1>
        <ul class="menu-all">
            <li class="menu-item"><a  href="panierscolaire.php" > <image src="../panier1.png" style=width:20px;></a></li>
            <li class="menu-item"><a href="loginscolaire.php">Admin</a></li>
            <li class="menu-item"><a href="../index.php">Contact</a></li>
            <li class="menu-item"><a href="../index.php">Home</a></li>
        </ul>
  </nav>
  /LA BOUCLE PHP POUR AFFICHER LES LIVRES 
<main>
  <a name="best"></a><br><br><br><br>
  <section id="best-seller">
  <div class="row">
   <?php foreach($mesproduits as $scolaire): ?>
    <div class="col-5">
       <img src="<?= $scolaire->image ?>"> 
       <div class="tut-title"><?= $scolaire->nom ?> </div>
       <div> <p> <?= $scolaire->description ?> </p></div>
       <small class="text" style="font-weight: bold;"><?= $scolaire->prix ?> DA</small><br>
       <button class="ta" type="button"   href="" >   
         <a class="add" href="addpanierscolaire.php?id=<?= $scolaire->id ?>" >Acheter</a> 
       </button>
    </div>
   <?php endforeach; ?> 
 </div>
 </section>
   </main>

  </body>
</html>