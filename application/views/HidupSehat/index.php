<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Hidup Sehat <strong> berhasil </strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

<br><br><br>    
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
            <?php if (empty($HidupSehat)) : ?>
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
                    <tr><?php foreach ($HidupSehat as $hds) : ?>
                        <td class="text-center"><?= $hds['sehat']; ?></td>
                        <td class="text-center"><?= $hds['dampak']; ?></td>
                        <td class="text-center">
                            <a href="<?= base_url(); ?>HidupSehat/hapus/<?= $hds['id'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>Hapus</a>
                            <a href="<?= base_url(); ?>HidupSehat/ubah/<?= $hds['id'] ?>" class="badge badge-success float-center" ?>Ubah</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= base_url(); ?>HidupSehat/tambah " class="btn btn-primary">Tambah Data Hidup Sehat</a>
                </div>
            </div>

        </div>
    </div>
</div> 