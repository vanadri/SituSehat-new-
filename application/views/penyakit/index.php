<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Penyakit <strong> berhasil </strong> <?= $this->session->flashdata('flash'); ?>.
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
                    <input type="text" class="form-control" placeholder="Cari data penyakit ... " name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">Daftar Penyakit</h3><br>
            <?php if (empty($penyakit)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <div class="row">
                <?php foreach ($penyakit as $pnk) : ?>
                    <div class="col-sm-6">
                        <div class="card text-white text-center mb-3"  style="background-color: green;">
                            <div class="card-header"><h2><?= $pnk['penyakit']; ?></h2></div>
                            <div class="card-body bg-light" style="color: black;">
                            <h3>Penjelasan</h3>
                            <p class="card-text"style="color: black;"><?= $pnk['ket']; ?></p>
                            <h3>Penyembuhan</h3>
                            <p class="card-text"style="color: black;"><?= $pnk['penyembuhan']; ?></p>
                            <a href="<?= base_url(); ?>Penyakit/hapus/<?= $pnk['id'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>Hapus</a>
                            <a href="<?= base_url(); ?>Penyakit/ubah/<?= $pnk['id'] ?>" class="badge badge-success float-center" ?>Ubah</a>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            <br>
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= base_url(); ?>Penyakit/tambah " class="btn btn-primary">Tambah Data Penyakit</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
          <!--   <div class="container">
                <?php foreach ($penyakit as $pnk) : ?>
                  <div class="row">
                    <div class="col-md-4">
                          <div class="card text-white text-center mb-3" style="max-width: 18rem; background-color: green;">
                            <div class="card-header"><h2><?= $pnk['penyakit']; ?></h2></div>
                             <div class="card-body" style="background-color: #ffffff;"> -->
                            <!-- <h2 class="card-title"><?= $pnk['penyakit']; ?></h2> -->
                              <!-- <p class="card-text" style="color: black;"><?= $pnk['ket']; ?></p>
                                <a href="<?= base_url(); ?>Penyakit/view/<?= $pnk['id'] ?>" class="btn btn-primary">Visit</a><br><br>
                                <a href="<?= base_url(); ?>Penyakit/hapus/<?= $pnk['id'] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>Hapus</a>
                                <a href="<?= base_url(); ?>Penyakit/ubah/<?= $pnk['id'] ?>" class="badge badge-success float-center" ?>Ubah</a>
                            </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>

            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= base_url(); ?>Penyakit/tambah " class="btn btn-primary">Tambah Data Penyakit</a>
                </div>
            </div>
        </div> -->