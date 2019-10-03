<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home ISPA</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/costum.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/all.min.css">
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet" />

    <!-- CSS Lightbox -->
    <link href="<?= base_url(); ?>assets/css/lightbox.css" rel="stylesheet" />
</head>
<body>

    <!-- header -->
    <section id="header">
        <div class="container ">
            <nav class="navbar navbar-expand-lg navbar-light" style="background: none;">
                <a class="navbar-brand" href="#"><b><h2>ISPA </h2></b><br><small class="kecil">Inspeksi Saluran <br> Pernapasan Akut</small></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <b><a class="nav-link" href="<?= base_url('ispa'); ?>">Home </a></b>
                    </li>
                    <li class="nav-item">
                        <b><a class="nav-link" href="<?= base_url('ispa/penyuluhan'); ?>">Penyuluhan ISPA</a></b>
                    </li>
                    <li class="nav-item">
                        <b><a class="nav-link" href="<?= base_url('ispa/gallery'); ?>">Gallery</a></b>
                    </li>
                    <li class="nav-item">
                        <b><a class="nav-link" href="<?= base_url('ispa/kontak'); ?>">Kontak</a></b>
                    </li>
                    <form action="">
                        <input type="text" name="search" class="search" placeholder="search">
                    </form>

                </div>
            </nav>
        </div>
    </section>