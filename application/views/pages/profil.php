<style>
    .about1 {
        background-color: #244991;
        border-radius: 20px;
        border-radius: 20px;
    }
</style>

<!-- content -->

<div class="container">

    <div class="row py-4">

        <div class="col-md-3 logo-about text-center">
            <img style="width: 255px;height:255px;" src="<?= base_url("assets/img/upload/profile/" . $data_user->foto); ?>" class="img-fluid rounded-circle bg-white">
        </div>

        <div class="col-md-9">
            <div class="card about1">
                <div class="card-body text-white">
                    <h1 class="font-weight-bold"><?= $data_user->nama; ?></h1>
                    <p class="text-uppercase"><?= $data_user->kategori; ?></p>
                    <ul style="list-style-type: none;padding-left:0;">
                        <li>Email : <?= $data_user->email; ?></li>
                        <li>Telepon :
                            <?= ($data_user->telepon !== NULL) ? $data_user->telepon : '<i>(Data tidak tersedia)</i>'; ?>
                        </li>
                        <li>Website :
                            <?php if ($data_user->website !== NULL) {  ?>
                                <a href="<?= $data_user->website; ?>"> <?= $data_user->website; ?></a>
                            <?php } else {
                                echo '<i>(Data tidak tersedia)</i>';
                            } ?></li>
                        <li>Sosial Media</li>
                        <?php if ($data_user->fb !== NULL) { ?>
                            <a href="https://www.facebook.com/<?= $data_user->fb; ?>"><img class="mt-2 mr-2" src="<?= base_url(); ?>assets/img/fb.svg" alt="FB" /></a>
                        <?php } ?>
                        <?php if ($data_user->ig !== NULL) { ?>
                            <a href="https://www.instagram.com/<?= $data_user->ig; ?>"><img class="mt-2" src="<?= base_url(); ?>assets/img/ig.svg" alt="IG" /></a>
                        <?php } ?>

                    </ul>
                    <p><?= $data_user->info; ?></p>
                </div>
            </div>
        </div>

    </div>

    <div class="col-12 text-white mb-5">

        <div class="accordion" id="Studio">
            <h4 class="mb-0">
                <a class="text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Portofolio <i class=" ml-2 fa fa-angle-down"></i>
                </a>
            </h4>
        </div>

        <div id="collapseOne" class="collapse show" data-parent="#Studio">
            <div class="card-body">
                <div class="row">
                    <?php foreach ($portofolio as $pf) : ?>
                        <div class="col-12 col-md-6 col-lg-3 mb-3">

                            <div class="card">
                                <div class="image-portfolio">
                                    <img class="card-img-top" height="150px" src="<?= base_url("assets/img/upload/portofolio/" . $pf['file']); ?>">
                                </div>
                                <div class="card-title">
                                    <div class="container">
                                        <h5 style="color:#000;padding: 5px 0; margin-bottom:-10px">
                                            <?= $pf['nama_portofolio']; ?>
                                        </h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="accordion" id="Studio">
            <h4 class="mb-0">
                <a class="text-white font-weight-bold" type="button">
                    Anggota Lainnya</i>
                </a>
            </h4>
        </div>

        <div>
            <div class="card-body">
                <div class="row">

                    <?php foreach ($rec_user as $rec) : ?>
                        <div class="col-12 col-md-6 col-lg-3 mb-2">
                            <div class="text-center">
                                <img width="75px" height="75px" src="<?= base_url('assets/img/upload/profile/' . $rec['foto']); ?>" class="bg-white rounded-circle">
                                <h5 class="font-weight-bold"><?= $rec['nama']; ?></h5>
                                <p><?= $rec['profesi']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>



                </div>
            </div>
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
                        <button class="btn-side">Gabung ANSORA</button>
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
                        <button class="btn-side">Gabung ANSORA</button>
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
                        <button class="btn-side">Gabung ANSORA</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- endof content -->