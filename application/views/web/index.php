
    <!-- slideshow -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <?php foreach ($artikels as $slide) {
    ?>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('images/artikel/').$slide->nama_gambar; ?>" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3><?= $slide->judul; ?></h3>
                    <p><?= substr(strip_tags($slide->isi), 0, 100); ?></p>
                    <a href="<?= base_url('ispa/readmore/').$slide->artikel_id; ?> " class="btn btn-sm btn-secondary">Lanjut Baca..</a>
                </div>
            </div>
        <?php
} ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- contain -->
    <section id="konten">
        <div class="container-fluid">

            <div class="row">
                <!-- main contain -->
                <div class="col-md-1"></div>
                <div class="col-md-7">
                    <!-- header artikel -->
                    <div class="header-konten mt-5">
                        <h5 class="header-title"><b>Artikel Terbaru</b></h5>
                        <div class="garis"></div>
                    </div>

                    <!-- main artikel -->
                    <div class="container-fluid">
                        <div class="row">
                            <?php foreach ($artikels as $artikel) {
        ?>
                            <div class="col-md-6 col-sm-12 mt-3" >
                                <div class="card" >
                                    <img width="250px" height="150px" class="card-img-top" src="<?= base_url('images/artikel/').$artikel->nama_gambar; ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="tanggal-view"><i class="fa fa-calendar"></i> <?= date('d-M-Y', $artikel->tanggal); ?>    <i class="far fa-eye"></i> <?= $artikel->hit; ?></div>
                                        <h5 class="card-title"><?= $artikel->judul; ?></h5>
                                        <p class="card-text"><?= substr(strip_tags($artikel->isi), 0, 50); ?>...</p>
                                        <a href="<?= base_url('ispa/readmore/').$artikel->artikel_id; ?> " class="btn btn-sm btn-secondary">Lanjut Baca..</a>
                                    </div>
                                    <div class="garis"></div>
                                </div>
                            </div>
                            <?php
    } ?>
                        </div>
                    </div>
                </div>

    