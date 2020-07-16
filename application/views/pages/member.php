    <!-- content -->

    <section class="content">
        <div class="container">
            <h1 class="text-center text-white mt-4 font-weight-bold">Anggota</h1>

            <div class="col-12 text-white mb-5">

                <div class="accordion" id="Studio">
                    <h4 class="mb-0">
                        <a class="text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Studio <i class=" ml-2 fa fa-angle-down"></i>
                        </a>
                    </h4>
                </div>

                <div id="collapseOne" class="collapse show" data-parent="#Studio">
                    <div class="card-body">
                        <div class="row">
                            <?php foreach ($memStudio as $std) : ?>
                                <div class="col-12 col-md-6 col-lg-3 text-center">
                                    <img width="150px" height="150px" src="<?= base_url('assets/img/upload/profile/' . $std['foto']); ?>" class="rounded-circle bg-white">
                                    <h5 class="mt-2"><?= $std['nama']; ?></h5>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 text-white mb-5">

                <div class="accordion" id="Studio">
                    <h4 class="mb-0">
                        <a class="text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Lembaga Pendidikan <i class=" ml-2 fa fa-angle-down"></i>
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="collapse show" data-parent="#Studio">
                    <div class="card-body">
                        <div class="row">
                            <?php foreach ($memLPK as $lpk) : ?>
                                <div class="col-12 col-md-6 col-lg-3 text-center">
                                    <img width="150px" height="150px" src="<?= base_url('assets/img/upload/profile/' . $lpk['foto']); ?>" class=" bg-white rounded-circle">
                                    <a style="text-decoration:none;color:white;" href="<?= base_url('pages/profil/' . $lpk['username']); ?>">
                                        <h5 class="mt-2"><?= $lpk['nama']; ?></h5>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 text-white mb-5">

                <div class="accordion" id="Studio">
                    <h4 class="mb-0">
                        <a class="text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            Komunitas <i class=" ml-2 fa fa-angle-down"></i>
                        </a>
                    </h4>
                </div>

                <div id="collapseThree" class="collapse show" data-parent="#Studio">
                    <div class="card-body">
                        <div class="row">
                            <?php foreach ($memKomun as $com) : ?>
                                <div class="col-12 col-md-6 col-lg-3 text-center">
                                    <img width="150px" height="150px" src="<?= base_url('assets/img/upload/profile/' . $com['foto']); ?>" class=" bg-white rounded-circle">
                                    <a style="text-decoration:none;color:white;" href="<?= base_url('pages/profil/' . $com['username']); ?>">
                                        <h5 class="mt-2"><?= $com['nama']; ?></h5>
                                    </a>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 text-white mb-5">

                <div class="accordion" id="Studio">
                    <h4 class="mb-0">
                        <a class="text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            Anggota <i class=" ml-2 fa fa-angle-down"></i>
                        </a>
                    </h4>
                </div>

                <div id="collapseFour" class="collapse show" data-parent="#Studio">
                    <div class="card-body">
                        <div class="row">

                            <?php foreach ($memAnggota as $ang) : ?>
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="row mb-2">
                                        <a style="text-decoration:none;color:white;" href="<?= base_url('pages/profil/' . $ang['username']); ?>">
                                            <div class="col-auto">
                                                <img width="75px" height="75px" src="<?= base_url('assets/img/upload/profile/' . $ang['foto']); ?>" class="bg-white rounded-circle">
                                            </div>

                                            <div class="col mt-2">
                                                <h5 class="font-weight-bold"><?= $ang['nama']; ?></h5>
                                                <p><?= $ang['profesi'] ?></p>
                                        </a>
                                    </div>
                                </div>
                        </div>
                    <?php endforeach; ?>

                    </div>
                </div>
            </div>

        </div>

        </div>
    </section>
    <!-- endof content -->