<?php
class paniercuisine{
    private $DBcuisine;
     public function __construct($DBcuisine){
        if(!isset($_SESSION)){
           session_start();
        }
        if(!isset($_SESSION['paniercuisine'])){
            $_SESSION['paniercuisine']= array();
        }
        $this->DBcuisine = $DBcuisine;
        if(isset($_GET['delpaniercuisine'])){
            $this->del($_GET['delpaniercuisine']);
        }
        if(isset($_POST['paniercuisine']['quantity'])){
            $this->recalc();
        }
     }

     public function recalc(){
        foreach($_SESSION['paniercuisine'] as $mesproduits_id => $quantity){
            $_SESSION['paniercuisine'][$mesproduits_id]=$_POST['paniercuisine']['quantity'][$mesproduits_id];
        }
     }

     public function count(){
       return array_sum($_SESSION['paniercuisine']);
     }



     public function totale(){
        $total=0;
        $ids = array_keys($_SESSION['paniercuisine']);
        if(empty($ids)){
            $mesproduits=array();
        }else {
            $mesproduits = $this->DBcuisine->query('SELECT id , prix FROM cuisine WHERE id IN ('.implode(',',$ids).')');
        }
        foreach( $mesproduits as $cuisine ){
            $total +=$cuisine->prix * $_SESSION['paniercuisine'][$cuisine->id] ;
        }
        return $total;
     }



public function add($mesproduits_id){
    if(isset($_SESSION['paniercuisine'][$mesproduits_id])){
        $_SESSION['paniercuisine'][$mesproduits_id]++;
    }else{
    $_SESSION['paniercuisine'][$mesproduits_id]=1;
    }
}




public function del($mesproduits_id){
    
    unset($_SESSION['paniercuisine'][$mesproduits_id]);
}


}



?>