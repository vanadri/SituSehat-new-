<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
<br><br><br><br>
<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <div class="card">
                <div class="card-header text-center">
                    Form Ubah Data Hidup Sehat
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $HidupSehat['id'] ?>">
                        <div class="form-group">
                            <label for="sehat">Hidup Sehat</label>
                            <input type="text" class="form-control" id="sehat" name="sehat" value="<?= $HidupSehat['sehat']; ?>">
                            <small class="form-text text-danger"><?= form_error('Hidup Sehat') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="dampak">Dampak</label>
                            <input type="text" class="form-control" id="dampak" name="dampak" value="<?= $HidupSehat['dampak']; ?>">
                            <small class="form-text text-danger"><?= form_error('dampak') ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data Hidup Sehat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 