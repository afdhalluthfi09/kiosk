<?php


class Sartik extends Controller {
    public function index(){
        $data["judul"]="Saran & Keritik";
        $this->view('template/header2',$data);
        $this->view('template/kop');
        $this->view('sartik/index');
        $this->view('template/footer_r');
        $this->view('template/footer');
    }

    public function sartik_page(){
        $data["judul"]="Saran & Keritik";
        $this->view('template/header2',$data);
        $this->view('sartik/sartik_page');
        $this->view('template/footer');
    }

    public function add(){
        if($this->model('SartikModel')->tambah($_POST) > 0 ){
            echo "<script>
                    alert('terimakasih atas partisipasinya')
                </script>";
            header('Location:'. BASEURL . '/Sartik/sartik_page');
            exit;
        }
    }
}