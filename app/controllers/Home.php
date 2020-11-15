<?php


class Home extends Controller{


    public function index() {

        
        $dataa = $this->model('Api')->berita();
        $data['judul']='Anjungan Mandiri SiBakul Jogjaka Dinas Koperasi & UKM DIY';
        $img=[


            [ "img" =>"daftar.png",
              "link" => BASEURL,
              "route" => "/Pendafataran"
            ],
          
            [
                "img" => "aduan.png",
                "link" =>BASEURL,
                "route" => "/Koprasi"
          ],
          [      "img" =>  "market.png",
                 "link" => BASEURL,
                 "route" => "/MarketHub"
          ],
          [ 
              "img"=>  "konsultasi.png",
              "link" => BASEURL,
              "route" => "/Konsul"
          ],
          [
  
              "img"=>  "ikm.png",
              "link" => BASEURL,
              "route" => "/Ikm"
          ],
  
          [
              "img"=>   "saran.png",
              "link" => BASEURL,
              "route" => "/Sartik"
          ],

        ]; 

 
        
        $datas = $this->model('AgendaModel')->updateById();
        $dataz =$this->model('AgendaModel')->tampilPosting();
        $this->view('template/header',$data);
        $this->view('template/kop');
        $this->view('home/search');
        $this->view('home/index',[$img,$datas,$dataz]);
        $this->view('template/footer_r',$dataa);
        $this->view('template/footer');
    }

    public function postUpdate(){
        echo json_encode($this->model('AgendaModel')->tampilId($_POST['id']) );
    }

    public function search () {
        $data['judul']='Anjungan Mandiri SiBakul Jogjakarta';
        $this->view('template/header',$data);
        $this->view('template/kop');
        $this->view('home/search');
        $this->view('home/search_p');
        $this->view('template/footer_r');
        $this->view('template/footer');
    }

    public function detailTabel () {
        $datas = $this->model('AgendaModel')->getAll();
        $data['judul'] ='Detail';
        $this->view('template/header2',$data);
        $this->view('template/kop');
        $this->view('home/detail',$datas);
        $this->view('template/footer_r');
        $this->view('template/footer');
    }
    
  

   
    
    



















}

    
   
  
           

