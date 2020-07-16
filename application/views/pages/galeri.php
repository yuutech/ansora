    <!-- content -->

    <div class="container">

        <h1 class="text-center text-white mt-4 font-weight-bold">Galeri ANSORA</h1>

        <div class="col-12 text-white my-5">

            <div class="row">
                <?php for ($x = 1; $x <= 8; $x++) { ?>
                    <div class="col-12 col-md-6 col-lg-3 mb-4">

                        <div class="card" style="background-color:#E5F4FE; border-radius:10px">
                            <div class="image-portfolio">
                                <img class="card-img-top" height="150px" src="<?= base_url(); ?>assets/img/content/anggota/anemone.JPG">
                            </div>
                            <div class="card-title">
                                <div class="container">
                                    <p class="font-weight-bold" style="color:#000;padding: 5px 0; margin-bottom:-10px">
                                        Creative Sharing "Mengelola Studio"
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php } ?>
            </div>

        </div>


        <div class="row mb-4">

            <div class="col-12 col-lg-4">
                <div class="card text-white side-card mb-2">
                    <div class="row no-gutters align-items-center">
                        <div class="container">
                            <h4 class="card-title font-weight-bold mt-2">
                                Menjadi Anggota
                            </h4>
                            <p>Ayo ikut berkembang dan mengembangkan industri animasi lokal bersama ANSORA</p>
                            <form action="<?= base_url('auth/register'); ?>">
                                <button class="btn-side">Gabung ANSORA</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="card text-white side-card mb-2">
                    <div class="row no-gutters align-items-center">
                        <div class="container">
                            <h4 class="card-title font-weight-bold mt-2">
                                Tanya ANSORA
                            </h4>
                            <p>Ada pertanyaan seputar animasi dan industri animasi? Jangan ragu tanya kami</p>
                            <form action="<?= base_url('tanya'); ?>">
                                <button class="btn-side">Tanya ANSORA</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 col-lg-4">
                <div class="card text-white side-card mb-2">
                    <div class="row no-gutters align-items-center">
                        <div class="container">
                            <h4 class="card-title font-weight-bold mt-2">
                                Masukan dan Saran
                            </h4>
                            <p>Bantu ANSORA menjadi lebih baik dengan memberi masukan dan saran</p>
                            <form action="<?= base_url('saran'); ?>">
                                <button class="btn-side">Beri Saran</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- endof content -->