<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

            <!-- Start DataTables jadwalMahasiswa -->
            <div class="card shadow">
                <div class="card-header pt-3">
                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newJadwalModal">Add New Jadwal</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Matakuliah</th>
                                    <th>Hari</th>
                                    <th>Jam</th>
                                    <th>Dosen</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($jadwal as $jadwal) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $jadwal['matakuliah'] ?></td>
                                        <td><?= $jadwal['hari'] ?></td>
                                        <td><?= $jadwal['jam'] ?></td>
                                        <td><?= $jadwal['dosen'] ?></td>
                                        <td>
                                            <!-- Button ubahJadwal -->
                                            <a class="btn btn-primary btn-sm" href="#modalUbahJadwal" onclick="$('#modalUbahJadwal #formUbahJadwal').attr('action', '<?= site_url('mahasiswa/ubahjadwal/' . $jadwal['id']) ?>')" data-toggle="modal" data-target="">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                            </a>
                                            <!-- End Button ubahJadwal -->

                                            <!-- Button deleteJadwal -->
                                            <a class="btn btn-danger btn-sm" href="#modalDelete" onclick="$('#modalDelete #formDelete').attr('action', '<?= site_url('mahasiswa/hapusjadwal/' . $jadwal['id']) ?>')" data-toggle="modal" data-target="">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a>
                                            <!-- Button deleteJadwal -->
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End DataTables jadwalMahasiswa -->
        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<!-- Start Modal tambahJadwal-->
<div class="modal fade" id="newJadwalModal" tabindex="-1" role="dialog" aria-labelledby="newJadwalModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newJadwalModalLabel">Add Jadwal Kuliah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('mahasiswa/jadwal'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="matakuliah" name="matakuliah" placeholder="Mata Kuliah">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="hari" name="hari" placeholder="Hari">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="jam" name="jam" placeholder="Jam">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="dosen" name="dosen" placeholder="Dosen">
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
<!-- End Modal tambahJadwal -->

<!-- Start Modal deleteJadwal -->
<div class="modal fade" id="modalDelete">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Are you sure.. ?</h5>
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
<!-- End Modal deleteJadwal -->

<!-- Start Modal ubahJadwal -->
<div class="modal fade" id="modalUbahJadwal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ubah Jadwal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <form action="<?= site_url('mahasiswa/ubahjadwal'); ?>" method="post" id="formUbahJadwal">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?= $jadwal['id']; ?>">

                    <div class="form-group">
                        <label for="matakuliah">Matakuliah</label>
                        <input type="text" class="form-control" id="matakuliah" name="matakuliah" value="<?= $jadwal['matakuliah'] ?>">
                    </div>

                    <div class=" form-group">
                        <label for="hari">Hari</label>
                        <input type="text" class="form-control" id="hari" name="hari" value="<?= $jadwal['hari'] ?>">
                    </div>

                    <div class=" form-group">
                        <label for="jam">Jam</label>
                        <input type="text" class="form-control" id="jam" name="jam" value="<?= $jadwal['jam'] ?>">
                    </div>

                    <div class=" form-group">
                        <label for="dosen">Dosen</label>
                        <input type="text" class="form-control" id="dosen" name="dosen" value="<?= $jadwal['dosen'] ?>">
                    </div>
                </div>
                <div class=" modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal UbahJadwal -->