<?php


class SartikModel{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambah($data){

        $query = "INSERT INTO sartik VALUES(null, :nik_ktp, :nama, :alamat, :tempat_lahir, :tgl_lahir, :saran, :kritik)";

        $this->db->query($query);
        $this->db->bind('nik_ktp',$data['nik_ktp']);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('alamat',$data['alamat']);
        $this->db->bind('tempat_lahir',$data['tempat_lahir']);
        $this->db->bind('tgl_lahir',$data['tgl_lahir']);
        $this->db->bind('saran',$data['saran']);
        $this->db->bind('kritik',$data['kritik']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function tampilSartik () 
    {
        $query ="SELECT * FROM sartik ORDER BY id DESC";

        $this->db->query($query);
        return $this->db->result();
    }
}