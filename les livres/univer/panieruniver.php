<?php
require("panieruniver.class.php");
require ("DBuniver.class.php");
$DBuniver= new DBuniver();
$panieruniver= new panieruniver($DBuniver);
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
        <h2 class="logo">Culturel university</h1>
        <ul class="menu-all">
        <li class="menu-item">
           <a class="nav-link " href="" role="button" > <?= $panieruniver->count() ;?></a>
        </li>
        <li class="menu-item"><a  href="panieruniver.php" > <image src="../panier1.png" style=width:20px;></a></li>
            <li class="menu-item"><a href="loginuniver.php">Admin</a></li>
            <li class="menu-item"><a href="../index.php">Contact</a></li>
            <li class="menu-item"><a href="univer.php">Home</a></li>
           
     


      

   

 
      
      

   

</nav>

        <form method="post" action="panieruniver.php">
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
             $ids = array_keys($_SESSION['panieruniver']);
            if(empty($ids)){
                $mesproduits=array();
            }else {
                $mesproduits = $DBuniver->query('SELECT * FROM univer WHERE id IN ('.implode(',' , $ids).') ');
            }
    

        foreach($mesproduits as $univer ):?>
       <tr>
                <th scope="row"><?= $univer->id ?></th>
                <td><?= $univer->nom?></td>
                <td>
                <img src="<?= $univer->image?>" style="width: 15%">
                </td>
               
                <td style="font-weight: bold; color: green;"><?= $univer->prix ?>DA</td>
                
                <td> <input type="text" name="panieruniver[quantity][<?= $univer->id ;?>]" value ="<?=$_SESSION['panieruniver'][$univer->id];?>"></td>
                <td><a href="panieruniver.php?delpanieruniver=<?= $univer->id ?>"><img src="../supprimer.png" style=width:30px; > </a></td>
                </tr>      
        <?php endforeach ?> 
        
        <tr class="total">
        <th> </th> <th> </th> <th> </th> <th> </th>
                <th>Totale :</th>
                <th> <?= number_format($panieruniver->totale(),2,',','');?></th>
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