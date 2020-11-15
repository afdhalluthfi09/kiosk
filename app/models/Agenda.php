<?php


class Agenda{
    private $tabel = 'agenda';
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll(){
        $this->db->query('SELECT * FROM ' . $this->tabel);
        return $this->db->result();
    }


    // public function getById($id){
    //     $this->db->query('SELECT * FROM '. $this->tabel . 'WHERE id=:id');
    //     $this->db->bind('id')
    // }
}