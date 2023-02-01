<?php
require("../config/commande.php");
$mesproduits=afficheruniver();

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
        <h2 class="logo">Culturel university</h1>
        <ul class="menu-all">
        <li class="menu-item"><a  href="panieruniver.php" > <image src="../panier1.png" style=width:20px;></a></li>
            <li class="menu-item"><a href="loginuniver.php">Admin</a></li>
            <li class="menu-item"><a href="../index.php">Contact</a></li>
            <li class="menu-item"><a href="../index.php">Home</a></li>
           
        </ul>
    </nav>


      

   

      </ul>
    
    </div>
  </div>
</nav>





/LA BOUCLE PHP POUR AFFICHER LES LIVRES 
<main>
  <a name="best"></a><br><br><br><br>
  <section id="best-seller">
  <div class="row">
   <?php foreach($mesproduits as $univer): ?>
    <div class="col-5">
       <img src="<?= $univer->image ?>"> 
       <div class="tut-title"><?= $univer->nom ?> </div>
       <div> <p> <?= $univer->description ?> </p></div>
       <small class="text" style="font-weight: bold;"><?= $univer->prix ?> DA</small><br>
       <button class="ta" type="button"   href="" >   
         <a class="add" href="addpanieruniver.php?id=<?= $univer->id ?>" >Acheter</a> 
       </button>
    </div>
   <?php endforeach; ?> 
 </div>
 </section>
   </main>

    
   
      </body>
</html>