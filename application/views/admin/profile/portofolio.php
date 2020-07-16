<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Portofolio</h1>
    </div>
    <p class="mb-4">Daftar Portofolio</p>

    <?= $this->session->flashdata('message') ?>
    <a href="" class="btn btn-primary mb-4" data-toggle="modal" data-target="#tambah">Tambah Portofolio</a>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 text-black">Daftar Portofolio</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>

                                    <th style="width: 5%;">No.</th>
                                    <th style="width: 15%;">Portofolio</th>
                                    <th>Nama Portofolio</th>
                                    <th style="width: 20%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($portofolio as $pfl) :
                                ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><img class="img-fluid" src="<?= base_url('assets/img/upload/portofolio/') . $pfl['file']; ?>" alt=""></td>
                                        <td><?= $pfl['nama_portofolio']; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $i; ?>"><i class="fa fas fa-edit"></i> Edit</a>
                                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?= $i; ?>"><i class="fa fas fa-trash"></i> Hapus</a>
                                        </td>
                                        <!-- modal -->

                                        <!-- edit -->
                                        <div class="modal fade" id="edit<?= $i; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Ubah Portofolio <b><?= $pfl['nama_portofolio']; ?></b></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <?= form_open_multipart('admin/profile/edit_portofolio/' . $pfl['id_portofolio']); ?>
                                                    <div class="modal-body">
                                                        <div class="input-group mb-3 row">
                                                            <div class="col-sm-12">
                                                                <label for="nama_portofolio">Nama Portofolio</label>
                                                                <input type="text" name="nama_portofolio" class="form-control" id="nama_portofolio" value="<?= $pfl['nama_portofolio']; ?>">
                                                                <?= form_error('nama_portofolio', '<small class="text-danger pl-3">', '</small>'); ?>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <label for="upload">Portofolio</label>
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="uploadd" name="gambar" value="<?= $pfl['file']; ?>">
                                                                    <label class="custom-file-label" for="uploadd"><?= $pfl['file']; ?></label>
                                                                </div>
                                                                <input type="hidden" name="old_image" value="<?= $pfl['file']; ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Ubah</button>
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
                                                        <p>Anda Yakin Akan Menghapus Portofolio <b><?= $pfl['nama_portofolio']; ?></b> Secara Permanen?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <a href="<?= base_url('admin/profile/hapus_portofolio/') . $pfl['id_portofolio']; ?>" class="btn btn-primary">Ya, Saya Yakin</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- tambah -->
                    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah Portofolio</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?= form_open_multipart('admin/profile/tambah_portofolio'); ?>
                                <div class="modal-body">
                                    <div class="input-group mb-3 row">
                                        <div class="col-sm-12">
                                            <label for="nama_portofolio">Nama Portofolio</label>
                                            <input type="text" name="nama_portofolio" class="form-control" id="nama_portofolio" value="<?= set_value('nama_portofolio'); ?>">
                                            <?= form_error('nama_portofolio', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-sm-12">
                                            <label for="upload">Portofolio</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="uploadd" name="gambar" value="<?= set_value('gambar'); ?>">
                                                <label class="custom-file-label" for="uploadd">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
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