<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kategori</h1>
    </div>
    <p class="mb-4">Daftar Kategori</p>
    <?= $this->session->flashdata('message') ?>
    <button class="btn btn-primary mb-4" data-toggle="modal" data-target="#tambahCat">Tambah Kategori</button>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 text-black">Daftar Kategori</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Kategori</th>
                                    <th>Slug</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($daftar_kategori as $cat) :
                                ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $cat['nama_cat']; ?></td>
                                        <td><?= $cat['slug_cat']; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $i; ?>"><i class="fa fas fa-edit"></i>Edit</a>
                                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?= $i; ?>"><i class="fa fas fa-trash"></i>Hapus</a>
                                        </td>
                                        <!-- modal -->
                                        <!-- edit -->
                                        <div class="modal fade" id="edit<?= $i; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Kategori</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="<?= base_url('admin/category/edit_cat/') . $cat['id_cat']; ?>" method="post">
                                                        <div class="modal-body">
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon1">NAMA</span>
                                                                </div>
                                                                <input type="text" name="nama_cat" class="form-control" value='<?= $cat['nama_cat']; ?>' aria-label="Kategori" aria-describedby="basic-addon1">
                                                            </div>
                                                            <div class="input-group mb-3">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text" id="basic-addon2">SLUG</span>
                                                                </div>
                                                                <input type="text" name="slug_cat" class="form-control" value='<?= $cat['slug_cat']; ?>' aria-label="Slug" aria-describedby="basic-addon2">
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-primary">Edit</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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
                                                        <p>Anda Yakin Akan Menghapus Kategori <?= $cat['nama_cat']; ?></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <a href="<?= base_url('admin/category/hapus_cat/') . $cat['id_cat']; ?>" class="btn btn-primary">Ya, Saya Yakin</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- hapus -->
                    <div class="modal fade" id="tambahCat" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah Kategori</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?= base_url('admin/category/add_cat'); ?>" method="post">
                                    <div class="modal-body">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">NAMA</span>
                                            </div>
                                            <input type="text" name="nama_cat" class="form-control" placeholder="Masukan Nama Kategori" aria-label="Kategori" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Tambah</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->