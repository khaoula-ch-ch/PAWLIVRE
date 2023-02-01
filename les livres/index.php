<?php
session_start();
require("config/commande.php");

require("panier.class.php");
require ("DB.class.php");
$DB= new DB();
$panier= new panier($DB);







?> 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="khaoula/pagep.css">
	<title> site culturel de vente de livres </title>
</head>
<body>
    <!--wibesite-->
<div id="container">
    <nav id="menu">
        <h2 class="logo">Culturel</h1>
        <ul class="menu-all">
            <li class="menu-item"><a href="login.php">Admin</a></li>
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
      <a href="scolaire/scolaire.php">
        <header class="tut-title">Schools</header>
        <img src="Schools.jpg" >
        <footer class="tut-footer">
            <p>
              All Levels   Primary , Intermediate , Secondary .
            </p>
        </footer>
    </a> </div></div>
      <div class="col-5"><a>
      <a href="roman/roman.php">
        <header class="tut-title"> Novels</header>
        <img src="novels.jpg" alt="">
        <footer class="tut-footer">
            <p>
                The best novels to read and enjoy  (Arabic,French..).
            </p>
        </footer></a>
    </div>
        
      <div class="col-5"><a>
      <a href="enfant/enfant.php">
         <header class="tut-title">Children's</header>
        <img src="Children's.jpg">
        <footer class="tut-footer">
            <p>
               Stories and educational books for Kids 
            </p>
        </footer></a>
    </div>
      <div class="col-5"> <a>
      <a href="cuisine/cuisine.php">
        <header class="tut-title">Kitchen </header>
        <img src="kitchen.jpg">
        <footer class="tut-footer">
            <p>Learn and master the arts of cooking with our books  </p>
        </footer></a>
    </div>
      <div class="col-5"><a>
      <a href="univer/univer.php">
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
<header class="tut-title">المراجعة النهائية للبكالوريا في اللغة الإنجليزية  </header>
   <img src="1.jpg">
   <footer class="tut-footer">
       <p>300DA </p>
   </footer>
   <button class="ta" href="scolaire/scolaire.php">See !</button>
</div>
<div class="col-5">
    <header class="tut-title"> Lessons in Chemistry</header>
       <img src="2.png">
       <footer class="tut-footer">
           <p> 1500DA </p>
       </footer>
       <button class="ta" href="roman/roman.php">See !</button>
    </div>
    <div class="col-5">
    <header class="tut-title">Blanche-Neige et les Sept Nains </header>
       <img src="2.jpg">
       <footer class="tut-footer">
           <p>500DA  </p>
       </footer>
       <button class="ta" href="enfant/enfant.php">See !</button>
    </div>
    <div class="col-5">
    <header class="tut-title"> Oum walid - Recette </header>
       <img src="4.jpg">
       <footer class="tut-footer">
           <p> 380DA </p>
       </footer>
       <button class="ta" href="cuisine/cuisine.php" >See !</button>
    </div>

  
</section>
<a name="cont"></a><br><br>
<section id="contect">
    <h1>Contact </h1>
    <div class="col-2">
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <form method="post">
            <div class="mb-3">
                   <label for="exampleInputPassword1" class="form-label">LastName</label>
                   <input type="text" class="form-control" name="nom" required>
                 </div>
                 <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">FirstName</label>
                    <input type="text" class="form-control" name="prenom" required>
                 </div>
                 <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"> L'Email</label>
                    <input type="text" class="form-control" name="mail" required>
                 </div>
                 <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">PhoneNumber</label>
                    <textarea class="form-control" name="num" required></textarea>
                 </div>
                 <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">réclamations</label>
                    <textarea class="form-control" name="recla" required></textarea>
                 </div>
               <button type="submit" class="cta" name ="valider">Valider</button>
            </form>
            </div>
       </div>
    </div>
<footer id="wsfooter">
    <p>All rights reserved to the site owner !</p>
    <p>Tel : 123456 | Fax : 123456 |<a href="mailto:culturellibrary@gmail.com "> E-mail : culturellibrary@gmail.com </a> </p>
    <img src="essay/footerphotos.gif" >
</footer>

</div>
</body>

</html>
<?php
   if(isset($_POST['valider'])){
    if( isset($_POST['nom']) AND isset($_POST['prenom']) AND  isset($_POST['mail']) AND isset($_POST['num']) AND isset($_POST['recla']) ){
        if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['mail']) AND  !empty($_POST['num']) AND  !empty($_POST['recla'])){
        $nom=htmlspecialchars(strip_tags($_POST['nom']));
        $prenom=htmlspecialchars(strip_tags($_POST['prenom']));
        $mail=htmlspecialchars(strip_tags($_POST['mail']));
        $num=htmlspecialchars(strip_tags($_POST['num']));
        $recla=htmlspecialchars(strip_tags($_POST['recla']));
        try{
         ajouter($nom,$prenom,$mail,$num,$recla);
        }
        catch(Exception $e){
            $e->getMessage();
        }
        
        } 
    }
   }
?>