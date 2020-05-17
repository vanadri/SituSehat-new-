<br><br><br>
<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data gejala ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Gejala</h3>
            <?php if (empty($xgejala)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">GEJALA</th>
                        <th class="text-center" scope="col">KETERANGAN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($xgejala as $gjl) : ?>
                        <td class="text-center"><?= $gjl['gejala']; ?></td>
                        <td class="text-center"><?= $gjl['ket']; ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            

        </div>
    </div>
</div> 