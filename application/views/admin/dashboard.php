
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
    <div class="col-lg-10 col-xl-11">

    </div>
  </div>
</div>
<!-- /.container-fluid -->

      