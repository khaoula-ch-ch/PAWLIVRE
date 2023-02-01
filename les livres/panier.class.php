<?php
class panier{
    private $DB;
     public function __construct($DB){
        if(!isset($_SESSION)){
           session_start();
        }
        if(!isset($_SESSION['panier'])){
            $_SESSION['panier']= array();
        }
        $this->DB = $DB;
        if(isset($_GET['delpanier'])){
            $this->del($_GET['delpanier']);
        }
        if(isset($_POST['panier']['quantity'])){
            $this->recalc();
        }
     }

     public function recalc(){
        foreach($_SESSION['panier'] as $mesproduits_id => $quantity){
            $_SESSION['panier'][$mesproduits_id]=$_POST['panier']['quantity'][$mesproduits_id];
        }
     }

     public function count(){
       return array_sum($_SESSION['panier']);
     }



     public function totale(){
        $total=0;
        $ids = array_keys($_SESSION['panier']);
        if(empty($ids)){
            $mesproduits=array();
        }else {
            $mesproduits = $this->DB->query('SELECT id , prix FROM livre WHERE id IN ('.implode(',',$ids).')');
        }
        foreach( $mesproduits as $livre ){
            $total +=$livre->prix * $_SESSION['panier'][$livre->id] ;
        }
        return $total;
     }



public function add($mesproduits_id){
    if(isset($_SESSION['panier'][$mesproduits_id])){
        $_SESSION['panier'][$mesproduits_id]++;
    }else{
    $_SESSION['panier'][$mesproduits_id]=1;
    }
}




public function del($mesproduits_id){
    
    unset($_SESSION['panier'][$mesproduits_id]);
}


}



?>