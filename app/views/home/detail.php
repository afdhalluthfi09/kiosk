<div class="container mt-5">
    
    <div class="backling">
        <a href="<?= BASEURL; ?>/Home"><img src="<?= BASEURL; ?>/img/back.png" alt=""></a>
    </div>
    <div class="row">
        <table class="table">
             <thead style="background-color: lightgreen;">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal Agenda</th>
                        <th scope="col">Jam Pelaksanaan</th>
                        <th scope="col">Kegiatan</th>
                        <th scope="col">Tempat</th>
                        <th scope="col">Ket</th>
        
                    </tr>
                </thead>
                <tbody>
                    <?php  $a =1;  ?>
                    <?php  foreach($data as $dt):  ?>
                    <tr>
                        <th scope="row"><?= $a++; ?></th>
                        <td><?= $dt['tgl_agenda']; ?></td>
                        <td><?= $dt['jam']; ?></td>
                        <td><?= $dt['kegiatan']; ?></td>
                        <td><?= $dt['tempat']; ?></td>
                        <?php  if($dt['statuss'] == 'Selesai'):  ?>
                            <td><span class="badge badge-pill badge-primary">Selesai</span></td>
                        <?php  elseif($dt['statuss'] == 'Batal'):   ?>
                            <td><span class="badge badge-pill badge-danger"> batal</span></td>
                        <?php  else:  ?>
                                <td><span class="badge badge-pill badge-warning">Segera</span></td>
                        <?php  endif;  ?>
                    </tr>
                    <?php  endforeach;  ?>
                    
                </tbody>
            </table>
    </div>
</div>