<h5>Halaman Admin</h5>

<div class="container">
  <div class="row">
      <?php  Flasher::flash();  ?>
  </div>
    <form action="<?= BASEURL; ?>/Admin/add" method="post" >
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="Tanggal">Tanggal</label>
                <input type="date" name="tgl_agenda" class="form-control">
            </div>
            <div class="form-group col-md-2">
                <label for="jam">Jam</label>
                <input type="text" name="jam" class="form-control" >
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="kegiatan">Kegiatan</label><br>
                <textarea type="text" name="kegiatan" class="form-control" ></textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="tempat">Tempat</label><br>
                <textarea type="text" name="tempat" class="form-control" ></textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="status">ket</label><br>
                <select class="form-control" name='statuss' id="statuss">
                    <option value="Segera">Segera</option>              
                </select>
            </div>
        </div>
        <button type="reset" class="btn btn-danger btn-sm">Batal</button>
        <button type="submit" name="submit" class="btn btn-success btn-sm">Kirim</button>
    </form>
</div>






<div class="container">
    
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tanggal Agenda</th>
      <th scope="col">Jam</th>
      <th scope="col">Kegiatan</th>
      <th scope="col">Tempat</th>
      <th scope="col">Ket</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $a =0; ?>  
    <?php foreach($data['agenda'] as $dt): ?>   
            <tr>
                <th scope="row"> <?= $a++ ;?> </th>
                <td name ="tgl" > <?= $dt['tgl_agenda']; ?> </td>
                <td name="jam" > <?= $dt['jam']; ?> </td>
                <td name="kegiatan"> <?= $dt['kegiatan']; ?> </td>
                <td name="tempat" > <?= $dt['tempat']; ?> </td>
                <td name="statuss" > <?= $dt['statuss']; ?> </td>
                <td>
                    <a href="<?= BASEURL; ?>/Admin/hapus/<?= $dt["id"]?>" onclick=" return confirm('yakin ?')">
                        <span class="badge badge-pill badge-danger">Hapus</span> 
                    </a> 
                
                </td>
                <td>
                    <a  
                       data-toggle="modal" 
                       data-target="#exampleModal"
                       data-id="<?= $dt['id']; ?>"
                       class="badge badge-pill badge-warning edit">
                        edit 
                    </a> 
                
                </td>
               

            </tr>
    <?php endforeach; ?>

  </tbody>
</table>
</div>
<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Update Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/Admin/update" method="POST">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tanggal Agenda:</label>
            <input  type="date" id="tgl_agenda" name="tgl_agenda" class="form-control" >
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Jam:</label>
            <input type="text" id="jam"  name="jam" class="form-control" >
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Kegiatan:</label>
            <textarea type="text" class="form-control" name="kegiatan" id="kegiatan"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Tempat:</label>
            <textarea type="text" class="form-control" name="tempat" id="tempat"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Ket:</label>
            <select class="form-control" name='statuss' id="statuss">
              <option value="Segera">Segera</option>
              <option value="Batal">Batal</option>
              <option value="Selesai">Selesai</option>                   
            </select>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="restart" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- modal -->


<div class="backling">
    <a href="<?= BASEURL; ?>/Home"><img src="<?= BASEURL; ?>/img/back.png" alt=""></a>
</div>


