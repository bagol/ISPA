
<!-- awal konten -->
<div class="container-fluid">
  <?php if($this->session->flashdata('msg')){?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= $this->session->flashdata('msg') ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php } ?>

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Profile</h1>
  

  <!-- cart artkel -->
  <div class="row">
    <div class="col-xl-8 col-lg-7 ">
        <!-- cart -->
        <div class="card shadow mb-4" style="overflow-x: unset;">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
          </div>
          <div class="card-body">
              <form action="<?= base_url() ?>User/update_data" method="post" enctype="multipart/form-data">
                <table class="form-artikel">
                  <tr class="mt-4">
                    <td><label for="username">Username</label></td>
                    <td><input type="text" name="username" class="form-control" value="<?= $this->session->userdata('username') ?>"></td>
                  </tr>
                  <tr>
                    <td>Gambar</td>
                    <td>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="customFile" name="gambar" accept="image/*" value="<?= $this->session->userdata('gambar') ?>  onchange="tampilkanPreview(this,'preview')">
                          <label class="custom-file-label" for="customFile" id="label"><?= $this->session->userdata('gambar') ?></label>
                        </div>
                    </td>
                  </tr>
                  <tr class="mt-4">
                    <td><label for="username">Email</label></td>
                    <td><input type="email" name="email" class="form-control" value="<?= $this->session->userdata('email') ?>"></td>
                  </tr>
                  <tr class="mt-4">
                    <td><label for="username">Level</label></td>
                    <td><input type="email" name="level" class="form-control" value="<?= $this->session->userdata('role') ?>" readonly></td>
                  </tr>
                  <input type="hidden" name="id" value="<?= $this->session->userdata('id')?>">
                  <tr>
                    <td colspan="2">
                      <button type="submit" class="btn btn-primary">Simpan Artikel</button>
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
                <h6>Foto Profile</h6>
                <hr>
                <img id="preview" src="<?= base_url('images/album/user/').$this->session->userdata('gambar') ?>" alt="" width="300px"/>
            </div>
            <img id="preview" src="" alt="" width="320px"/>
          </div>
        </div>
        
    </div>
  </div>
</div>
<!-- /.container-fluid -->

      