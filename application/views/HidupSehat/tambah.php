<div class="container">
    <div class="row mt-3">
        <div class="col">
            <br><br>
            <div class="card">
                <div class="card-header text-center">
                    Form Tambah Data Hidup Sehat
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="sehat">Hidup Sehat</label>
                            <input type="text" class="form-control" id="sehat" name="sehat">
                            <small class="form-text text-danger"><?= form_error('sehat') ?>.</small>
                        </div>
                        <div class="form-group">
                            <label for="dampak">Dampak</label>
                            <input type="text" class="form-control" id="dampak" name="dampak">
                            <small class="form-text text-danger"><?= form_error('dampak') ?>.</small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data Hidup Sehat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 