<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit User</h1>
    </div>
    <p class="mb-4">Edit User</p>
    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 text-black">Edit User</h6>
                </div>
                <div class="card-body">
                    <?= form_open_multipart('admin/user/edit_user/' . $userr['id_user']); ?>
                    <input type="checkbox" value="1" name="level" <?= $userr['id_level'] == (1) ? 'checked' : ''; ?>> Admin?
                    <div class="input-group mb-3 row">
                        <div class="col-sm-12 col-md-4">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $userr['nama']; ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" id="username" value="<?= $userr['username']; ?>">
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="col-sm-12 col-md-4">
                            <label for="email">Alamat Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="<?= $userr['email']; ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="input-group mb-3 row">
                        <div class="col-sm-12 col-md-4">
                            <label for="profesi">Profesi</label>
                            <input type="text" name="profesi" class="form-control" id="profesi" value="<?= $userr['profesi']; ?>">
                            <?= form_error('profesi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="kategori">Kategori Anggota</label>
                            <select name="kategori" class="form-control inputan">
                                <option value="">--Pilih Salah Satu--</option>
                                <option value="Anggota" <?= $userr['kategori'] == ('Anggota') ? 'selected' : ''; ?>>Anggota</option>
                                <option value="Komunitas" <?= $userr['kategori'] == ('Komunitas') ? 'selected' : ''; ?>>Komunitas</option>
                                <option value="Studio" <?= $userr['kategori'] == ('Studio') ? 'selected' : ''; ?>>Studio</option>
                                <option value="Lembaga Pendidikan" <?= $userr['kategori'] == ('Lembaga Pendidikan') ? 'selected' : ''; ?>>Lembaga Pendidikan</option>
                            </select>
                            <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="upload">Foto Profil</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="uploadd" name="gambar">
                                <label class="custom-file-label" for="uploadd"><?= $userr['foto']; ?></label>
                            </div>
                            <input type="hidden" class="custom-file-input" name="old_image" value="<?= $userr['foto']; ?>">

                        </div>
                    </div>
                    <b class="mb-3">Kontak/Sosial Media</b>
                    <div class="input-group mb-3 row">
                        <div class="col-sm-6 col-md-3">
                            <label for="telepon">Telepon</label>
                            <input type="number" name="telepon" class="form-control" id="telepon" value="<?= $userr['telepon']; ?>">
                            <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <label for="telepon">Website</label>
                            <input type="text" name="telepon" class="form-control" id="website" value="<?= $userr['website']; ?>">
                            <?= form_error('website', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <label for="ig">Instagram</label>
                            <input type="text" name="ig" class="form-control" id="ig" value="<?= $userr['ig']; ?>" placeholder="Username Akun Instagram (tanpa @)">
                            <?= form_error('ig', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <label for="fb">Facebook</label>
                            <input type="text" name="fb" class="form-control" id="fb" value="<?= $userr['fb']; ?>" placeholder="Username Akun Facebook">
                            <?= form_error('fb', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <b class="mb-3">Narahubung</b>
                    <div class="input-group mb-3 row">
                        <div class="col-sm-12 col-md-6">
                            <label for="narahubung">Nama Narahubung</label>
                            <input type="text" name="narahubung" class="form-control" id="narahubung" value="<?= $userr['narahubung']; ?>">
                            <?= form_error('narahubung', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="kontak_narahubung">Kontak Narahubung</label>
                            <input type="number" name="kontak_narahubung" class="form-control" id="kontak_narahubung" value="<?= $userr['kontak_narahubung']; ?>">
                            <?= form_error('kontak_narahubung', '<small class="text-danger pl-3">', '</small>'); ?>
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