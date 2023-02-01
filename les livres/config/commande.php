<?php


 function getAdmins($email,$password){
  if(require("connexion.php"))
  {
    $req = $access->prepare("SELECT * FROM admin WHERE email=? AND mdp =?");

    $req->execute(array($email,$password));
    if($req->rowCount() == 1){
      $data=$req->fetch();
      return $data;
    }else{
      return false;
    }

    $req->closeCursor(); 
  }
 }


  function ajouter($nom, $prenom, $mail, $num , $recla)
  {
    if(require("connexion.php"))
    {
      $req = $access->prepare("INSERT INTO comm (nom, prenom, mail, num , recla) VALUES (?, ?, ?, ?,?)");

      $req->execute(array($nom, $prenom, $mail, $num , $recla));

      $req->closeCursor();
    }
  }
 
 function afficher(){
    if(require("connexion.php")){
        $req=$access->prepare("SELECT * FROM livre ORDER BY id DESC" );
        $req->execute();
        $data = $req->fetchall(PDO :: FETCH_OBJ);
        return $data;
        $req->closeCursor();
    }
 }
 function supprimer($id) {
  if(require("connexion.php")){
      $req=$access->prepare("DELETE FROM livre WHERE id=? ");
      $req->execute(array($id));
  }
}
function afficherUnProduit($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM livre WHERE id=?");

        $req->execute(array($id));

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}
function modifier( $nom, $prix,  $image, $description, $id)
{
  if(require("connexion.php"))
  {
    $req = $access->prepare("UPDATE livre SET  nom = ?, prix = ?, `image` = ?,  description = ? WHERE id=?");

    $req->execute(array( $nom, $prix, $image, $description , $id));

    $req->closeCursor();
  }
}





 function ajouterenfant($nom, $prix, $image, $description)
 {
   if(require("connexion.php"))
   {
     $req = $access->prepare("INSERT INTO enfant (nom, prix, image, description) VALUES (?, ?, ?, ?)");

     $req->execute(array($nom, $prix, $image, $description));

     $req->closeCursor();
   }
 }
 
 function afficherenfant(){
  if(require("connexion.php")){
      $req=$access->prepare("SELECT * FROM enfant ORDER BY id DESC");
      $req->execute();
      $data = $req->fetchall(PDO :: FETCH_OBJ);
      return $data;
      $req->closeCursor();
  }
}
function supprimerenfant($id) {
  if(require("connexion.php")){
      $req=$access->prepare("DELETE FROM enfant WHERE id=? ");
      $req->execute(array($id));
  }
}
function afficherUnProduitenfant($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM enfant WHERE id=?");

        $req->execute(array($id));

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}
function modifierenfant( $nom, $prix,  $image, $description, $id)
{
  if(require("connexion.php"))
  {
    $req = $access->prepare("UPDATE enfant SET  nom = ?, prix = ?, `image` = ?,  description = ? WHERE id=?");

    $req->execute(array( $nom, $prix, $image, $description , $id));

    $req->closeCursor();
  }
}




function ajoutercuisine($nom, $prix, $image, $description)
 {
   if(require("connexion.php"))
   {
     $req = $access->prepare("INSERT INTO cuisine (nom, prix, image, description) VALUES (?, ?, ?, ?)");

     $req->execute(array($nom, $prix, $image, $description));

     $req->closeCursor();
   }
 }
 
 function affichercuisine(){
  if(require("connexion.php")){
      $req=$access->prepare("SELECT * FROM cuisine ORDER BY id DESC");
      $req->execute();
      $data = $req->fetchall(PDO :: FETCH_OBJ);
      return $data;
      $req->closeCursor();
  }
}
function supprimercuisine($id) {
  if(require("connexion.php")){
      $req=$access->prepare("DELETE FROM cuisine WHERE id=? ");
      $req->execute(array($id));
  }
}
function afficherUnProduitcuisine($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM cuisine WHERE id=?");

        $req->execute(array($id));

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}
function modifiercuisine( $nom, $prix,  $image, $description, $id)
{
  if(require("connexion.php"))
  {
    $req = $access->prepare("UPDATE cuisine SET  nom = ?, prix = ?, `image` = ?,  description = ? WHERE id=?");

    $req->execute(array( $nom, $prix, $image, $description , $id));

    $req->closeCursor();
  }
}













