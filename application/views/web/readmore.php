
<!--Content-->
<section id="konten">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 offset-md-1 " >
                <div class="artikel">
                    <h2 class="judul-artikel"><?= $artikel->judul; ?></h2>
                    <div class="artikel-date"><i class="fa fa-calendar"></i> <?= date("d-M-Y", $artikel->tanggal); ?>    <i class="far fa-eye"></i> <?= $artikel->hit ?></div>
                    <center><img src="<?= base_url('images/artikel/').$artikel->nama_gambar;?>" class="artikel-img" alt=""></center>
                    <div class="body-artikel">
                        <?= $artikel->isi;?>
                    </div>
                </div>
            </div>