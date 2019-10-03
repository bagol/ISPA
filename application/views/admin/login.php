<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login Aministrator ISPA</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url() ?>assets/css/all.css" rel="stylesheet" type="text/css">
  

  <!-- Custom styles for this template-->
  <link href="<?= base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/css/admin-costum.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">
      <!-- awal konten -->
      <div class="container-fluid">
        <div class="card o-hidden border-0 shadow-lg login my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <?php if($this->session->flashdata('err')){?>
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('err') ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <?php } ?>
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang di Web Penyuluhan ISPA</h1>
                  </div>
                  <form class="user" action="<?= base_url('Login/verifikasi')?>" method="post">
                    <div class="form-group">
                      <input type="text" name="user_email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="username / email">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                     <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url() ?>assets/js/jquery.js"></script>
  <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url() ?>assets/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url() ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>
