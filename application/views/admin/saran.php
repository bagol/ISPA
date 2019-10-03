
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
  <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
  

  <!-- cart artkel -->
  <div class="row">
    <div class="col-lg-11 col-xl-12">
        <!-- cart -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Pesan / Saran</h6>
          </div>
          <div class="card-body">
              <table id="table-artikel" class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th style="width:45%;">Isi Saran</th>
                          <th>Nama Pengirim</th>
                          <th>Email Pengirim</th>
                          <th>Tanggal</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php $no = 1; foreach($sarans as $saran){ ?>
                      <tr <?php echo $bg = $saran->status == 0 ? $bg ='style="background:#f3532b9c; opacity:0.5; color:#fff;"' : $bg ='style="background:none;"' ; ?>>
                          <td><?=$no;?></td>
                          <td><?=$saran->pesan;?></td>
                          <td><?=$saran->nama;?></td>
                          <td><?=$saran->email;?></td>
                          <td><?=date("d-M-Y",$saran->tanggal);?></td>
                          <td></td>
                      </tr>
                      <?php $no++; } ?>
                  </tbody>
              </table>
          </div>
        </div>

    </div>
  </div>
</div>
<!-- /.container-fluid -->