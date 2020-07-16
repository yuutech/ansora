<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/app.css" />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?= $title; ?></title>
</head>

<body>
    <div class="se-pre-con"></div>
    <a href="#" id="scroll" style="display: none;"><span>
    <nav class="navbar navbar-expand-lg navbar-dark bg-ansora">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('index'); ?>">
                <img width="120px" height="96px" src="<?= base_url('assets/img/logo.png'); ?>" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="fas fa-bars" style="color:#b2dffe; font-size:24px;"></i>
            </button>
            <div class="row collapse navbar-collapse" id="navbarSupportedContent">
                <div class="col-12 col-lg-6 mb-1 menu-top">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="container-4">
                                <form action="<?= base_url('pages/search'); ?>" method="GET">
                                    <input name="keyword" type="search" id="search" placeholder="Search..." />
                                    <button class="icon"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <form action="<?= base_url('auth/index'); ?>">
                                <button class="btn-login">MASUK</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-12">
                    <div class="menu">
                        <ul class="navbar-nav">
                            <li class="nav-item align-self-center <?= $this->uri->segment(1)  == 'index' ? 'active' : ''; ?>">

                                <a class="nav-link " href="<?= base_url('index'); ?>">Beranda</a>
                            </li>
                            <li class="nav-item align-self-center <?= $this->uri->segment(2) == 'berita' ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?= base_url('kategori/berita'); ?>">Berita</a>
                            </li>
                            <li class="nav-item align-self-center <?= $this->uri->segment(2) == 'edukasi' ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?= base_url('kategori/edukasi'); ?>">Edukasi</a>
                            </li>
                            <li class="nav-item align-self-center <?= $this->uri->segment(2) == 'resensi' ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?= base_url('kategori/resensi'); ?>">Resensi</a>
                            </li>
                            <li class="nav-item align-self-center <?= $this->uri->segment(2) == 'karier' ? 'active' : ''; ?>">

                                <a class="nav-link" href="<?= base_url('kategori/karier'); ?>">Karier</a>
                            </li>
                            <li class="nav-item align-self-center <?= $this->uri->segment(1) == 'member' ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?= base_url('member'); ?>">Anggota</a>
                            </li>
                            <li class="nav-item align-self-center <?= $this->uri->segment(1) == 'about' ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?= base_url('about'); ?>">Tentang Kami</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>