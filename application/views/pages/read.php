<!-- content -->

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 py-4">

                <div class="card latest-card mb-2">
                    <div class="row no-gutters align-items-center">
                        <div class="col-12">
                            <div class="container">

                                <button href="#" class="btn-tag-<?= $artikel->kategori; ?> mt-3 ml-1"><?= $namaKategori; ?></button>

                                <h1 class="text-center font-weight-bold"><?= $artikel->judul_artikel; ?></h1>

                                <p class="text-center">Oleh : <?= $artikel->penulis; ?> | <?= hari_tgl_indo($artikel->tanggal_publikasi); ?> | <i class="fa fa-eye" aria-hidden="true"></i> <?= $artikel->views; ?> </p>

                                <div class="wrapper-img-artikel">
                                    <img class="img-artikel" src="<?= base_url('assets/img/upload/artikel/' . $artikel->gambar); ?>" alt="Responsive image">
                                </div>
                                <?= $artikel->isi_artikel; ?>
                                <div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="no-gutters mt-5">

                    <h3 class="font-weight-bold text-white">Artikel Terkait</h3>

                    <div class="col-12">
                        <div class="row">

                            <?php foreach ($suggested as $sugg) :  ?>
                                <div class="col-6 col-lg-3">
                                    <div class="card mb-2">
                                        <div class="row no-gutters">
                                            <a style="text-decoration: none;" href="<?= base_url('read/' . $sugg['slug_artikel']); ?>">
                                                <img src="<?= base_url('assets/img/upload/artikel/' . $sugg['gambar']); ?>" class="img-fluid" />
                                                <h5 class="card-title card-popular-title mt-2 font-weight-bold">
                                                    <?= $sugg['judul_artikel']; ?>
                                                </h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-12 col-lg-4 py-4">
                <?= $sidebar; ?>
            </div>
        </div>
    </div>
</section>
<!-- endof content -->