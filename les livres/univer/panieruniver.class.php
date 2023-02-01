<?php
class panieruniver{
    private $DBuniver;
     public function __construct($DBuniver){
        if(!isset($_SESSION)){
           session_start();
        }
        if(!isset($_SESSION['panieruniver'])){
            $_SESSION['panieruniver']= array();
        }
        $this->DBuniver = $DBuniver;
        if(isset($_GET['delpanieruniver'])){
            $this->del($_GET['delpanieruniver']);
        }
        if(isset($_POST['panieruniver']['quantity'])){
            $this->recalc();
        }
     }

     public function recalc(){
        foreach($_SESSION['panieruniver'] as $mesproduits_id => $quantity){
            $_SESSION['panieruniver'][$mesproduits_id]=$_POST['panieruniver']['quantity'][$mesproduits_id];
        }
     }

     public function count(){
       return array_sum($_SESSION['panieruniver']);
     }



     public function totale(){
        $total=0;
        $ids = array_keys($_SESSION['panieruniver']);
        if(empty($ids)){
            $mesproduits=array();
        }else {
            $mesproduits = $this->DBuniver->query('SELECT id , prix FROM univer WHERE id IN ('.implode(',',$ids).')');
        }
        foreach( $mesproduits as $univer ){
            $total +=$univer->prix * $_SESSION['panieruniver'][$univer->id] ;
        }
        return $total;
     }



public function add($mesproduits_id){
    if(isset($_SESSION['panieruniver'][$mesproduits_id])){
        $_SESSION['panieruniver'][$mesproduits_id]++;
    }else{
    $_SESSION['panieruniver'][$mesproduits_id]=1;
    }
}




public function del($mesproduits_id){
    
    unset($_SESSION['panieruniver'][$mesproduits_id]);
}


}



?>