<div class="continer">
   <div class="row justify-content-center">      
            <form action="<?= BASEURL; ?>/Sartik/add" method='post'>   
                <div class="form-group">
                    <label for="saran">Saran</label>
                    <textarea style="height:100px;" name="saran" class="form-control"  required></textarea>
                </div>

                <div class="form-group">
                    <label for="kritik">Keritik</label>
                    <textarea style="height:100px;" name="kritik" class="form-control" id="kritik" required></textarea>
                </div>
                
                <div class="form-group">
                    <label for="nik">NIK KTP</label>
                    <input name="nik_ktp" type="text" class="form-control" id="nik" required>
                    <small id="emailHelp" class="form-text text-muted">Silahkan Isi dengan NIK KTP yang Anda Punya</small>
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="nama">Nama</label>
                        <input name="nama" type="text" class="form-control" id="exampleInputPassword1" required>
                    </div> 
                    
                    <div class="form-group col-6">
                        <label for="Alamat">Alamat</label>
                        <input name="alamat" type="text" class="form-control" id="exampleInputPassword1" required>
                    </div>         
                </div>
                <div class="form-row">
                    <div class="form-group col-6">
                        <label for="tempat_lahir">Tempat</label>
                        <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input name="tgl_lahir" type="date" class="form-control" id="tgl_lahir" required>
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
            </form>
    </div>
    
</div>