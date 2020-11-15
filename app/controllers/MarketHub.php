<?php 

class MarketHub extends Controller{
    public function index(){
        $data["judul"]="Market HUB";
        $this->view('template/header2',$data);
       $this->view('template/kop');
        $this->view('market/index');
        $this->view('template/footer_r');
        $this->view('template/footer');
    }
}