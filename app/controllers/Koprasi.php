<?php


class Koprasi extends Controller {
    public function index(){
        $data["judul"]="Koprasi";
        $this->view('template/header2',$data);
        $this->view('template/kop');
        $this->view('koprasi/index');
        $this->view('template/footer_r');
        $this->view('template/footer');
    }
}