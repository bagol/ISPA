
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
  <h1 class="h3 mb-4 text-gray-800">Gallery</h1>
  

  <!-- cart artkel -->
  <div class="row">
    <div class="col-xl-8 col-lg-7 ">
        <!-- cart -->
        <div class="card shadow mb-4" style="overflow-x: unset;">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Upload Image</h6>
          </div>
          <div class="card-body">
              <form action="<?= base_url('Gambar/insert'); ?>" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                      <td>Gambar</td>
                    </tr>
                    <tr>
                      <td>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="gambar" accept="image/*"  onchange="tampilkanPreview(this,'preview')">
                        <label class="custom-file-label" for="customFile" id="label">Insert image</label>
                      </div>
                      <div class="keterangan">Ukuran gambar 1024 x 768</div>
                      </td>
                    </tr>
                    <tr>
                      <td>Deskripsi</td>
                    </tr>
                    <tr>
                      <td><textarea name="deskripsi" cols="35" rows="4"></textarea></td>
                    </tr>
                    <tr>
                      <td><input type="submit" value="Save" class="btn btn-primary" style="width:100%;"></td>
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
                <img id="preview" src="" alt="" width="300px"/>
            </div>
            <img id="preview" src="" alt="" width="320px"/>
          </div>
        </div>
        
    </div>
  </div>
</div>
<!-- /.container-fluid -->

      