<?php  

    class Konsulumum {
        private $db;

        public function __construct()
    {
        $this->db = new Database;

    }


        
        public function tambah($data){
            $query ="INSERT INTO konsulU VALUES(null, :nik, :nama, :usaha, :no_wa, :j_konsultasi, :tgl_konsul, :jam_konsul, :uraian_m, current_time)";
            $this->db->query($query);
            $this->db->bind('nik',$data['nik']);
            $this->db->bind('nama',$data['nama']);
            $this->db->bind('usaha',$data['usaha']);
            $this->db->bind('no_wa',$data['no_wa']);
            $this->db->bind('j_konsultasi',$data['j_konsultasi']);
            $this->db->bind('tgl_konsul',$data['tgl_konsul']);
            $this->db->bind('jam_konsul',$data['jam_konsul']);
            $this->db->bind('uraian_m',$data['uraian_m']);

            $this->db->execute();

            return $this->db->rowCount();
        }




    }











?>