function ajouterroman($nom, $prix, $image, $description)
 {
   if(require("connexion.php"))
   {
     $req = $access->prepare("INSERT INTO roman (nom, prix, image, description) VALUES (?, ?, ?, ?)");

     $req->execute(array($nom, $prix, $image, $description));

     $req->closeCursor();
   }
 }
 
 function afficherroman(){
  if(require("connexion.php")){
      $req=$access->prepare("SELECT * FROM roman ORDER BY id DESC");
      $req->execute();
      $data = $req->fetchall(PDO :: FETCH_OBJ);
      return $data;
      $req->closeCursor();
  }
}
function supprimerroman($id) {
  if(require("connexion.php")){
      $req=$access->prepare("DELETE FROM roman WHERE id=? ");
      $req->execute(array($id));
  }
}
function afficherUnProduitroman($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM roman WHERE id=?");

        $req->execute(array($id));

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}
function modifierroman( $nom, $prix,  $image, $description, $id)
{
  if(require("connexion.php"))
  {
    $req = $access->prepare("UPDATE roman SET  nom = ?, prix = ?, `image` = ?,  description = ? WHERE id=?");

    $req->execute(array( $nom, $prix, $image, $description , $id));

    $req->closeCursor();
  }
}









function ajouterscolaire($nom, $prix, $image, $description)
 {
   if(require("connexion.php"))
   {
     $req = $access->prepare("INSERT INTO scolaire (nom, prix, image, description) VALUES (?, ?, ?, ?)");

     $req->execute(array($nom, $prix, $image, $description));

     $req->closeCursor();
   }
 }
 
 function afficherscolaire(){
  if(require("connexion.php")){
      $req=$access->prepare("SELECT * FROM scolaire ORDER BY id DESC");
      $req->execute();
      $data = $req->fetchall(PDO :: FETCH_OBJ);
      return $data;
      $req->closeCursor();
  }
}
function supprimerscolaire($id) {
  if(require("connexion.php")){
      $req=$access->prepare("DELETE FROM scolaire WHERE id=? ");
      $req->execute(array($id));
  }
}
function afficherUnProduitscolaire($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM scolaire WHERE id=?");

        $req->execute(array($id));

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}
function modifierscolaire( $nom, $prix,  $image, $description, $id)
{
  if(require("connexion.php"))
  {
    $req = $access->prepare("UPDATE scolaire SET  nom = ?, prix = ?, `image` = ?,  description = ? WHERE id=?");

    $req->execute(array( $nom, $prix, $image, $description , $id));

    $req->closeCursor();
  }
}















function ajouteruniver($nom, $prix, $image, $description)
 {
   if(require("connexion.php"))
   {
     $req = $access->prepare("INSERT INTO univer (nom, prix, image, description) VALUES (?, ?, ?, ?)");

     $req->execute(array($nom, $prix, $image, $description));

     $req->closeCursor();
   }
 }
 
 function afficheruniver(){
  if(require("connexion.php")){
      $req=$access->prepare("SELECT * FROM univer ORDER BY id DESC");
      $req->execute();
      $data = $req->fetchall(PDO :: FETCH_OBJ);
      return $data;
      $req->closeCursor();
  }
}
function supprimeruniver($id) {
  if(require("connexion.php")){
      $req=$access->prepare("DELETE FROM univer WHERE id=? ");
      $req->execute(array($id));
  }
}
function afficherUnProduituniver($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM univer WHERE id=?");

        $req->execute(array($id));

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}
function modifieruniver( $nom, $prix,  $image, $description, $id)
{
  if(require("connexion.php"))
  {
    $req = $access->prepare("UPDATE univer SET  nom = ?, prix = ?, `image` = ?,  description = ? WHERE id=?");

    $req->execute(array( $nom, $prix, $image, $description , $id));

    $req->closeCursor();
  }
}


function ajoutercomm($nom, $prenom, $mail, $num , $recla)
 {
   if(require("connexion.php"))
   {
     $req = $access->prepare("INSERT INTO comm (nom, prenom, mail, num , recla) VALUES (?, ?, ?, ? ,?)");

     $req->execute(array($nom, $prenom, $mail, $num , $recla));

     $req->closeCursor();
   }
 }
 
 function affichercomm(){
  if(require("connexion.php")){
      $req=$access->prepare("SELECT * FROM comm ORDER BY id DESC");
      $req->execute();
      $data = $req->fetchall(PDO :: FETCH_OBJ);
      return $data;
      $req->closeCursor();
  }
}













 


?>