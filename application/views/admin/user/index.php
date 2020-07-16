<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User Management</h1>
    </div>
    <p class="mb-4">Daftar User</p>

    <?= $this->session->flashdata('message') ?>
    <a class="btn btn-primary mb-4" href="<?= base_url('admin/user/tambah_user'); ?>">Tambah User</a>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 text-black">Daftar User</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>

                                    <th>No.</th>
                                    <th style="width: 10%;">Foto</th>
                                    <th>Nama Pengguna</th>
                                    <th>Username</th>
                                    <th>Kategori</th>
                                    <th>Email</th>
                                    <th>Narahubung</th>
                                    <th>Level</th>
                                    <th style="width: 50%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($daftar_user as $usr) :
                                ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><img class="img-fluid" src="<?= base_url('assets/img/upload/profile/') . $usr['foto']; ?>" alt=""></td>
                                        <td><?= $usr['nama']; ?></td>
                                        <td><?= $usr['username']; ?></td>
                                        <td><?= $usr['kategori']; ?></td>
                                        <td><?= $usr['email']; ?></td>
                                        <td><?= $usr['narahubung'] . '</br>' . $usr['kontak_narahubung']; ?></td>
                                        <td><?= $usr['id_level'] == 1 ? 'Admin' : 'User'; ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/user/edit_user/' . $usr['id_user']); ?>" class="btn btn-warning"><i class="fa fas fa-edit"></i> Edit</a>
                                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?= $i; ?>"><i class="fa fas fa-trash"></i> Hapus</a>
                                        </td>
                                        <!-- modal -->

                                        <!-- hapus -->
                                        <div class="modal fade" id="hapus<?= $i; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Anda Yakin?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Anda Yakin Akan Menghapus User <b><?= $usr['nama']; ?></b> Secara Permanen?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <a href="<?= base_url('admin/user/hapus_user/') . $usr['id_user']; ?>" class="btn btn-primary">Ya, Saya Yakin</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->