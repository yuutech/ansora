<section class="menu-bottom">
    <div class="container pb-4">
        <div class="row">
            <div class="col-lg-2 mt-3">
                <img width="145px" height="115px" src="<?= base_url(); ?>assets/img/logo.png" alt="" />
            </div>
            <div class="col-lg-4 mt-4 text-white">
                <h4 class="font-weight-bold">Kunjungi Kami</h4>
                <p class="text-white-50">
                    <br />
                    Perumahan Ngringo Indah<br />
                    Jl. Gatotkaca A1/27, Ngringo, Jaten<br />
                    Karanganyar, Jawa Tengah<br />
                    57731
                </p>
                <p class="text-white-50">
                    Telpon: <span class="text-white">+62 878 3661 2099</span> <br />
                    E-mail: <span class="text-white">halo@ansora.id</span>
                </p>
                <div>
                    <img class="mr-2" src="<?= base_url(); ?>assets/img/wa.svg" alt="WA" />
                    <img class="mr-2" src="<?= base_url(); ?>assets/img/fb.svg" alt="FB" />
                    <img src="<?= base_url(); ?>assets/img/ig.svg" alt="IG" />
                </div>
            </div>
            <div class="col-lg-3 mt-4 text-white">
                <h4 class="font-weight-bold">Tentang Kami</h4>
                <br />
                <div class="about">
                    <p><a href="<?= base_url('about'); ?>">Profil</a></p>
                    <p><a href="<?= base_url('about'); ?>">Visi & Misi</a></p>
                    <p><a href="<?= base_url('member'); ?>">Anggota</a></p>
                    <p><a href="<?= base_url(); ?>pages/galeri">Galeri</a></p>
                </div>
            </div>
            <div class="col-lg-3 mt-4 text-white">
                <h4 class="font-weight-bold">Lainnya</h4>
                <br />
                <div class="about">
                    <p><a href="<?= base_url('terms'); ?>">Syarat & Ketentuan</a></p>
                    <p><a href="<?= base_url('terms'); ?>">Kebijakan Privacy</a></p>
                    <p><a href="<?= base_url('terms'); ?>">FAQ</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="text-center"><strong>© Copyright ANSORA 2020</strong></div>
</footer>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

<script src="<?= base_url(); ?>assets/js/app.js"></script>
<script>
    
$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
</script>
</html>