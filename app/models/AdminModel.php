<?php


class AdminModel {
    private $name = 'nama';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }




    public function login($data){
        
        $query ="SELECT * FROM admin WHERE nama =:nama AND pass =:pass";
        $this->db->query($query);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('pass',password_verify($data['pass'],$query['pass']) );
        return $this->db->single();

    }
    public function login_v ($data)
     {
        
     }


    public function addAdmin($data){

        $nama = strtolower(stripslashes($data['nama']));
        $pass =mysqli_escape_string($this->db,$data['pass']);
        global $pass;
        $pass = password_hash($pass,PASSWORD_DEFAULT);

        $query = 'INSERT INTO admin VALUES(null, :nik, :nama ,:pass)';

        $this->db->query($query);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('nama', $nama);
        $this->db->bind('pass', $pass);
        $this->db->execute();

        return $this->db->rowCount();

    }

}