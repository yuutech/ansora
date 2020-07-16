<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="texthero">
                    <h1 class="mt-3 mb-4">TETEP UPDATE BERSAMA ANSORA</h1>
                    <p>
                        Langganan newsletter ANSORA <br />dan dapatkan info paling
                        update <br />seputar animasi!
                    </p>
                    <div class="langganan">
                        <div>Pilih konten langganan</div>
                        <div>
                            <input class="dot-radio" type="radio" id="Berita" name="subscribe" />
                            <label class="mr-lg-4" for="Berita">Berita</label>

                            <input class="dot-radio" type="radio" id="Edukasi" name="subscribe" />
                            <label class="mr-lg-4" for="Edukasi">Edukasi</label>

                            <input class="dot-radio" type="radio" id="Resensi" name="subscribe" />
                            <label class="mr-lg-4" for="Resensi">Resensi</label>

                            <input class="dot-radio" type="radio" id="Karier" name="subscribe" />
                            <label class="mr-lg-4" for="Karier">Karier</label>
                        </div>
                        <div >
                            <!-- <form onsubmit="event.preventDefault();" class="langganan-form">
                                <label for="langganan" class="screen-reader-text">langganan</label>
                                <input id="langganan" type="text" class="langganan-input" placeholder="Masukkan Email..." />
                                <button class="langganan-button">Langganan</button>
                            </form> -->
                            <div id="1" class="search-box1">
                                <input class="search-txt1" type="text" placeholder="Masukkan Email..." />
                                <a type="submit" id="btnClick" class="search-btn1">
                                    Langganan
                                </a>
                            </div>
                            <div id="2" style="display: none;">
                                Thx
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <img class="rocket" src="<?= base_url(); ?>assets/img/cta_rocket.png" alt="" />
            </div>
        </div>
    </div>
</section>

<!-- content -->

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 py-4">
                <h3 class="font-weight-bold text-white">Terkini</h3>
                <?php foreach ($latest as $lat) : ?>
                    <div class="card latest-card mb-2">
                        <div class="row no-gutters align-items-center">
                            <div class="col-12 col-md-4 latest-thumb-img">
                                <img src="<?= base_url(); ?>assets/img/upload/artikel/<?= $lat['gambar']; ?>" class="img-fluid" />
                            </div>
                            <div class="col-12 col-md-8">
                                <div class="container">
                                    <h4 class="card-title card-content-title mt-3"><a style="text-decoration:none;" href="<?= base_url('read/' . $lat['slug_artikel']); ?>"><?= $lat['judul_artikel']; ?></a></h4>
                                    <div class="date-post mt-4"><?= date('H:i', strtotime($lat['jam_publikasi'])); ?> <?= tgl_indo($lat['tanggal_publikasi']); ?></div>
                                    <form action="<?= base_url('kategori/' . $lat['kategori']); ?>">
                                        <button class="btn-tag-<?= $lat['kategori']; ?> mb-4"><?= getCategoryNameBySlug($lat['kategori']); ?></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?= $pagination; ?>

            </div>

            <div class="col-12 col-lg-4 py-4">
                <?= $sidebar; ?>
            </div>

        </div>
    </div>
</section>

<!-- endof content -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	$("#btnClick").on("click", function () {
		if ($("#1").css("display") != "none") {
			$("#2")
				.html("<div class='thx1'>Terimakasih sudah berlangganan</div>")
				.show()
				.siblings("div")
				.hide();
		} else if ($("#2").css("display") != "none") {
			$("#1").show().siblings("div").hide();
		}
	});
</script>