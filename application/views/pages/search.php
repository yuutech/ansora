<section class="content">
    <div class="container">

        <div class="box mt-5 mb-4">
            <div class="row wrapper-box">
                <div class="dot-tag-cari"></div>
            </div>
            <h1 class="header-karier font-weight-bold mt-1 ml-2">Pencarian</h1>
        </div>

        <div class="row">
            <div class="col-12 col-lg-8 pb-4">

                <div class="row text-white">
                    <div class="col-6">
                        <h5 class="font-weight-bold"> <?= $total; ?> Hasil pencarian ditemukan untuk '<?= $keyword; ?>'</h5>
                    </div>
                    <div class="col-6">

                        <form class="float-right">

                            <div class="form-group row">
                                <label class="col-auto col-form-label font-weight-bold">Urut Berdasar</label>
                                <div class="col">
                                    <select style="border-radius: 15px" class="form-control">
                                        <option>Tanggal</option>
                                    </select>
                                </div>
                            </div>

                        </form>


                    </div>
                </div>
                <?php foreach ($resultArticle as $src) : ?>
                    <div class="card latest-card mb-2">
                        <div class="row no-gutters align-items-center">
                            <div class="col-12 col-md-4 latest-thumb-img">
                                <img src="<?= base_url(); ?>assets/img/upload/artikel/<?= $src['gambar']; ?>" class="img-fluid" />
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="container">
                                    <h4 class="card-title card-content-title mt-3"><a style="text-decoration:none;" href="<?= base_url('read/' . $src['slug_artikel']); ?>"><?= $src['judul_artikel']; ?></a></h4>
                                    <div class="date-post mt-4"><?= date('H:i', strtotime($src['jam_publikasi'])); ?> <?= tgl_indo($src['tanggal_publikasi']); ?></div>
                                    <form action="<?= base_url('kategori/' . $src['kategori']); ?>">
                                        <button class="btn-tag-<?= $src['kategori']; ?> mb-4"><?= getCategoryNameBySlug($src['kategori']); ?></button>
                                    </form>
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