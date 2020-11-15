<div class="container rw-search">
    <div class="row justify-content-center ">
        <!-- <form action="">
            <input type="search">
            <i class="fa fa-search"></i>
        </form> -->

        <!-- <input class="search-c " placeholder="    cek nik anda.." type="text">
        <button class=" btn badge badge-pill badge-success ">cari</button> -->
        <form action="<?= BASEURL; ?>/Home/search" method="post">
            <div class="bgc">
                <h4>Sudah terdaftar di SiBakul Jogja?? Cek dengan NIK Anda</h4>
                <div class="input-group search-c">
                    <input type="number" class="form-control" placeholder="ISIKAN NIK" name="keyword" id="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit" id="button-addon2">CEK</button>
                    </div> 
                </div>
            </div>
            
        </form>
    </div>



</div>