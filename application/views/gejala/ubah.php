<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
<br><br><br><br>
<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <div class="card">
                <div class="card-header text-center">
                    Form Ubah Data Gejala
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $gejala['id'] ?>">
                        <div class="form-group">
                            <label for="gejala">Gejala</label>
                            <input type="text" class="form-control" id="gejala" name="gejala" value="<?= $gejala['gejala']; ?>">
                            <small class="form-text text-danger"><?= form_error('gejala') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="ket">Keterangan</label>
                            <input type="text" class="form-control" id="ket" name="ket" value="<?= $gejala['ket']; ?>">
                            <small class="form-text text-danger"><?= form_error('ket') ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data Gejala</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>