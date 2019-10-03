<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-icon ">
      <b><h2 class="text-bold">ISPA </h2></b>
    <!-- <i class="fa fa-lungs"></i> -->
  </div>
  <div class="sidebar-brand-text mx-3"><small class="kecil">Inspeksi Saluran <br> Pernapasan Akut</small></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
  <a class="nav-link" href="#">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading artikel-->
<div class="sidebar-heading">
    <i class="fas fa-fw fa-newspaper"></i>Artikel
</div>

<!-- Nav Item - Artikel -->
<li class="nav-item">
  <a class="nav-link" href="<?= base_url('admin/artikel'); ?>">
    <i class="fas fa-fw fa-list"></i>
    <span>Daftar artikel</span>
  </a>
</li>

<li class="nav-item">
  <a class="nav-link" href="<?= base_url('admin/create_artikel'); ?>">
    <i class="fas fa-fw fa-file"></i>
    <span>Buat artikel</span>
  </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<li class="nav-item">
  <a class="nav-link" href="<?= base_url('admin/gallery'); ?>">
    <i class="fas fa-fw fa-image"></i>
    <span>Gallery</span>
  </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->