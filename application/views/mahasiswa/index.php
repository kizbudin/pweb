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

    <!-- Start DataTables Mahasiswa -->
    <div class="card shadow">
        <div class="card-header pt-3">
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMahasiswaModal"><i class="fa fa-user-plus mr-3"></i>Add New Mahasiswa</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NPM</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($mahasiswa as $mhs) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $mhs['npm'] ?></td>
                                <td><?= $mhs['nama'] ?></td>
                                <td><?= $mhs['jurusan'] ?></td>
                                <td><?= $mhs['alamat'] ?></td>
                                <td><?= $mhs['email'] ?></td>
                                <td>
                                    <!-- Start Button tambahMahasiswa -->
                                    <a class="btn btn-primary btn-sm" href="<?= site_url('mahasiswa/ubahmhs/' . $mhs['id']) ?>" role="button">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                    </a>
                                    <!-- End Button tambahMahasiswa -->

                                    <!-- Start Modal hapusMahasiswa -->
                                    <a class="btn btn-danger btn-sm" href="#modalDelete" onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('mahasiswa/hapusmhs/' . $mhs['id']) ?>')" data-toggle="modal" data-target="">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                    <!-- End Modal hapusMahasiswa -->
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <!-- End DataTables Mahasiswa -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal tambahMahasiswa-->
<div class="modal fade" id="newMahasiswaModal" tabindex="-1" role="dialog" aria-labelledby="newMahasiswaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMahasiswaModalLabel">Add New Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('mahasiswa'); ?>
            <div class="modal-body">


                <div class="form-group">
                    <input type="text" class="form-control" id="npm" name="npm" placeholder="NPM">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan">
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
</div>
<!-- End Modal tambahMahasiswa-->

<!-- Modal deleteMahasiswa -->
<div class="modal fade" id="modalDelete">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Are you sure?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <form action="" method="post" id="formDelete">
                    <button class="btn btn-default" data-dismiss="modal">Tidak</button>
                    <button class="btn btn-danger" type="submit">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal deleteMahasiswa -->