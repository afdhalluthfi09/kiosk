<?php


class Home extends Controller{


    public function index() {

        

        $data['judul']='Home';
        $img=[


            [ "img" =>"daftar.png",
              "link" => BASEURL,
              "route" => "/Pendafataran"
            ],
          
            [
                "img" => "aduankonsul140.png",
                "link" =>BASEURL,
                "route" => "/Koprasi"
          ],
          [      "img" =>  "markethub_skale140.png",
                 "link" => BASEURL,
                 "route" => "/MarketHub"
          ],
          [ 
              "img"=>  "konsultasi_scale140.png",
              "link" => BASEURL,
              "route" => "/Konsul"
          ],
          [
  
              "img"=>  "ikm_140.png",
              "link" => BASEURL,
              "route" => "/Ikm"
          ],
  
          [
              "img"=>   "saran_kritik_140.png",
              "link" => BASEURL,
              "route" => "/Sartik"
          ],

        ]; 

        $img2 =[
            [ "img" =>"p1.jpg"],
            ["img" => "p2.jpg"],
            ["img" => "bgi.jpg"]
        ];

        $datas = $this->model('AgendaModel')->updateById();
       
        $this->view('template/header',[$data,$img2]);
        $this->view('template/kop');
        $this->view('home/index',[$img,$datas]);
        $this->view('template/footer_r');
        $this->view('template/footer');
    }

    public function postUpdate(){
        echo json_encode($this->model('AgendaModel')->tampilId($_POST['id']) );
    }
    
  

   
    
    



















}

    
   
  
           

