<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah User</h1>
    </div>
    <p class="mb-4">Buat User</p>
    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 text-black">Buat User</h6>
                </div>
                <div class="card-body">
                    <?= form_open_multipart('admin/user/tambah_user'); ?>
                    <input type="checkbox" value="1" name="level" <?= set_value('level') == (1) ? 'checked' : ''; ?>> Admin?
                    <div class="input-group mb-3 row">
                        <div class="col-sm-12 col-md-4">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= set_value('nama'); ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" id="username" value="<?= set_value('username'); ?>">
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="col-sm-12 col-md-4">
                            <label for="email">Alamat Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="input-group mb-3 row">
                        <div class="col-sm-12 col-md-4">
                            <label for="profesi">Profesi</label>
                            <input type="text" name="profesi" class="form-control" id="profesi" value="<?= set_value('profesi'); ?>">
                            <?= form_error('profesi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="kategori">Kategori Anggota</label>
                            <select name="kategori" class="form-control inputan">
                                <option value="">--Pilih Salah Satu--</option>
                                <option value="Anggota" <?= set_value('kategori') == ('Anggota') ? 'selected' : ''; ?>>Anggota</option>
                                <option value="Komunitas" <?= set_value('kategori') == ('Komunitas') ? 'selected' : ''; ?>>Komunitas</option>
                                <option value="Studio" <?= set_value('kategori') == ('Studio') ? 'selected' : ''; ?>>Studio</option>
                                <option value="Lembaga Pendidikan" <?= set_value('kategori') == ('Lembaga Pendidikan') ? 'selected' : ''; ?>>Lembaga Pendidikan</option>
                            </select>
                            <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <label for="upload">Foto Profil</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="uploadd" name="gambar" value="<?= set_value('gambar'); ?>">
                                <label class="custom-file-label" for="uploadd">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <b class="mb-3">Kontak/Sosial Media</b>
                    <div class="input-group mb-3 row">
                        <div class="col-sm-6 col-md-3">
                            <label for="telepon">Telepon</label>
                            <input type="number" name="telepon" class="form-control" id="telepon" value="<?= set_value('telepon'); ?>">
                            <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <label for="telepon">Website</label>
                            <input type="text" name="telepon" class="form-control" id="website" value="<?= set_value('website'); ?>">
                            <?= form_error('website', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <label for="ig">Instagram</label>
                            <input type="text" name="ig" class="form-control" id="ig" value="<?= set_value('ig'); ?>" placeholder="Username Akun Instagram (tanpa @)">
                            <?= form_error('ig', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <label for="fb">Facebook</label>
                            <input type="text" name="fb" class="form-control" id="fb" value="<?= set_value('fb'); ?>" placeholder="Username Akun Facebook">
                            <?= form_error('fb', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>



                    <b class="mb-3">Narahubung</b>
                    <div class="input-group mb-3 row">
                        <div class="col-sm-12 col-md-6">
                            <label for="narahubung">Nama Narahubung</label>
                            <input type="text" name="narahubung" class="form-control" id="narahubung" value="<?= set_value('narahubung'); ?>">
                            <?= form_error('narahubung', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <label for="kontak_narahubung">Kontak Narahubung</label>
                            <input type="number" name="kontak_narahubung" class="form-control" id="kontak_narahubung" value="<?= set_value('kontak_narahubung'); ?>">
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