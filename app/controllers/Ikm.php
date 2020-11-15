<?php 

class Ikm extends Controller {
    public function index(){
        $data["judul"]="Indeks Kepuasan";

        // $data["agnd"]=$this->model('Database')->getDataAgenda();
        $data["ajenda"] =$this->model('Agenda')->getAll();

        $this->view('template/header2',$data);
        $this->view('template/kop');
        $this->view('ikm/index',$data);
        $this->view('template/footer_r');
        $this->view('template/footer');
    }

    public function page_saran($nilai){
        $data["judul"]="Indeks Kepuasan";
        $data["nilai"]=$nilai;
        $this->view('template/header2',$data);
        $this->view('template/kop');
        $this->view('ikm/page_saran',$data);
        $this->view('template/footer_r');
        $this->view('template/footer');
    }

    public function add(){
        if($this->model('IkmModel')->tambah($_POST) > 0 ){
            header( 'Location: '. BASEURL . '/Ikm/grafik' );
            exit;
            
        }
    }

    public function grafik(){

        $this->view('template/header2');
        $this->view('template/kop');
        $this->view('ikm/grafik');
        $this->view('template/footer_r');
        $this->view('template/footer');
    }
}