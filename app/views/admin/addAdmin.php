<div class="container">
    <div class="row">
        <h4>Halaman Tambah Admin</h4>
        <?php  Flasher::flash();  ?>
    </div>
    <div class="row">
        <form action="<?= BASEURL; ?>/Admin/addAdmin" method="post" >
        <div class="form-row">
            <div class="form-group">
                <label for="Tanggal">nama admin</label>
                <input type="text" name="nama" class="form-control">
            </div>
        </div>
        
        <div class="form-row">
            <div class="form-group">
                    <label for="jam">password</label>
                    <input type="text" name="pass" class="form-control" >
                </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="hidden" value="123456" name="nik" class="form-control" ></input>
            </div>
        </div>
        <button type="reset" class="btn btn-danger btn-sm">Batal</button>
        <button type="submit" name="submit" class="btn btn-success btn-sm">Kirim</button>
    </form>
    </div>
</div>