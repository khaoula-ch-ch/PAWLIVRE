<?php
session_start();
require("../config/commande.php");

require("../panier.class.php");
require ("../DB.class.php");
$DB= new DB();
$panier= new panier($DB);

$mesproduits=afficher();


?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="pagep.css">
	<title> site culturel de vente de livres </title>
</head>
<body>
    <!--wibesite-->
<div id="container">
    <nav id="menu">
        <h2 class="logo">Culturel</h1>
        <ul class="menu-all">
            <li class="menu-item"><a href="#cont">Contact</a></li>
            <li class="menu-item"><a href="#best">Best Seller </a></li>
            <li class="menu-item"><a href="#typs">Types  </a></li>
            <li class="menu-item"><a href="#H">Home</a></li>
        </ul>
    </nav>
    <a name="H"></a>
<div id="hero">
   </div>
   <a name="ab"></a>
   <br><br>
<section id="about">
<h1>what do you want to read ? </h1>
<div>
    <p class="about-p">Culturel page is for sell  books , you will find different types 
         of books , all you have to do is decide what you want to 
         read . and if you do not  know what you want , click on 
          the button to find the right educational book for you !  
    </p>

</div>
</section>
<a name="typs"></a>
<section id="tutorials">
    <h1>types of Books  </h1>
    <div class="row" >
        <div class="col-1 ">
      <div class="col-5 "><a >
        <header class="tut-title">Schools</header>
        <img src="Schools.jpg" >
        <footer class="tut-footer">
            <p>
              All Levels   Primary , Intermediate , Secondary .
            </p>
        </footer>
    </a> </div></div>
      <div class="col-5"><a>
        <header class="tut-title"> Novels</header>
        <img src="novels.jpg" alt="">
        <footer class="tut-footer">
            <p>
                The best novels to read and enjoy (Arabic , French , English ).
            </p>
        </footer></a>
    </div>
        
      <div class="col-5"><a>
         <header class="tut-title">Children's</header>
        <img src="Children's.jpg">
        <footer class="tut-footer">
            <p>
               Stories and educational books for Kids 
            </p>
        </footer></a>
    </div>
      <div class="col-5"> <a>
        <header class="tut-title">Kitchen </header>
        <img src="kitchen.jpg">
        <footer class="tut-footer">
            <p>Learn and master the arts of cooking with our books  </p>
        </footer></a>
    </div>
      <div class="col-5"><a>
         <header class="tut-title">University </header>
        <img src="university.jpg">
        <footer class="tut-footer">
            <p>Books for deffirent specialty on college </p>
        </footer></a>
    </div>
    </div>

</section>
<a name="best"></a><br><br><br><br>
<section id="best-seller">
<h1>Best Seller !</h1>
<div class="row">
<div class="col-5">
<header class="tut-title">ZAD book </header>
   <img src="téléchargement (1).jpg">
   <footer class="tut-footer">
       <p> Mathematics books for the 
        fifth year of primary school  </p>
   </footer>
   <button class="ta">See !</button>
</div>
<div class="col-5">
    <header class="tut-title"> Almutamayiz book </header>
       <img src="0001.jpg">
       <footer class="tut-footer">
           <p> book of the first year of primary school all subjects  </p>
       </footer>
       <button class="ta">See !</button>
    </div>
 </div>
  
</section>
<a name="cont"></a><br><br>
<section id="contect">
    <h1>Contact </h1>
    <div class="col-2">
    <form action="#" method="post">

    <input id="LastName" class="input" name="LastName" type="text" value="Last Name " size="30"> <br><br>
        <input id=" FirstName" class="input" name=" FirstName" type="text" value=" First Name" size="30"><br><br>
        <input id="Email " class="input" name="Email " type="text" value=" E-mail " size="30"><br><br>
        <input id="PhoneNumber " class="input" name="PhoneNumber " type="text" value="Phone Number  " size="30"><br><br>
        <textarea id="réclamations " class="input" name="réclamations " >Reclamations</textarea><br><br>
        <input id="submit " class="cta"  type="submit" value="Send " >
    </form>
    </div>
</section>
<footer id="wsfooter">
    <p>All rights reserved to the site owner !</p>
    <p>Tel : 123456 | Fax : 123456 |<a href="mailto:culturellibrary@gmail.com "> E-mail : culturellibrary@gmail.com </a> </p>
    <img src="../essay/footerphotos.gif" >
</footer>

</div>
    <!--Script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>