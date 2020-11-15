<div class="container mt-5">
<div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                    <form action="<?= BASEURL;?>/Ikm/add" method="post">
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input name="umur" type="text" class="form-control" id="umur" required>
                            <small id="emailHelp" class="form-text text-muted">Silahkan Isi Umur dengan Sesuai</small>
                            <div class="invalid-feedback">
                                harap mengisi data dengan benar
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="jns_kelamin">Jenis Kelamin</label>
                            </div>
                            <div class="col">
                                
                                
                               <label class="costum-control-label" name="jns_kelamin" for="wanita">Wanita</label>
                                <input class="costum-control-input" name="jns_kelamin" type="radio" value="wanita"  id="jns_kelamin">
                            </div>
                            <div class="col costum-control">
                               <label class="costum-control-label" for="jns_kelamin">Pria</label>
                                <input class="costum-control-input" name="jns_kelamin" type="radio" value="pria" id="jns_kelamin" required> 
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label for="pendidikan">Pendidikan Terakhir</label>
                            <input name="pendidikan" type="text" class="form-control" id="pendidikan" required>
                        </div> -->

                        <div class="form-group">
                            <label for="pendidikan">Pendidiana Terakhir</label>
                            <select class="form-control" name='pendidikan' id="pendidikan">
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                                <option value="S3">S3</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="pekerjaaan">Pekerjaan dan Usaha</label>
                            <input name="pekerjaan" type="text" class="form-control" id="pekerjaan" required>
                        </div>
                        <input type="hidden" name="voting" value="<?= $data['nilai']; ?>" type="text" class="form-control" id="pekerjaan" required>

                        <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
</div>
