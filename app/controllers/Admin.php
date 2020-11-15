<?php

class Admin extends Controller{

    public function index(){
        $data['judul']="Login";
        $this->view('template/header2',$data);
        $this->view('admin/index');
        $this->view('template/footer');

    }

    public function tambahAdmin(){
        $this->view('template/header2');
        $this->view('admin/addAdmin');
        $this->view('template/footer');
    }
    public function addAdmin () {
        if($this->model('AdminModel')->addAdmin($_POST) > 0 ){
            Flasher::setFlash('berhasil','ditambahakan','success');
            header('Location:'. BASEURL . '/Admin/tambahAdmin');
            exit;
        }else{
            Flasher::setFlash('berhasil','ditambahakan','danger');
            header('Location:'. BASEURL . '/Admin/tambahAdmin');
            exit;
        }
    }

    public function adminH () {

        $img =[
            [
                "img" =>"jadwal.png",
                "link"=>BASEURL,
                "route" => "/Admin/agenda",
                "label" => "jadwal Agenda"
            ],
            [
                "img" =>"post.png",
                "link"=>BASEURL,
                "route" => "/Admin/postAcara",
                "label" => "Posting Agenda"
            ],
            [
                "img" =>"dataBase.png",
                "link"=>BASEURL,
                "route" => "/Admin/dataIkm",
                "label" => "Daftar Tabel IKM"
            ],
            [
                "img" =>"dataBase.png",
                "link"=>BASEURL,
                "route" => "/Admin/dataSartik",
                "label" => "Daftar Tabel Sartik"
            ]
        ];

        $data['judul']="Halaman Admin";
        $this->view('template/header2',$data);
        $this->view('admin/admin',$img);
        $this->view('template/footer');
    }

    public function index2(){
        if($this->model('AdminModel')->login($_POST) > 0 ){
            header('Location: '.BASEURL .'/Admin/adminH');
        }else {
            header('Location: '.BASEURL.'/Admin/index2');
        }
    }

    /** bagaian  admin halaman agenda   */

    public function agenda(){
        $data['agenda'] = $this->model('AgendaModel')->getAll();
        $this->view('template/header2');
        $this->view('admin/agenda',$data);
        $this->view('template/footer');
    }

    public function add()
    {
        if($this->model('AgendaModel')->tambah($_POST) > 0 ){
            Flasher::setFlash('berhasil','ditambahakan','success');
            header('Location:'. BASEURL . '/Admin/agenda');
            exit;
        }else{
            Flasher::setFlash('berhasil','ditambahakan','danger');
            header('Location:'. BASEURL . '/Admin/agenda');
            exit;
        }
    }

    public function hapus($id)
    {
        if($this->model('AgendaModel')->deletId($id) > 0 ){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location:'. BASEURL . '/Admin/agenda');
            exit;   
        }else{
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location:'. BASEURL . '/Admin/agenda');
            exit;
        }
    }

    public function edit(){

       echo json_encode($this->model('AgendaModel')->tampilId($_POST['id']));
    }
    
    public function update(){

        if($this->model('AgendaModel')->ubah($_POST) > 0 ){
            Flasher::setFlash('berhasil','ditambahakan','success');
            header('Location:'. BASEURL . '/Admin/agenda');
            exit;
        }else{
            Flasher::setFlash('berhasil','ditambahakan','danger');
            header('Location:'. BASEURL . '/Admin/agenda');
            exit;
        }
    }

    /** halaman penutup admin bagian agenda atau jadwal */
    /** halaman admin bagian posting poster */

    public function postAcara () {
        $dataz =$this->model('AgendaModel')->tampilPosting();
        $data['posting'] =$this->model('AgendaModel')->tampilPosting();
        $data['judul']="Halaman Post";
        $this->view('template/header2',$data);
        $this->view('admin/post_acara',[$data,$dataz]);
        $this->view('template/footer');
    }

    public function postGbr () 
    {
        if($this->model('AgendaModel')->tambahPosting($_POST) > 0){
            Flasher::setFlash('berhasil','menambahkan', 'success');
            header('Location :'. BASEURL . '/Admin/postAcara');
            exit;
        }else{
            header('Location :'. BASEURL . '/Admin/postAcara');
            exit;
        }


    }

    public function hapusPost ($id)
     {
        if($this->model('AgendaModel')->deletPost($id) > 0){
            Flasher::setFlash('berhasil','menghapus posting', 'success');
            header('Location:'. BASEURL .'/Admin/postAcara');
            exit;
        }else{
            Flasher::setFlash('gagal','menghapus posting', 'danger');
            header('Location:'. BASEURL .'/Admin/postAcara');
            exit;
        }
    }

    public function updateG ()
     {
        echo json_encode($this->model('AgendaModel')->updateID($_POST['id']));
    }
    public function updateID () 
        {
        if($this->model('AgendaModel')->updateG($_POST) > 0){
            Flasher::setFlash('berhasil','update', 'success');
            header('Location:'. BASEURL .'/Admin/postAcara');
            exit;
        }else{
            Flasher::setFlash('gagal','update', 'success');
            header('Location:'. BASEURL .'/Admin/postAcara');
            exit;
        }
    }

    /** penutup bagaian halaman admin posting */


    /** Halaman Tabel IKM */

    public function dataIkm ()
    {
        $data = $this->model('IkmModel')->tampilIkm();
        $this->view('template/header2');
        $this->view('admin/dataikm',$data);
        $this->view('template/footer');
    }
    // p Table IKM

    /** halaman tabel Sartik */
     
    public function dataSartik () 
    {
        $data =$this->model('SartikModel')->tampilSartik();
        $this->view('template/header2');
        $this->view('admin/datasartik',$data);
        $this->view('template/footer');
    }

    // p tabel Sartik

}