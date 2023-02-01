<?php
require("panierroman.class.php");
require ("DBroman.class.php");
$DBroman= new DBroman();
$panierroman= new panierroman($DBroman);
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
        <h2 class="logo">Culturel novel</h1>
        <ul class="menu-all">
        <li class="menu-item">
           <a class="nav-link " href="" role="button" > <?= $panierroman->count() ;?></a>
        </li>
        <li class="menu-item"><a  href="panierroman.php" > <image src="../panier1.png" style=width:20px;></a></li>
            <li class="menu-item"><a href="loginroman.php">Admin</a></li>
            <li class="menu-item"><a href="../index.php">Contact</a></li>
            <li class="menu-item"><a href="roman.php">Home</a></li>
           
     


      

   

 
      
      

   

</nav>

        <form method="post" action="panierroman.php">
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
             $ids = array_keys($_SESSION['panierroman']);
            if(empty($ids)){
                $mesproduits=array();
            }else {
                $mesproduits = $DBroman->query('SELECT * FROM roman WHERE id IN ('.implode(',' , $ids).') ');
            }
    

        foreach($mesproduits as $roman ):?>
       <tr>
                <th scope="row"><?= $roman->id ?></th>
                <td><?= $roman->nom?></td>
                <td>
                <img src="<?= $roman->image?>" style="width: 15%">
                </td>
               
                <td style="font-weight: bold; color: green;"><?= $roman->prix ?>DA</td>
                
                <td> <input type="text" name="panierroman[quantity][<?= $roman->id ;?>]" value ="<?=$_SESSION['panierroman'][$roman->id];?>"></td>
                <td><a href="panierroman.php?delpanierroman=<?= $roman->id ?>"><img src="../supprimer.png" style=width:30px; > </a></td>
                </tr>      
        <?php endforeach ?> 
        
        <tr class="total">
        <th> </th> <th> </th> <th> </th> <th> </th>
                <th>Totale :</th>
                <th> <?= number_format($panierroman->totale(),2,',','');?></th>
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