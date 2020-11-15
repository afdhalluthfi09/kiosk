<?php

class Pendafataran extends Controller {
    public function index(){
        $data["judul"]="Pendaftaran SiBakul";
        $this->view('template/header2',$data);
        $this->view('template/kop');
        $this->view('sibakul/index');
        $this->view('template/footer_r');
        $this->view('template/footer');
    }
}