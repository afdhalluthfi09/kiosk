<?php  

class KonsukUm extends Controller{
    
    public function index ()
     {
         $this->view('template/header2');
         $this->view('konsul/konsulPage');
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

?>