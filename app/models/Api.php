<?php     
 class Api {
    public function berita(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://diskopukm.jogjaprov.go.id/berita.php?",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $data =json_decode($response,true);
        $data = $data["berita"];

        return $data;   
    }
} ?>