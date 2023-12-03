<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> <?php echo $title ?></title>
  <!-- -->
  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url() ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url() ?>resources/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?php echo base_url() ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  
  <link href="<?php echo base_url() ?>resources/pagination_man.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>resources/css/hackend_form.css" rel="stylesheet">

  
  <link href="<?php echo base_url() ?>vendor/datatables/dt_button.css" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url() ?>web">
        <div class="sidebar-brand-icon">
          <i class="fas fa-clinic-medical"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><small>CliniCare</small></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>web">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Utama
      </div>

      <!-- Master -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMaster" aria-expanded="true" aria-controls="collapseMaster">
          <i class="fas fa-fw fa-table"></i>
          <span>Master</span>
        </a>
        <div id="collapseMaster" class="collapse" aria-labelledby="headingMaster" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data Master:</h6>
            <?php if($this->session->userdata('level')=="1"): ?>
            <a class="collapse-item" href="<?php echo base_url() ?>web/data-petugas">Petugas</a>
            <a class="collapse-item" href="<?php echo base_url() ?>web/data-dokter">Dokter</a>
            <a class="collapse-item" href="<?php echo base_url() ?>web/data-poli">Poli</a>
            <a class="collapse-item" href="<?php echo base_url() ?>web/data-tindakan">Tindakan</a>
            <a class="collapse-item" href="<?php echo base_url() ?>web/data-pasien">Pasien</a>
            <a class="collapse-item" href="<?php echo base_url() ?>web/data-obat">Obat</a>
            <?php endif; ?>
            <?php if($this->session->userdata('level')=="2"): ?>
            <a class="collapse-item" href="<?php echo base_url() ?>web/data-pasien">Pasien</a>
            <?php endif; ?>
            <?php if($this->session->userdata('level')=="3"): ?>
            <a class="collapse-item" href="<?php echo base_url() ?>web/data-obat">Obat</a>

            <?php endif; ?>
          </div>
        </div>
      </li>
    <?php if($this->session->userdata('level')=="2"||$this->session->userdata('level')=="3"||$this->session->userdata('level')=="1"): ?>
      <!-- Transaksi -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTransaksi" aria-expanded="true" aria-controls="collapseTransaksi">
          <i class="fas fa-fw fa-cash-register"></i>
          <span>Transaksi</span>
        </a>
        <div id="collapseTransaksi" class="collapse" aria-labelledby="headingTransaksi" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kelola:</h6>
            <?php if($this->session->userdata('level')=="2"): ?>
            <a class="collapse-item" href="<?php echo base_url() ?>web/transaksi-pendaftaran">Pendaftaran</a>
            <?php endif; ?>
            <?php if($this->session->userdata('level')=="1"): ?>
            <a class="collapse-item" href="<?php echo base_url() ?>web/transaksi-pendaftaran">Pendaftaran</a>
            <?php endif; ?>
            <?php if($this->session->userdata('level')=="3"): ?>
            <a class="collapse-item" href="<?php echo base_url() ?>web/transaksi-pembayaran">Pembayaran</a>
            <?php endif; ?>
            <?php if($this->session->userdata('level')=="1"): ?>
            <a class="collapse-item" href="<?php echo base_url() ?>web/transaksi-pembayaran">Pembayaran</a>
          <?php endif; ?>
          </div>
        </div>
      </li>
    <?php endif; ?>
  <?php if($this->session->userdata('level')=="3"||$this->session->userdata('level')=="1"): ?>
      <!-- Medis -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMedis" aria-expanded="true" aria-controls="collapseMedis">
          <i class="fas fa-fw fa-file-medical"></i>
          <span>Medis</span>
          <?php if($this->session->userdata('level')=="3"): ?>
        </a>
        <div id="collapseMedis" class="collapse" aria-labelledby="headingMedis" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Rekam Medis:</h6>
            <a class="collapse-item" href="<?php echo base_url() ?>web/medis-periksa">Rekamedis</a>
            <a class="collapse-item" href="<?php echo base_url() ?>web/medis-resep">Resep</a>
            <?php endif; ?>
            
          <?php if($this->session->userdata('level')=="1"): ?>
        </a>
        <div id="collapseMedis" class="collapse" aria-labelledby="headingMedis" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Rekam Medis:</h6>
            <a class="collapse-item" href="<?php echo base_url() ?>web/medis-periksa">Rekamedis</a>
            <a class="collapse-item" href="<?php echo base_url() ?>web/medis-resep">Resep</a>
            <?php endif; ?>
          
          </div>
        </div>
      </li>
    <?php endif; ?>



      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Pendukung
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">

        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-list-alt"></i>
          <span>Laporan</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data Master</h6>
            <?php if($this->session->userdata('level')=="1"): ?>
            <a class="collapse-item" href="<?php echo base_url() ?>web/laporan-master/petugas">Petugas</a>
            <a class="collapse-item" href="<?php echo base_url() ?>web/laporan-master/dokter">Dokter</a>
            <a class="collapse-item" href="<?php echo base_url() ?>web/laporan-master/poliklinik">Poli</a>
            <a class="collapse-item" href="<?php echo base_url() ?>web/laporan-master/pasien">Pasien</a>
            <a class="collapse-item" href="<?php echo base_url() ?>web/laporan-master/obat">Obat</a>
            <a class="collapse-item" href="<?php echo base_url() ?>web/laporan-master/resep">Obat Keluar</a>
            
            <?php endif; ?>
            <?php if($this->session->userdata('level')=="2"): ?>
            <a class="collapse-item" href="<?php echo base_url() ?>web/laporan-master/pasien">Pasien</a>
            <?php endif; ?>
            <?php if($this->session->userdata('level')=="3"): ?>
            <a class="collapse-item" href="<?php echo base_url() ?>web/laporan-master/obat">Obat</a>
            <a class="collapse-item" href="<?php echo base_url() ?>web/laporan-master/resep">Obat Keluar</a>
            
            <?php endif; ?>
            <?php if($this->session->userdata('level')=="2" || $this->session->userdata('level')=="3"|| $this->session->userdata('level')=="1"): ?>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Data Transaksi</h6>
            <?php if($this->session->userdata('level')=="2"): ?>
            <a class="collapse-item" href="<?php echo base_url() ?>web/laporan-transaksi/pendaftaran">Pendaftaran</a>
            <?php endif; ?>
            
            <?php if($this->session->userdata('level')=="1"): ?>
            <a class="collapse-item" href="<?php echo base_url() ?>web/laporan-transaksi/pendaftaran">Pendaftaran</a>
            <?php endif; ?>
            
            <?php if($this->session->userdata('level')=="3"): ?>
            <a class="collapse-item" href="<?php echo base_url() ?>web/laporan-transaksi/pembayaran">Pembayaran</a>
            <?php endif; ?>
            <?php if($this->session->userdata('level')=="1"): ?>
            <a class="collapse-item" href="<?php echo base_url() ?>web/laporan-transaksi/pembayaran">Pembayaran</a>
            <?php endif; ?>
            
            <div class="collapse-divider"></div>
            <?php if($this->session->userdata('level')=="2"): ?>
            <h6 class="collapse-header">Hasil:</h6>
            <a class="collapse-item" href="<?php echo base_url() ?>web/laporan-hasil-rm">Rekam Medis</a>
           <?php endif; ?>
           <?php if($this->session->userdata('level')=="1"): ?>
            <h6 class="collapse-header">Hasil:</h6>
            <a class="collapse-item" href="<?php echo base_url() ?>web/laporan-hasil-rm">Rekam Medis</a>
           <?php endif; ?>
          <?php endif; ?>
          </div>
        </div>

        <a class="nav-link collapsed" href="<?php echo base_url() ?>web/backup" >
          <i class="fas fa-cogs"></i>
          <span>Backup & Restore</span>
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

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-success d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

          
            

            <!-- User -->

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="text-transform: uppercase;"> <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> <?php echo $this->session->userdata('nama')?>(<?php if ($this->session->userdata('level')=="1"): ?>
                    Admin
                <?php elseif($this->session->userdata('level')=="2"): ?>
                    Petugas
                <?php elseif($this->session->userdata('level')=="3"): ?>
                    Kasir
                <?php endif ?>)</span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                <a class="dropdown-item" href="<?php echo base_url() ?>web/pengaturan">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Pengaturan
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
