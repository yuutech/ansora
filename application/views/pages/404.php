<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/app.css" />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet" />
    <title>Ansora</title>

    <style>
        body {
            background-image: url("<?= base_url(); ?>assets/img/bgerror.png");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .allcenter {
            margin-top: 180px;
        }

        @media only screen and (max-width: 1000px) {
            .allcenter {
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="se-pre-con"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-8 offset-lg-2">
                <div class="row allcenter align-items-center">
                    <div class="col-md-6">
                        <img src="<?= base_url(); ?>assets\img\e404.png" class="img-fluid">
                    </div>
                    <div class="col-md-6 text-white">
                        <h3 class="font-weight-bold">Sepertinya ada masalah</h3>
                        <p>
                            Coba cek Beranda ANSORA<br>
                            atau cari sesuatu
                        </p>
                        <div>
                            <form onsubmit="event.preventDefault();" class="cari-form">
                                <input id="cari" type="text" class="cari-input" placeholder="Cari..." />
                                <button class="cari-button">Cari</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
    </div>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script src="<?= base_url(); ?>assets/js/app.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>

</html>