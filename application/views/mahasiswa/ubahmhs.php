<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row mb-5">
        <div class="col-lg-6">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>


            <?= $this->session->flashdata('message'); ?>
            <a class="btn btn-outline-primary" href="<?= base_url('mahasiswa') ?>" role="button">Kembali</a>

            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">

                <div class="form-group mt-4">
                    <label for="">NPM</label>
                    <input type="text" class="form-control" name="npm" id="npm" value="<?= $mahasiswa['npm'] ?>" readonly>
                </div>

                <div class="form-group mt-4">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="<?= $mahasiswa['nama'] ?>">
                </div>

                <div class="form-group mt-4">
                    <label for="">Jurusan</label>
                    <input type="text" class="form-control" name="jurusan" id="jurusan" value="<?= $mahasiswa['jurusan'] ?>">
                </div>

                <div class="form-group mt-4">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $mahasiswa['alamat'] ?>">
                </div>
                <div class="form-group mt-4">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" id="email" value="<?= $mahasiswa['email'] ?>">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Simpan</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->