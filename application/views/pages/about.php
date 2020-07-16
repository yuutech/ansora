<style>
    .about1 {
        background-color: #244991;
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
    }

    .about2 {
        background-color: #244991;
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
    }
</style>

<!-- content -->

<h3 class="font-weight-bold text-center text-white py-3">
    Tentang Kami
</h3>

<div class="row d-flex align-items-center mb-5">

    <div class="col-md-5 logo-about text-center">
        <img src="<?= base_url(); ?>assets/img/logoprofile.png" class="img-fluid rounded-circle">

    </div>
    <div class="col-md-7">
        <div class="card about1" style="margin-left:20px">
            <div class="card-body text-white">
                <p>Kami adalah komunitas animasi yang berbasis di area Solo Raya. Di tengah perkembangan industri animasi Indonesia kami berharap dengan kehadiran kami dapat menstimulus agar industri animasi lokal terutama di sekitar Solo Raya lebih cepat berkembang.</p>
                <p>Kami dengan hangat menyambut berbagai pihak yang memiliki kepedulian terhadap perkembangan animasi lokal, baik itu studio animasi, komunitas lain, lembaga pendidikan dan pelatihan serta individu baik profesional maupun penggemar.</p>
                <p>Mari bersama kita mengembangkan dan berkembang bersama industri animasi!</p>
            </div>
        </div>
    </div>

</div>

<div class="row d-flex align-items-center mb-5">

    <div class="col-md-7">
        <div class="card about2" style="margin-right:20px">
            <div class="card-body text-white">
                <h3 class="font-weight-bold text-uppercase">Visi</h3>
                <p>Mewujudkan industri animasi menjadi salah satu ikon ekonomi kreatif di kota Solo</p>
                <h3 class="font-weight-bold text-uppercase mt-4">Misi</h3>
                <ul style="margin-left: -20px">
                    <li>Menjadi pusat informasi tentang industri animsai di Solo Raya</li>
                    <li>Menjadi sinergitas antara praktisi, akademisi dan industri animasi</li>
                    <li>Mendorong dan menciptakan wirausaha baru animasi.</li>
                </ul>
            </div>
        </div>
    </div>

</div>

<div class="row d-flex align-items-center mb-2">

    <div class="col-md-7 offset-md-5">
        <div class="card about1" style="margin-left:20px">
            <div class="card-body text-white">

                <h3 class="font-weight-bold">Hubungi Kami</h3>
                <p>
                    Perumahan Ngringo Indah<br>
                    Jl. Gatotkaca A1/27, Ngringo, Jaten<br>
                    Karanganyar, Jawa Tengah<br>
                    57731
                </p>
                <table class="mb-3 ml-4">
                    <tr>
                        <td><img src="<?= base_url(); ?>assets/img/phone.png"></td>
                        <td>
                            <p class="mt-3 ml-2 font-weight-bold">+62 878 3661 2099</p>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="<?= base_url(); ?>assets/img/mail.png"></td>
                        <td>
                            <p class="mt-3 ml-2 font-weight-bold">+62 878 3661 2099</p>
                        </td>
                    </tr>
                </table>
                <div>
                    <img src="<?= base_url(); ?>assets/img/wa.svg">
                    <img src="<?= base_url(); ?>assets/img/fb.svg">
                    <img src="<?= base_url(); ?>assets/img/ig.svg">
                </div>

            </div>
        </div>

        <div class="container mt-4">
            <a href="<?= base_url(); ?>pages/member"><button class="btn-about mr-2 text-uppercase">Anggota Kami</button></a>
            <a href="<?= base_url(); ?>pages/galeri"><button class="btn-about text-uppercase">Galeri</button></a>
        </div>
    </div>

</div>

<div class="container">
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