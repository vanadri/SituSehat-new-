<br><br><br>
<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data Hidup Sehat ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Hidup Sehat</h3>
            <?php if (empty($xHidupSehat)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">HIDUP SEHAT</th>
                        <th class="text-center" scope="col">DAMPAK</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><?php foreach ($xHidupSehat as $hds) : ?>
                        <td class="text-center"><?= $hds['sehat']; ?></td>
                        <td class="text-center"><?= $hds['dampak']; ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</div> 