<?php
require("panier.class.php");
require ("DB.class.php");
$DB= new DB();
$panier= new panier($DB);
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <Body>
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
            <li><a class="dropdown-item" href="scolaire/scolaire.php">Scolaire</a></li>
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
      <button class="btn btn btn-secondary me-2 " type="button"  href="" >   
           <a class="nav-link " href="" role="button" > <?= $panier->count() ;?></a>
        </button>

      

   

      </ul>
    
    </div>
  </div>
</nav>

  
    <!--wibesite-->
        <div id="hero">
        </div>
        <form method="post" action="panier.php">
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
             $ids = array_keys($_SESSION['panier']);
            if(empty($ids)){
                $mesproduits=array();
            }else {
                $mesproduits = $DB->query('SELECT * FROM livre WHERE id IN ('.implode(',' , $ids).') ');
            }
    

        foreach($mesproduits as $livre ):?>
       <tr>
                <th scope="row"><?= $livre->id ?></th>
                <td><?= $livre->nom?></td>
                <td>
                <img src="<?= $livre->image?>" style="width: 15%">
                </td>
               
                <td style="font-weight: bold; color: green;"><?= $livre->prix ?>DA</td>
                
                <td> <input type="text" name="panier[quantity][<?= $livre->id ;?>]" value ="<?=$_SESSION['panier'][$livre->id];?>"></td>
                <td><a href="panier.php?delpanier=<?= $livre->id ?>"><img src="supprimer.png" style=width:30px; > </a></td>
                </tr>      
        <?php endforeach ?> 
        
        <tr class="total">
        <th> </th> <th> </th> <th> </th> <th> </th>
                <th>Totale :</th>
                <th> <?= number_format($panier->totale(),2,',','');?></th>
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