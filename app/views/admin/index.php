<h5 style="text-align: center;" class="mt-5" >
<img src="<?= BASEURL; ?>/img/logos3.1.png" class="" style=" height:100px;" alt="">
</h5>

<div class="container mt-5">
        <form action="<?= BASEURL; ?>/Admin/index2" method="post">
            <!-- <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" name="nik" class="form-control" id="nik">
                <small id="emailHelp" class="form-text text-muted">Harap Mengisi NIK dengan teliti.</small>
            </div>   -->
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama">
                <small id="emailHelp" class="form-text text-muted">Mengisi nama sesuai dengan nik yang sesuai.</small>
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" name="pass" class="form-control" id="pass">
            </div>
            <button class="btn btn-success" type="submit" name="masuk" > masuk </button>
        </form>
</div>
