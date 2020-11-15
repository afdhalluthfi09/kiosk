

<div class="container">
    <div class="row">
        <h1> Halaman Tambahan Info Posting </h1>
    </div>
    <div class="row">
        <div class="col">
            <form enctype="multipart/form-data" action="<?= BASEURL; ?>/Admin/postGbr"  method="post" >
                <div class="form-group">
                    <label for="gambar">Another label</label>
                    <input type="file" class="form-control" name="nama_gambar" id="nama_gambar" placeholder="Another input placeholder">
                </div>
                <div class="form-group">
                    <label for="gambar">nama acara</label>
                    <input type="text" class="form-control" name="n_acara" id="gambar" placeholder="Another input placeholder">
                </div>
                <div class="form-group">
                    <label for="gambar">tanggal post</label>
                    <input type="date" class="form-control" name="tglPost" id="gambar" placeholder="Another input placeholder">
                </div>
                <button class="btn btn-success" name="upload">Upload</button>
            </form>
        </div>
    </div>
    <div class="row">
        <?php  Flasher::flash();  ?>
    </div>
</div>
<hr class="mt-5">

<div class="container">
    <div class="row">
        <table class="table">
            <tr>
                <th>Tanggal Posting</th>
                <th>Postingan</th>
                <th>Acara</th>
                <th>Aksi</th>
            </tr>
            <?php  foreach($data[1] as $dt):  ?>
                <tr>
                    <td>
                        <?= $dt['tglPost']; ?>
                    </td>
                    <td>
                        <img style="width: 100px; height:100px" src="<?= BASEURL; ?>/gbr/<?= $dt['nama_gambar']; ?>" alt="">
                    </td>
                    <td>
                        <?= $dt['n_acara']; ?>
                    </td>
                    <td>
                        <a href="<?= BASEURL; ?>/Admin/hapusPost/<?= $dt["id"]?>" 
                            class="badge badge-pill badge-danger" 
                            onclick=" return confirm('yakin ?')">hapus</a>
                       
                    </td>
                   

                </tr>
            <?php  endforeach;  ?>
        </table>
        <?= $data[1][0]['nama_gambar'] ;  ?>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form action="<?= BASEURL;?>/Admin/updateID" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id">
        <input type="hidden" name="nama_gambar" id="gambar_lama">  
        <div class="form-group">
            <label for="tglPost" class="col-form-label">Tanggal Post</label>
            <input type="date" name="tglPost" class="form-control" id="tglPost">
          </div>
          <div class="form-group">
              <img style="width: 100px; height:100px;" id="gambar_nama" src="" alt="">
            <label for="nama_gambar" class="col-form-label">Message:</label>
            <input type="file" name="gambar", id="nama_gambar">
          </div>
          <div class="form-group">
            <label for="n_acara" class="col-form-label">Acara</label>
            <input type="text" name="n_acara", id="n_acara">
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="update" class="btn btn-primary">ubah</button>
        </div>
    </form>
    </div>
  </div>
</div>
