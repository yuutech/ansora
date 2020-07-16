<div class="row">
    <div class="col-12">
        <h3 class="font-weight-light text-white">Popular</h3>
    </div>

    <?php foreach ($popular as $pop) : ?>
        <div class="col-12">
            <div class="card popular-card" style="margin-bottom:8px">
                <div class="row no-gutters">
                    <div class="col-5 popular-thumb-img">
                        <img src="<?= base_url('assets/img/upload/artikel/' . $pop['gambar']); ?>" class="img-fluid" />
                    </div>
                    <div class="col-7">
                        <div class="container">
                            <h4 class="card-title card-popular-title mt-3">
                                <a style="text-decoration: none;" href="<?= base_url('read/' . $pop['slug_artikel']); ?>">
                                    <?= $pop['judul_artikel']; ?></a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    <?php endforeach; ?>

    <div class="col-12">
        <div class="card text-white side-card1">
            <div class="row no-gutters mt-2">
                <div class="container">
                    <h4 class="card-title font-weight-bold">
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

    <div class="col-12">
        <div class="card text-white side-card">
            <div class="row no-gutters align-items-center">
                <div class="container">
                    <h4 class="card-title font-weight-bold">
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

    <div class="col-12">
        <div class="card text-white side-card">
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