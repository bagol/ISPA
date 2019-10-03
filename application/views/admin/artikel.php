
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
  <h1 class="h3 mb-4 text-gray-800">Artikel</h1>
  

  <!-- cart artkel -->
  <div class="row">
    <div class="col-xl-12 col-lg-11 ">
        
        <!-- cart -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Artikel</h6>
          </div>
          <div class="card-body">
              <table id="table-artikel" class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>Judul</th>
                          <th style="width:45%;">Isi Artikel</th>
                          <th>gambar</th>
                          <th>Tanggal Dibuat</th>
                          <th>View</th>
                          <th>Penulis</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($artikels->result() as $artikel) {
        ?>
                      <tr>
                          <td><?= $artikel->judul; ?></td>
                          <td> <?= $artikel->isi; ?></td>
                          <td><img src="<?php echo Base_url('images/artikel/');
        echo $artikel->nama_gambar; ?>" width="80px" alt="<?= $artikel->nama_gambar; ?>"></td>
                          <td> <?= date('d-M-Y', $artikel->tanggal); ?> </td>
                          <td><?= $artikel->hit; ?></td>
                          <td><?= $artikel->penulis; ?></td>
                          <td>
                              <a href="<?= base_url('admin/update/').$artikel->artikel_id; ?>" class="btn btn-success"><i class="fa fa-pencil-alt"></i></a>
                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusModal<?=$artikel->artikel_id; ?>"><i class="fa fa-trash-alt"></i></button>
                          </td>
                      </tr>
                    <?php
    } ?> 
                  </tbody>
              </table>
          </div>
        </div>
        
    </div>
  </div>
</div>
<!-- /.container-fluid -->

<!-- Modal -->
<?php foreach ($artikels->result() as $hapus) {
        ?>
<div class="modal fade" id="hapusModal<?= $hapus->artikel_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Artikel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apa Anda Yakin ingin Menghapus Artikel <?= $hapus->judul; ?>
        <form action="<?= base_url('artikel/delete'); ?>" method="post">
          <input type="hidden" name="artikel_id" value="<?= $hapus->artikel_id; ?>">
          <input type="hidden" name="gambar_id" value="<?= $hapus->gambar_id; ?>">
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