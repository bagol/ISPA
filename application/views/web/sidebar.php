<!-- sidebar -->
<div class="col-md-3">
    <div class="header-konten mt-5">
        <h5 class="header-title populer-title"><b>Populer</b></h5>
        <div class="garis populer-title"></div>
    </div>

    <!-- main sidebar -->
    <div class="card side-main" style="width: 100%;">
        <?php foreach($populars as $popular) {?>
        <div class="side-item">
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?=base_url('images/artikel/').$popular->nama_gambar?>" alt="item 1" height="75px" width="75" class="rounded">
                </div>
                <div class="col-sm-8">
                    <small class="judul-side"><?= substr($popular->judul,0,50)?>...</small>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    
</div>