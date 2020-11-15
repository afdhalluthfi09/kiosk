<h5 style="text-align: center;" class="mt-5" >
<img src="<?= BASEURL; ?>/img/logos3.1.png" class="" style=" height:100px;" alt="">
</h5>

<div class="container mt-5">
        <div class="d-flex justify-content-center" > 
            <ul> 
                <?php  foreach($data as $dt):  ?>
                    <li>
                        <a href="<?= BASEURL; ?><?= $dt['route'];?>"
                            >
                            <img src="<?= $dt["link"];?>/img/<?= $dt['img']; ?>" alt="" class="shadow-sm p-3 mb-5 bg-white rounded "><br>
                            <label> <?= $dt["label"]; ?> </label>
                        </a>
                        
                    </li>
                <?php  endforeach;  ?>
            </ul>
        </div>


</div>