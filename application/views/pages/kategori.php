    <!-- content -->

    <section class="content">
        <div class="container">

            <div class="box mt-4 mb-4">
                <div class="row wrapper-box">
                    <div class="dot-tag-<?= $cat; ?>"></div>
                </div>
                <h1 class="header-<?= $cat; ?> font-weight-bold mt-1 ml-2"><?= $namaKategori; ?></h1>
            </div>

            <div class="row">
                <div class="col-12 col-lg-8 pb-4">
                    <?php foreach ($listArtikel as $arc) : ?>
                        <div class="card latest-card mb-2">
                            <div class="row no-gutters align-items-center">
                                <div class="col-12 col-md-4 latest-thumb-img">
                                    <img src="<?= base_url('assets/img/upload/artikel/' . $arc['gambar']); ?>" class="img-fluid" />
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="container">
                                        <h4 class="card-title card-content-title mt-3"><a style="text-decoration: none;" href=<?= base_url('read/' . $arc['slug_artikel']); ?>><?= $arc['judul_artikel']; ?></a></h4>
                                        <div class="date-post mt-4"><?= $arc['jam_publikasi'] . ' ' . $arc['tanggal_publikasi']; ?></div>
                                        <button href="#" class="btn-tag-<?= $cat; ?> mb-4"><?= $namaKategori; ?></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <?= $pagination; ?>
                </div>

                <div class="col-12 col-lg-4 pb-4">
                    <?= $sidebar; ?>
                </div>
            </div>
        </div>
    </section>