<section>
    <div class="paralax">
        <div class="row">
            <div class="col-md-4 side-login">
                <div class="container mb-4">
                    <div class="text-white text-right mt-3">
                        <a class="text-white" href="<?= base_url(); ?>"><i class="fa fa-angle-left mt-2"></i> Kembali</a>
                    </div>
                    <div class="text-white mt-3">
                        <h1 class="text-right font-weight-bold">Selamat Datang <br>Kembali!</h1>
                        <img src="<?= base_url(); ?>assets/img/rocket_login.png" class="img-fluid rocket-login">
                    </div>
                </div>
            </div>
            <div class="col-md-7 offset-md-1 mt-5">
                <div class="container">

                    <div class="row">
                        <div class="col-md-7 mb-5">
                            <img src="<?= base_url(); ?>assets/img/ansora_logo.png" class="mb-3 img-fluid logo-login">
                            <?= $this->session->flashdata('message'); ?>

                            <form action="<?= base_url('auth/index'); ?>" method="post">
                                <div class="form-group">
                                    <label for="username">Username atau Email</label>
                                    <input type="text" class="form-control inputan" id="username" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="pass">Password</label> <small class="float-right font-weight-bold mt-2"><a href="">lupa password ?</a></small>
                                    <input type="password" class="form-control inputan" id="pass" name="password">
                                </div>
                                <div class="form-check mb-2">
                                    <input type="checkbox" class="form-check-input" id="tetap">
                                    <label class="form-check-label" for="tetap">Tetap Masuk</label>
                                </div>
                                <button type="submit" class="btn-login">Masuk</button>
                                <div class="mt-3">
                                    <small class="font-weight-bold mt-2">Belum menjadi anggota? <a href="<?= base_url('auth/register'); ?>">Gabung Sekarang</a></small>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>