<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit User</h1>
    </div>
    <p class="mb-4">Edit User</p>

    <?= $this->session->flashdata('message') ?>
    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 text-black">Edit User</h6>
                </div>
                <div class="card-body">
                    <?= form_open_multipart('admin/profile/index'); ?>
                    <div class="input-group mb-3 row">
                        <div class="col-sm-12 col-md-4">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $profile['nama']; ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" id="username" value="<?= $profile['username']; ?>">
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="col-sm-12 col-md-4">
                            <label for="email">Alamat Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="<?= $profile['email']; ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="input-group mb-3 row">
                        <div class="col-sm-12 col-md-4">
                            <label for="profesi">Profesi</label>
                            <input type="text" name="profesi" class="form-control" id="profesi" value="<?= $profile['profesi']; ?>">
                            <?= form_error('profesi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="kategori">Kategori Anggota</label>
                            <select name="kategori" class="form-control inputan">
                                <option value="">--Pilih Salah Satu--</option>
                                <option value="Anggota" <?= $profile['kategori'] == ('Anggota') ? 'selected' : ''; ?>>Anggota</option>
                                <option value="Komunitas" <?= $profile['kategori'] == ('Komunitas') ? 'selected' : ''; ?>>Komunitas</option>
                                <option value="Studio" <?= $profile['kategori'] == ('Studio') ? 'selected' : ''; ?>>Studio</option>
                                <option value="Lembaga Pendidikan" <?= $profile['kategori'] == ('Lembaga Pendidikan') ? 'selected' : ''; ?>>Lembaga Pendidikan</option>
                            </select>
                            <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="upload">Foto Profil</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="uploadd" name="gambar">
                                <label class="custom-file-label" for="uploadd"><?= $profile['foto']; ?></label>
                            </div>
                            <input type="hidden" class="custom-file-input" name="old_image" value="<?= $profile['foto']; ?>">

                        </div>
                    </div>
                    <b class="mb-3">Kontak/Sosial Media</b>
                    <div class="input-group mb-3 row">

                        <div class="col-sm-6 col-md-3">
                            <label for="telepon">Telepon</label>
                            <input type="number" name="telepon" class="form-control" id="telepon" value="<?= $profile['telepon']; ?>">
                            <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <label for="telepon">Website</label>
                            <input type="text" name="telepon" class="form-control" id="website" value="<?= $profile['website']; ?>">
                            <?= form_error('website', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <label for="ig">Instagram</label>
                            <input type="text" name="ig" class="form-control" id="ig" value="<?= $profile['ig']; ?>" placeholder="Username Akun Instagram (tanpa @)">
                            <?= form_error('ig', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <label for="fb">Facebook</label>
                            <input type="text" name="fb" class="form-control" id="fb" value="<?= $profile['fb']; ?>" placeholder="Username Akun Facebook">
                            <?= form_error('fb', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-12 col-md-7">

                            <label for="info">Info Member</label>
                            <textarea class="form-control" name="info" id="info" cols="30" rows="5"><?= $profile['info']; ?></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Kirim</button>
                    <button type="button" class="btn btn-secondary mt-4">Batal</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->