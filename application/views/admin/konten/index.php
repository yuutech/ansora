<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Artikel</h1>
    </div>
    <p class="mb-4">Daftar Artikel</p>

    <?= $this->session->flashdata('message') ?>
    <a class="btn btn-primary mb-4" href="<?= base_url('admin/konten/buat_artikel'); ?>">Tambah Artikel</a>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 text-black">Daftar Artikel</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th style="width: 40%;">Judul Artikel</th>
                                    <th>Kategori</th>
                                    <th>Gambar</th>
                                    <th>Penulis</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($daftar_artikel as $arc) :
                                ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $arc['judul_artikel']; ?></td>
                                        <td><?= $arc['kategori']; ?></td>
                                        <td style="width:10%;">
                                            <img src="<?= base_url('assets/img/upload/artikel/' . $arc['gambar']); ?>" class=" img img-fluid" alt="">
                                        </td>
                                        <td><?= $arc['penulis']; ?></td>
                                        <td><?= $arc['status'] == 1 ? 'Terpublikasi <br>(' . $arc['tanggal_publikasi'] . ')' : 'Draft'; ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/konten/edit_artikel/' . $arc['id_artikel']); ?>" class="btn btn-warning"><i class="fa fas fa-edit"></i>Edit</a>
                                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?= $i; ?>"><i class="fa fas fa-trash"></i>Hapus</a>
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
                                                        <p>Anda Yakin Akan Menghapus Artikel <b><?= $arc['judul_artikel']; ?></b> Secara Permanen?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <a href="<?= base_url('admin/konten/hapus_artikel/') . $arc['id_artikel']; ?>" class="btn btn-primary">Ya, Saya Yakin</a>
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