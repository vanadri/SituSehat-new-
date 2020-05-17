<link rel="stylesheet" type="text/css" href="assets/css/styles.css"><br><br>
<div class="container">
    <div class="row mt-3">
        <div class="col">
            <br><br>
            <div class="card">
                <div class="card-header text-center" style="background-color: lightgreen; ">
                    <h2>Form Tambah Data Penyakit</h2>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="penyakit"><strong>Nama Penyakit<strong></label>
                            <input type="text" class="form-control" id="penyakit" name="penyakit">
                            <small class="form-text text-danger"><?= form_error('penyakit') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="ket">Keterangan</label>
                            <input type="text" class="form-control" id="ket" name="ket">
                            <small class="form-text text-danger"><?= form_error('ket') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Cara penyembuhan</label>
                            <input type="text" class="form-control" id="penyembuhan" name="penyembuhan">
                            <small class="form-text text-danger"><?= form_error('penyembuhan') ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right" >Tambah Data Penyakit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
<br>
<br>
