<!-- contain -->
<section id="konten">
        <div class="container-fluid">

            <div class="row">
                <!-- main contain -->
                <div class="col-md-12">
                    <!-- header artikel -->
                    <div class="header-konten mt-5">
                        <h5 class="header-title"><b>Gallery</b></h5>
                        <div class="garis"></div>
                    </div>

                    <!-- main artikel -->
                    <div class="container-fluid">
                        <div class="row">
                            <?php foreach ($images as $image) {
    ?>
                            <div class="col-lg-4 col-sm-12 mt-3" >
                                <div class="well" >
                                    <a class="example-image-link" 
                                        href="<?= base_url('images/album/').$image->nama; ?>"
                                        data-lightbox="example-set"
                                        data-title="<?=$image->deskripsi; ?>"><img
                                            class="thumbnail img-responsive" alt="Bootstrap template"
                                            src="<?= base_url('images/album/').$image->nama; ?>" /> </a>
                                </div>
                            </div>
                            <?php
} ?>
                        </div>
                    </div>



                </div>

    