<?php
class panierscolaire{
    private $DBscolaire;
     public function __construct($DBscolaire){
        if(!isset($_SESSION)){
           session_start();
        }
        if(!isset($_SESSION['panierscolaire'])){
            $_SESSION['panierscolaire']= array();
        }
        $this->DBscolaire = $DBscolaire;
        if(isset($_GET['delpanierscolaire'])){
            $this->del($_GET['delpanierscolaire']);
        }
        if(isset($_POST['panierscolaire']['quantity'])){
            $this->recalc();
        }
     }

     public function recalc(){
        foreach($_SESSION['panierscolaire'] as $mesproduits_id => $quantity){
            $_SESSION['panierscolaire'][$mesproduits_id]=$_POST['panierscolaire']['quantity'][$mesproduits_id];
        }
     }

     public function count(){
       return array_sum($_SESSION['panierscolaire']);
     }



     public function totale(){
        $total=0;
        $ids = array_keys($_SESSION['panierscolaire']);
        if(empty($ids)){
            $mesproduits=array();
        }else {
            $mesproduits = $this->DBscolaire->query('SELECT id , prix FROM scolaire WHERE id IN ('.implode(',',$ids).')');
        }
        foreach( $mesproduits as $scolaire ){
            $total +=$scolaire->prix * $_SESSION['panierscolaire'][$scolaire->id] ;
        }
        return $total;
     }



public function add($mesproduits_id){
    if(isset($_SESSION['panierscolaire'][$mesproduits_id])){
        $_SESSION['panierscolaire'][$mesproduits_id]++;
    }else{
    $_SESSION['panierscolaire'][$mesproduits_id]=1;
    }
}




public function del($mesproduits_id){
    
    unset($_SESSION['panierscolaire'][$mesproduits_id]);
}


}



?>