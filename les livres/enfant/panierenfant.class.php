<?php
class panierenfant{
    private $DBenfant;
     public function __construct($DBenfant){
        if(!isset($_SESSION)){
           session_start();
        }
        if(!isset($_SESSION['panierenfant'])){
            $_SESSION['panierenfant']= array();
        }
        $this->DBenfant = $DBenfant;
        if(isset($_GET['delpanierenfant'])){
            $this->del($_GET['delpanierenfant']);
        }
        if(isset($_POST['panierenfant']['quantity'])){
            $this->recalc();
        }
     }

     public function recalc(){
        foreach($_SESSION['panierenfant'] as $mesproduits_id => $quantity){
            $_SESSION['panierenfant'][$mesproduits_id]=$_POST['panierenfant']['quantity'][$mesproduits_id];
        }
     }

     public function count(){
       return array_sum($_SESSION['panierenfant']);
     }



     public function totale(){
        $total=0;
        $ids = array_keys($_SESSION['panierenfant']);
        if(empty($ids)){
            $mesproduits=array();
        }else {
            $mesproduits = $this->DBenfant->query('SELECT id , prix FROM enfant WHERE id IN ('.implode(',',$ids).')');
        }
        foreach( $mesproduits as $enfant ){
            $total +=$enfant->prix * $_SESSION['panierenfant'][$enfant->id] ;
        }
        return $total;
     }



public function add($mesproduits_id){
    if(isset($_SESSION['panierenfant'][$mesproduits_id])){
        $_SESSION['panierenfant'][$mesproduits_id]++;
    }else{
    $_SESSION['panierenfant'][$mesproduits_id]=1;
    }
}




public function del($mesproduits_id){
    
    unset($_SESSION['panierenfant'][$mesproduits_id]);
}


}



?>