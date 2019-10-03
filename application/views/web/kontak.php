
<!-- Form -->
<section id="form">
    <div class="container-fluid">
    <?php if($this->session->flashdata('msg')){?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('msg') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php } ?>
        <div class="row">
            <div class="col-sm-4 offset-sm-1 gambar-download">
                <img src="<?= base_url() ?>images/vector04.svg" alt="gambar" class="<?= base_url() ?>images-illustrator4">
            </div>
            <form action="<?= base_url()?>Kontak/insert" method="post">
            <div class="col-md-12 offset-md-6">
                
                <div class="panel">
                    <div class="panel-body">
                        <label>Nama:</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama" name="nama" required="requaired">
                    </div>
                    <div class="form-group">
                        <label>E-mail:</label>
                        <input type="text" class="form-control" placeholder="Masukkan email" name="email" required="requaired">
                    </div>
                    <div class="form-group">
                        <label>Pesan:</label>
                        <textarea class="form-control" name="pesan" placeholder="Masukkan pesan"></textarea>
                    </div>
                        <br/>
                    <input type="submit" class="btn btn-primary btn-block" value="KIRIM">
                
                </div>
            
            </div>
        </form>
        </div>
    </div>
</section>