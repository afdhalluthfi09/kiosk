<?php



class Konsul extends Controller {
    public function index(){
       $data["judul"]="Konsultasi";
       $this->view('template/header2',$data);
       $this->view('konsul/konsulPage');
       $this->view('template/footer_r');
       $this->view('template/footer');
    }

    public function tambahData () 
     {
         try {
             
            if($this->model('Konsulumum')->tambah($_POST) > 0){
                echo "berhasil";
            }

         } catch (ErrorException $e) {
             //throw $th;
             die($e->getMessage());
         }
        // if(isset($_POST['submit'])){
        //     var_dump($_POST);
        // }
     }
}