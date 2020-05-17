<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
<br><br><br><br>
<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <div class="card">
                <div class="card-header text-center">
                    Form Ubah Data Penyakit
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $penyakit['id'] ?>">
                        <div class="form-group">
                            <label for="penyakit">Nama Penyakit</label>
                            <input type="text" class="form-control" id="penyakit" name="penyakit" value="<?= $penyakit['penyakit']; ?>">
                            <small class="form-text text-danger"><?= form_error('penyakit') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="ket">Keterangan</label>
                            <input type="text" class="form-control" id="ket" name="ket" value="<?= $penyakit['ket']; ?>">
                            <small class="form-text text-danger"><?= form_error('ket') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="text">Penyembuhan</label>
                            <input type="text" class="form-control" id="penyembuhan" name="penyembuhan" value="<?= $penyakit['penyembuhan']; ?>">
                            <small class="form-text text-danger"><?= form_error('penyembuhan') ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data Penyakit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 