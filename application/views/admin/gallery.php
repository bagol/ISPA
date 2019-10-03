
<!-- Awal konten-->
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
  <?php if ($this->session->flashdata('err')) {
        ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?= $this->session->flashdata('err'); ?>
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
    <div class="col-xl-12 col-lg-11 ">
    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-plus"></i> Tambah Gambar
    </button>
        
        <!-- cart -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Gambar</h6>
          </div>
          <div class="card-body">
              <table id="table-artikel" class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th style="width:45%;">gambar</th>
                          <th>Deskripsi</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                     $no = 1;
                     foreach ($images->result() as $image) {
                         ?>
                      <tr>
                          <td><?= $no; ?></td>
                          <td><img src="<?php echo Base_url('images/album/');
                         echo $image->nama; ?>" width="80px" alt="<?= $image->nama; ?>"></td>
                          <td><?= $image->deskripsi; ?></td>
                          <td>
                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusModal<?=$image->id; ?>"><i class="fa fa-trash-alt"></i></button>
                          </td>
                      </tr>
                    <?php
                        ++$no;
                     }
                    ?> 
                  </tbody>
              </table>
          </div>
        </div>
        
    </div>
  </div>
</div>
<!-- /.container-fluid -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
                     <td>
                        <div class="img-preview">
                            <img id="preview" src="" alt="" width="300px"/>
                        </div>
                        <img id="preview" src="" alt="" width="320px"/>
                     </td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                </tr>
                <tr>
                <td><textarea name="deskripsi" cols="35" rows="4"></textarea></td>
                </tr>
            </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<?php foreach ($images->result() as $hapus) {
                        ?>
<div class="modal fade" id="hapusModal<?= $hapus->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Artikel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apa Anda Yakin ingin Menghapus Artikel <?= $hapus->nama; ?>
        <form action="<?= base_url('gambar/delete'); ?>" method="post">
          <input type="hidden" name="id" value="<?= $hapus->id; ?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <button type="submit" class="btn btn-primary">Iya</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php
                    } ?>