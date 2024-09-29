<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Admin | Upload Data</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/adminlte.min.css') ?>">
  <link rel="icon" href="<?php echo base_url('assets/img/logo.jpg') ?>">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="<?php echo base_url('assets/img/logo.jpg') ?>" alt="AdminLTELogo" height="60" width="60">
    </div>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?php echo base_url('') ?>Admin/auth/dashboardAdmin" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="" href="<?= base_url('auth/logout'); ?>" role="button">
            <i class="fas fa-chevron-circle-right"> Logout</i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-warning elevation-4">
      <!-- Brand Logo -->
      <a href="<?php echo base_url('') ?>Admin" class="brand-link">
        <img src="<?php echo base_url('assets/img/logo.jpg') ?>" alt="Iseven Store" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">ISeven Store</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?php echo base_url('') ?>Admin/" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>

            <li class="nav-item">
              <a href="<?php echo base_url('') ?>Admin/uploadAdmin" class="nav-link active">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Upload Data
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('') ?>Admin/galeriAdmin" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Gallery
                </p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Form Upload</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>index.php/Admin/dashboardAdmin">Home</a></li>
                <li class="breadcrumb-item active">Upload Data</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Input Your Data</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" enctype="multipart/form-data" action="<?= base_url(); ?>admin/uploadAdmin">
                  <div class="card-body">
                    <!-- FORM INPUT Nama -->
                    <div class="form-group">
                      <label for="">Nama Berkas</label>
                      <input type="text" class="form-control" name="nama" placeholder="Masukan nama barang">
                    </div>
                    <!-- FORM INPUT Keterangan -->
                    <div class="form-group">
                      <label for="">Keterangan</label>
                      <textarea class="form-control" name="keterangan_berkas" placeholder="Keterangan" rows="3"></textarea>
                    </div>
                    <!-- FORM INPUT Spesifikasi -->
                    <div class="form-group">
                      <label for="">Spesifikasi</label>
                      <textarea class="form-control" name="spesifikasi" placeholder="Spesifikasi" rows="3"></textarea>
                    </div>
                    <!-- FORM INPUT Kelengkapan -->
                    <div class="form-group">
                      <label for="">Kelengkapan</label>
                      <textarea class="form-control" name="kelengkapan" placeholder="Kelengkapan" rows="3"></textarea>
                    </div>
                    <!-- FORM INPUT Harga -->
                    <div class="form-group">
                      <label for="">Harga</label>
                      <input type="number" class="form-control" name="harga" placeholder="Harga">
                    </div>
                    <!-- FORM INPUT Diskon -->
                    <div class="form-group">
                      <label for="">Diskon</label>
                      <input type="number" class="form-control" name="diskon" placeholder="Diskon">
                    </div>
                    <!-- FORM INPUT Tipe -->
                    <div class="form-group">
                      <label for="">Pilih Tipe</label>
                      <select class="form-select" aria-label="Default select example" name="tipe" placeholder="Tipe" style="width: 100%">
                        <option selected>Nothing Selected</option>
                        <option value="1">1. Macbook Air</option>
                        <option value="2">2. Macbook Pro</option>
                        <option value="3">3. Macbook Retina</option>
                      </select>
                    </div>
                    <!-- FORM INPUT Flash Sale -->
                    <div class="form-group">
                      <label for="">Flash Sale</label>
                      <select class="form-select" aria-label="Default select example" name="flashsale" placeholder="Flashsale" style="width: 100%">
                        <option selected>Nothing Selected</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                      </select>
                    </div>
                    <!-- FORM INPUT BERKAS 1 -->
                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="berkas" name="berkas">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                    <!-- FORM INPUT BERKAS 2 -->
                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="berkas2" name="berkas2">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                    <!-- FORM INPUT BERKAS 3 -->
                    <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="berkas3" name="berkas3">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>

                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-warning" value="simpan">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->

            </div>
            <!--/.col (left) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2022 <a href="https://www.instagram.com/retile.project/" style="color:#FFDB15 ;">Retile.</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?php echo base_url('plugins/jquery/jquery.min.js') ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- bs-custom-file-input -->
  <script src="<?php echo base_url('plugins/bs-custom-file-input/bs-custom-file-input.min.js') ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('dist/js/adminlte.min.js') ?>"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      bsCustomFileInput.init();
    });
  </script>
</body>

</html>