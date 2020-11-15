<?php


class AgendaModel{
    private $tabel = 'agenda';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAll(){
        $query ="SELECT * FROM  agenda ORDER BY id DESC";

        $this->db->query($query);

        return $this->db->result();
    }


    public function tambah($data){
        $query = "INSERT INTO agenda VALUES(null, :tgl_agenda, :jam, :kegiatan, :tempat, :statuss)";

        $this->db->query($query);
        $this->db->bind('tgl_agenda',$data['tgl_agenda']);
        $this->db->bind('jam',$data['jam']);
        $this->db->bind('kegiatan',$data['kegiatan']);
        $this->db->bind('tempat',$data['tempat']);
        $this->db->bind('statuss',$data['statuss']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubah($data){
        $query = "UPDATE agenda SET
                tgl_agenda = :tgl_agenda,
                jam = :jam,
                kegiatan = :kegiatan,
                tempat = :tempat,
                statuss = :statuss 
                WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('tgl_agenda',$data['tgl_agenda']);
        $this->db->bind('jam',$data['jam']);
        $this->db->bind('kegiatan',$data['kegiatan']);
        $this->db->bind('tempat',$data['tempat']);
        $this->db->bind('statuss',$data['statuss']);
        $this->db->bind('id',$data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    } 
    
    public function tampilId($id){
        $query = "SELECT * FROM agenda WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function deletId($id){
        $query ="DELETE FROM agenda WHERE id = :id ";
        $this->db->query($query);
        $this->db->bind('id',$id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateById(){

        $query ="SELECT * FROM agenda ORDER BY id DESC LIMIT 0,5";

        $this->db->query($query);
        return $this->db->result();

    }

    public function tambahPosting () {
        $files = $_FILES;
        $file =$_POST;
        $nameFiles =$files['nama_gambar']['name'];
        $ekstensi =['jpg','png','jpeg'];
        if($files['nama_gambar']['error'] === 4){
            Flasher::setflash('peringatan','belum ada gambar yang di inputkan', 'warning');

            return false;
        }

        $namaEkstensi =explode('.',$nameFiles);
        $namaEkstensi =strtolower(end($namaEkstensi));

        if(!in_array($namaEkstensi,$ekstensi)){
            Flasher::setflash('peringatan','file harus berekstensi jpeg, png, jpg', 'warning');


            return false;
        }
        
        move_uploaded_file($files['nama_gambar']['tmp_name'], "gbr/".$files['nama_gambar']['name']);



        $query ="INSERT INTO acara VALUES(null, :nama_gambar, :n_acara, :tglPost)";
        $this->db->query($query);
        $this->db->bind('nama_gambar',$files['nama_gambar']['name']);
        $this->db->bind('n_acara',$file['n_acara']);
        // $this->db->bind('ukuran',$file['ukuran']);
        $this->db->bind('tglPost',$file['tglPost']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tampilPosting () {
        $query ="SELECT * FROM acara ORDER BY id DESC LIMIT 0,3";
        $this->db->query($query);
        
        return $this->db->result();
    }

    public function deletPost ($id) {
        $query ="DELETE FROM acara WHERE id = :id ";

        $this->db->query($query);
        $this->db->bind('id',$id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateID ($id) {
        $query="SELECT * FROM acara WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function updateG () {
        $data= $_POST;
        $files =$_FILES;
        $nameFiles =$files['nama_gambar']['name'];
        $ekstensi =['jpg','png','jpeg'];
        
        if($files['nama_gambar']['error'] === 4){
            Flasher::setflash('tidak bisa upload','mohon isi gambar','warning');
            return false;
        }

        $namaEkstensi =explode('.',$nameFiles);
        $namaEkstensi =strtolower(end($namaEkstensi));
        if(!in_array($namaEkstensi,$ekstensi)){
            Flasher::setflash('peringatan','file harus berekstensi jpeg, png, jpg', 'warning');
            return false;
        }
        
        move_uploaded_file($files['nama_gambar']['tmp_name'], "gbr/".$files['nama_gambar']['name']);

        $query ="UPDATE acara SET nama_gambar = :nama_gambar, n_acara = :n_acara, tglPost = :tglPost WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('tglPost',$data['tglPost']);
        $this->db->bind('nama_gambar',$files['nama_gambar']['name']);
        $this->db->bind('id',$data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }


    


}