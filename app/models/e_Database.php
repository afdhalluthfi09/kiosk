<?php 



class Database {

    private $db;
    private $stmn;

    public function __construct()    
    {
        $dsn="mysql::host=localhost;dbname=kioska";
        try{
            $this->db=new PDO($dsn,'root','');
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getDataAgenda(){
        $this->stmn =$this->db->prepare("SELECT * FROM agenda");
        $this->stmn->execute();
        return $this->stmn->fetchAll(PDO::FETCH_ASSOC); 
    }

}