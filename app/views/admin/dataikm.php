<h5 style="text-align: center;" class="mt-5" >
<img src="<?= BASEURL; ?>/img/logos3.1.png" class="" style=" height:100px;" alt="">
</h5>

<div class="container mt-5">
    <table class="table">
        <thead class="head-color" >
            <tr>
                <th>
                    jenis kelamin
                </th>
                <th>
                    penididikan
                </th>
                <th>
                    pekerjaan
                </th>
                <th>
                    voting
                </th>
            </tr>
        </thead>
        <?php  foreach($data as $dt):  ?>
            <tr>
                <td><?= $dt['jns_kelamin']; ?></td>
                <td><?= $dt['pendidikan']; ?></td>
                <td><?= $dt['pekerjaan']; ?></td>
                <td><?= $dt['voting']; ?></td>
            </tr>
        <?php  endforeach;  ?>
        
    </table>
</div>