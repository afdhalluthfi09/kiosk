<div class="container mt-5" style="width: 100%;">
    <div class="row justify-content-center">
        <?php foreach($data[0] as $g): ?>    
            <a href="<?= $g["link"]; ?><?= $g["route"];?>"> 
                <img style="width: 130px; height:130px" src="<?= BASEURL;?>/img/<?= $g["img"];?>" class="shadow mr-3" alt="">
            </a>
        <?php endforeach; ?>
    </div>
</div>
    <div class="d-flex justify-content-around  mt-4">
        <div class="">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                       
                        <div class="carousel-item active">
                            <img src="<?= BASEURL; ?>/gbr/<?= $data[2][0]['nama_gambar']; ?>" class="d-block " alt="...">
                        </div>
                       
                        <div class="carousel-item">
                            <img src="<?= BASEURL; ?>/gbr/<?= $data[2][1]['nama_gambar'];?>" class="d-block " alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= BASEURL; ?>/gbr/<?= $data[2][2]['nama_gambar'];?>" class="d-block " alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
            </div>
        </div>
                 
        
        <div class="">
        <div class="sideBar ml-5">
                <div class="dropdown">
                    <button onclick="myCLick()" class="p-info">AGENDA DINAS</button>
                    
                    <div id="mydropdown"     class="dropdown-content shadow" >
                        <table class="table">
                            <tr>
                                <th>TANGGAL</th>
                                <th>JAM</th>
                                <th>KEGIATAN</th>
                                <th>TEMPAT</th>
                            </tr>  
                        
                            
                                <?php foreach($data[1] as $dt): ?>
                                <tr>
                                    <td> <?= date("d M y", strtotime($dt['tgl_agenda']) ) ; ?> </td>
                                    <td> <?= $dt['jam']; ?> </td>
                                    <td> <?= $dt['kegiatan']; ?> </td>
                                    <td> <?= $dt['tempat']; ?> </td>
                                </tr>
                                <?php endforeach; ?>
                        </table>
                        <a href="<?= BASEURL;?>/Home/detailTabel"
                        class="badge  badge-pill badge-success"
                        > Detail</a>
                    </div>
                </div>
            </div>
        
    </div>

        </div>
            
   
