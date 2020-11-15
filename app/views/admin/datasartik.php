<h5 style="text-align: center;" class="mt-5" >
<img src="<?= BASEURL; ?>/img/logos3.1.png" class="" style=" height:100px;" alt="">
</h5>

<div class="container mt-5">
    <table class="table">
        <thead class="head-color">
            <tr>
                <th>NIK KTP</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>TEMPAT LAHIR</th>
                <th>TANGGAL LAHIR</th>
                <th>TANGGAL LAHIR</th>
                <th>SARAN</th>
                <th>KERITIK</th>
            </tr>
        </thead>
        <?php  foreach($data as $dt):  ?>
            <tr>
                <td><?= $dt['nik_ktp']; ?></td>
                <td><?= $dt['nama']; ?></td>
                <td><?= $dt['alamat']; ?></td>
                <td><?= $dt['tempat_lahir']; ?></td>
                <td><?= $dt['tgl_lahir']; ?></td>
                <td><?= $dt['saran']; ?></td>
                <td><?= $dt['kritik']; ?></td>
            </tr>
        <?php  endforeach;  ?>
    </table>
</div>