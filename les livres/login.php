<?php
include "config/commande.php";
 session_start();
 if(!isset($_SESSION['azerty']))
{
    if(!empty($_SESSION['azerty']))
{
    header("Location: admin.php/");
}
}




?>
<!doctype html>
<html lang="fran">
    <head>
    <meta charset="utf-8">
    <title> Connexion les livres </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    </head>
    <body>
        <br><br>
        <div class="container-fuild">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                 <form method="post">
                     <div class="mb-3">
                     <label for="email" class="form-label">Email</label>
                     <input type="email" class="form-control" name ="email" >
                     
                     </div>
                     <div class="mb-3">
                     <label for="mot de passe" class="form-label">Mot de passe</label>
                     <input type="password" class="form-control" name="motdepasse" >
                     </div>
                     <input type="submit" class="btn btn-danger" name= "envoyer" value="Valider">
                 </form>
                </div>
                <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
 if(isset($_POST['envoyer'])){
    if(!empty($_POST['email']) AND !empty($_POST['motdepasse']) ){
        $email= htmlspecialchars( $_POST['email']); 
        $motdepasse=htmlspecialchars( $_POST['motdepasse']);
        $admin= getAdmins($email,$motdepasse);
         if($admin){
          $_SESSION['azerty'] =$admin;
          header("Location: admin/");



         }else{
           echo"problem de connexion";
         }
    }
 }
?>