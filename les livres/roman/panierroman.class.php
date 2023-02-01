<?php
class panierroman{
    private $DBroman;
     public function __construct($DBroman){
        if(!isset($_SESSION)){
           session_start();
        }
        if(!isset($_SESSION['panierroman'])){
            $_SESSION['panierroman']= array();
        }
        $this->DBroman = $DBroman;
        if(isset($_GET['delpanierroman'])){
            $this->del($_GET['delpanierroman']);
        }
        if(isset($_POST['panierroman']['quantity'])){
            $this->recalc();
        }
     }

     public function recalc(){
        foreach($_SESSION['panierroman'] as $mesproduits_id => $quantity){
            $_SESSION['panierroman'][$mesproduits_id]=$_POST['panierroman']['quantity'][$mesproduits_id];
        }
     }

     public function count(){
       return array_sum($_SESSION['panierroman']);
     }



     public function totale(){
        $total=0;
        $ids = array_keys($_SESSION['panierroman']);
        if(empty($ids)){
            $mesproduits=array();
        }else {
            $mesproduits = $this->DBroman->query('SELECT id , prix FROM roman WHERE id IN ('.implode(',',$ids).')');
        }
        foreach( $mesproduits as $roman ){
            $total +=$roman->prix * $_SESSION['panierroman'][$roman->id] ;
        }
        return $total;
     }



public function add($mesproduits_id){
    if(isset($_SESSION['panierroman'][$mesproduits_id])){
        $_SESSION['panierroman'][$mesproduits_id]++;
    }else{
    $_SESSION['panierroman'][$mesproduits_id]=1;
    }
}




public function del($mesproduits_id){
    
    unset($_SESSION['panierroman'][$mesproduits_id]);
}


}



?>