<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>
    <?= $this->session->flashdata('flash'); ?>


    <!-- DataTables Mahasiswa -->
    <div class="card shadow">
        <div class="card-header pt-3">
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMahasiswaModal"><i class="fa fa-user-plus mr-3"></i>Add New Nilai</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Gambar</th>
                            <th>NPM</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Email</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<!-- Modal Tambah -->
<!-- <div class="modal fade" id="newMahasiswaModal" tabindex="-1" role="dialog" aria-labelledby="newMahasiswaModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newMahasiswaModalLabel">Add New Mahasiswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('mahasiswa'); ?>" method="post">
                        <div class="modal-body">

                            <div class="form-group">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" id="npm" name="npm" placeholder="NPM">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" id="umur" name="umur" placeholder="Umur">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->
<!-- End Modal Tambah -->