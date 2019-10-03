
<!-- awal konten -->
<div class="container-fluid">
  <?php if ($this->session->flashdata('msg')) {
    ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= $this->session->flashdata('msg'); ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php
} ?>

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Artikel</h1>
  

  <!-- cart artkel -->
  <div class="row">
    <div class="col-xl-8 col-lg-7 ">
        <!-- cart -->
        <div class="card shadow mb-4" style="overflow-x: unset;">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Buat Artikel</h6>
          </div>
          <div class="card-body">
              <form action="<?= base_url(); ?>Artikel/do_update" method="post" enctype="multipart/form-data">
                <table class="form-artikel">
                  <tr class="mt-4">
                    <td><label for="judul">Judul Artikel</label></td>
                    <td><input type="text" name="judul" class="form-control" value="<?= $artikel->judul; ?>"></td>
                  </tr>
                  <tr>
                    <td>Gambar</td>
                    <td>
                        <div class="custom-file">
                          <input type="file" value="<?= $artikel->nama_gambar; ?>" class="custom-file-input" id="customFile" name="gambar" accept="image/*"  onchange="tampilkanPreview(this,'preview')">
                          <label class="custom-file-label" for="customFile" id="label"><?= $artikel->nama_gambar; ?></label>
                        </div>
                        <div class="keterangan">Ukuran gambar 1024 x 768</div>
                    </td>
                  </tr>
                  <tr>
                    <td>Isi Artikel</td>
                  </tr>
                  <tr>
                    <td colspan="2 mt-4">
                        <textarea name="artikel" id="texteditor" ><?= $artikel->isi; ?></textarea>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <input type="hidden" name="artikel_id" value="<?= $artikel->artikel_id; ?>">
                      <input type="hidden" name="gambar_id" value="<?= $artikel->gambar_id; ?>">
                      <button type="submit" class="btn btn-primary">Update Artikel</button>
                    </td>
                  </tr>
                </table>
              </form>
          </div> 
        </div>
        
    </div>
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4" style="overflow-x: unset;">
          <div class="card-body">
            <div class="img-preview">
                <h6>Tampilan Gambar</h6>
                <hr>
                <img id="preview" src="<?= base_url('/images/artikel/'); ?><?= $artikel->nama_gambar; ?>" alt="" width="300px"/>
            </div>
            <img id="preview" src="" alt="" width="320px"/>
          </div>
        </div>
        
    </div>
  </div>
</div>
<!-- /.container-fluid -->

      