<?php


class IkmModel{

    private $tabel ='ikm';
    private $db;


    public function __construct()
    {
        $this->db = new Database;

    }

    public function tambah($data)
    {
        $query ="INSERT INTO ikm VALUES(null, :jns_kelamin, :pendidikan, :pekerjaan, :voting)";
        $this->db->query($query);
        $this->db->bind('jns_kelamin',$data['jns_kelamin']);
        $this->db->bind('pendidikan',$data['pendidikan']);
        $this->db->bind('pekerjaan',$data['pekerjaan']);
        $this->db->bind('voting',$data['voting']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tampilIkm () {
        $query = "SELECT * FROM ikm ORDER BY id DESC";
        $this->db->query($query);
        

        return $this->db->result();
    }

}