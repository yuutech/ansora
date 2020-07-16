<link rel="stylesheet" href="<?= base_url(); ?>assets/css/login.css" />
<style>
    .paralax-image {
        background-image: url("<?= base_url(); ?>assets/img/bg-register.png");
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>


<!-- content -->

<div class="paralax-image">
    <div class="container py-4">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 offset-md-3 offset-lg-4">

                <h1 class="font-weight-bold">Bergabung <br>Dengan ANSORA!</h1>
                <?= $this->session->flashdata('message') ?>

                <form class="mt-4" action="<?= base_url('auth/register'); ?>" method="post">

                    <h5 class="font-weight-bold">Informasi Akun</h5>
                    <div class="form-group">
                        <label for="username">Nama Pengguna</label>
                        <input name="username" type="text" class="form-control inputan" id="username" value="<?= set_value('username'); ?>">
                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class=" form-group">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control inputan" id="email" value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class=" form-group">
                        <label for="pass">Kata Sandi</label>
                        <input name="pass" type="password" class="form-control inputan" id="pass">
                        <?= form_error('pass', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="rpass">Konfirmasi Kata Sandi</label>
                        <input name="rpass" type="password" class="form-control inputan" id="rpass">
                    </div>

                    <h5 class="font-weight-bold mt-4 ">Informasi Akun</h5>
                    <div class="col-sm-12 col-md-6">
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
                    <div class="form-group">
                        <label for="nama">Nama Anggota</label>
                        <input type="text" class="form-control inputan" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class=" form-group">
                        <label for="narahubung">Nama Narahubung</label>
                        <input type="text" class="form-control inputan" id="narahubung" name="narahubung" value="<?= set_value('narahubung'); ?>">
                        <?= form_error('narahubung', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class=" form-group">
                        <label for="kontak_narahubung">Nomor WA Narahubung</label>
                        <input type="number" class="form-control inputan" id="kontak_narahubung" name="kontak_narahubung" value="<?= set_value('kontak_narahubung'); ?>">
                        <?= form_error('kontak_narahubung', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class=" form-group">
                        <small>
                            Dengan klik tombol DAFTAR saya menyetujui syarat dan
                            ketentuan menjadi anggota ANSORA. <a class="font-weight-bold" href="">Lihat syarat dan
                                ketentuan di sini</a>
                        </small>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn-login">Daftar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<!-- endof content -->