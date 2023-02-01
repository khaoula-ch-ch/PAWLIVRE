<?php
class DBroman{
    private $host='localhost';
    private $username='root';
    private $password='';
    private $databasse = 'les livres';
    private $dbroman;
    public function __construct($host = null , $username = null , $password =null , $databasse = null){
        if($host !=null){
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->databasse= $databasse;
         }
    try{
        $this->dbroman =new PDO('mysql:host='.$this->host.';dbname='.$this->databasse, $this->username, $this->password , array(
           PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
           PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ));
       
     }catch(PDOException $e){
         die('<h1> impossiblede connecter</h1>');
     }
    }
       public function query($sql , $data = array()){
         $req = $this->dbroman->prepare($sql);
         $req->execute($data);
         return $req->fetchAll(PDO :: FETCH_OBJ);
     }
     
}
?>