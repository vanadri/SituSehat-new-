<link rel="stylesheet" type="text/css" href="assets/css/styles.css"><br><br>
<div class="container">
    <div class="row mt-3">
        <div class="col">
            <br><br>
            <div class="card">
                <div class="card-header text-center">
                    Form Tambah Data Gejala
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="gejala">Gejala</label>
                            <input type="text" class="form-control" id="gejala" name="gejala">
                            <small class="form-text text-danger"><?= form_error('gejala') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="ket">Keterangan</label>
                            <input type="text" class="form-control" id="ket" name="ket">
                            <small class="form-text text-danger"><?= form_error('ket') ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data Gejala</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
<br>