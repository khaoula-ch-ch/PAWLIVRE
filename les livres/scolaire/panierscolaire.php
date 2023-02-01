<?php
require("panierscolaire.class.php");
require ("DBscolaire.class.php");
$DBscolaire= new DBscolaire();
$panierscolaire= new panierscolaire($DBscolaire);
?>
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../khaoula/pagep.css">
	<title> site culturel de vente de livres </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
  <body>

  <nav id="menu">
        <h2 class="logo">Culturel School</h1>
        <ul class="menu-all">
        <li class="menu-item">
           <a class="nav-link " href="" role="button" > <?= $panierscolaire->count() ;?></a>
        </li>
        <li class="menu-item"><a  href="panierscolaire.php" > <image src="../panier1.png" style=width:20px;></a></li>
            <li class="menu-item"><a href="loginscolaire.php">Admin</a></li>
            <li class="menu-item"><a href="../index.php">Contact</a></li>
            <li class="menu-item"><a href="scolaire.php">Home</a></li>
           
     


      

   

 
      
      

   

</nav>

        <form method="post" action="panierscolaire.php">
        <div class="album py-5 bg-light">
        <div class="container">
             <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
             <table class="table">
            <thead class="table-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">image</th>
                <th scope="col">prix</th>
                <th scope="col">Quantiter</th>
                <th scope="col">supprimer</th>
                </tr>
               
            </thead>
            <tbody>
            
            <?php 
             $ids = array_keys($_SESSION['panierscolaire']);
            if(empty($ids)){
                $mesproduits=array();
            }else {
                $mesproduits = $DBscolaire->query('SELECT * FROM scolaire WHERE id IN ('.implode(',' , $ids).') ');
            }
    

        foreach($mesproduits as $scolaire ):?>
       <tr>
                <th scope="row"><?= $scolaire->id ?></th>
                <td><?= $scolaire->nom?></td>
                <td>
                <img src="<?= $scolaire->image?>" style="width: 15%">
                </td>
               
                <td style="font-weight: bold; color: green;"><?= $scolaire->prix ?>DA</td>
                
                <td> <input type="text" name="panierscolaire[quantity][<?= $scolaire->id ;?>]" value ="<?=$_SESSION['panierscolaire'][$scolaire->id];?>"></td>
                <td><a href="panierscolaire.php?delpanierscolaire=<?= $scolaire->id ?>"><img src="../supprimer.png" style=width:30px; > </a></td>
                </tr>      
        <?php endforeach ?> 
        
        <tr class="total">
        <th> </th> <th> </th> <th> </th> <th> </th>
                <th>Totale :</th>
                <th> <?= number_format($panierscolaire->totale(),2,',','');?></th>
            </tr>
          
            </tbody>
            </table>
            <input type="submit" value="=">
              
             </div>
       </div>
    </div>
        </form>
    </body>

</html>