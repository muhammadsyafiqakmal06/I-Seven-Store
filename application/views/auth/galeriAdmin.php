<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Gallery</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/ekko-lightbox/ekko-lightbox.css') ?>">
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
          <a href="<?php echo base_url() ?>Admin/" class="nav-link">Home</a>
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
              <a href="<?php echo base_url('') ?>Admin" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>

            <li class="nav-item">
              <a href="<?php echo base_url('') ?>Admin/uploadAdmin" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Upload Data
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('') ?>Admin/galeriAdmin" class="nav-link active">
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
              <h1>Gallery</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url() ?>Admin">Home</a></li>
                <li class="breadcrumb-item active">Gallery</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card card-warning">
                <div class="card-header">
                  <h4 class="card-title">Macbook Pro</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <?php foreach ($queryTipe2 as $row) { ?>
                      <div class="col-sm-2">
                        <a href="<?= base_url('Admin/editAdmin/') . $row->kd_berkas ?>" data-gallery="gallery">
                          <img src="data:<?php echo $row->tipe_berkas; ?>;base64,<?php echo $row->berkas; ?>" class="img-fluid mb-2" alt="white sample" />
                        </a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter<?= $row->kd_berkas ?>">
                          <?= $row->nama ?>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter<?= $row->kd_berkas ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Option</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Choose your action to this file
                              </div>
                              <div class="modal-footer">
                                <a href="<?= base_url('Admin/editAdmin/') . $row->kd_berkas ?>" data-gallery="gallery">
                                  <button type="button" class="btn btn-warning">Edit</button>
                                </a>
                                <a href="<?= base_url('Admin/fungsiDelete/') . $row->kd_berkas ?>" data-gallery="gallery">
                                  <button type="button" class="btn btn-danger">Delete</button>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card card-warning">
                <div class="card-header">
                  <h4 class="card-title">Macbook Air</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <?php foreach ($queryTipe as $row) { ?>
                      <div class="col-sm-2">
                        <a href="<?= base_url('Admin/editAdmin/') . $row->kd_berkas ?>" data-gallery="gallery">
                          <img src="data:<?php echo $row->tipe_berkas; ?>;base64,<?php echo $row->berkas; ?>" class="img-fluid mb-2" alt="white sample" />
                        </a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter1<?= $row->kd_berkas ?>">
                          <?= $row->nama ?>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter1<?= $row->kd_berkas ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Option</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Choose your action to this file
                              </div>
                              <div class="modal-footer">
                                <a href="<?= base_url('Admin/editAdmin/') . $row->kd_berkas ?>" data-gallery="gallery">
                                  <button type="button" class="btn btn-warning">Edit</button>
                                </a>
                                <a href="<?= base_url('Admin/fungsiDelete/') . $row->kd_berkas ?>" data-gallery="gallery">
                                  <button type="button" class="btn btn-danger">Delete</button>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="card card-warning">
                <div class="card-header">
                  <h4 class="card-title">Macbook Retina</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <?php foreach ($queryTipe3 as $row) { ?>
                      <div class="col-sm-2">
                        <a href="<?= base_url('Admin/editAdmin/') . $row->kd_berkas ?>" data-gallery="gallery">
                          <img src="data:<?php echo $row->tipe_berkas; ?>;base64,<?php echo $row->berkas; ?>" class="img-fluid mb-2" alt="white sample" />
                        </a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter2<?= $row->kd_berkas ?>">
                          <?= $row->nama ?>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter2<?= $row->kd_berkas ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Option</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                Choose your action to this file
                              </div>
                              <div class="modal-footer">
                                <a href="<?= base_url('Admin/editAdmin/') . $row->kd_berkas ?>" data-gallery="gallery">
                                  <button type="button" class="btn btn-warning">Edit</button>
                                </a>
                                <a href="<?= base_url('Admin/fungsiDelete/') . $row->kd_berkas ?>" data-gallery="gallery">
                                  <button type="button" class="btn btn-danger">Delete</button>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
  <!-- Bootstrap -->
  <script src="<?php echo base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- Ekko Lightbox -->
  <script src="<?php echo base_url('plugins/ekko-lightbox/ekko-lightbox.min.js') ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('dist/js/adminlte.min.js') ?>"></script>
  <!-- Filterizr-->
  <script src="<?php echo base_url('plugins/filterizr/jquery.filterizr.min.js') ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script>
    $(function() {
      $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox({
          alwaysShowClose: true
        });
      });

      $('.filter-container').filterizr({
        gutterPixels: 3
      });
      $('.btn[data-filter]').on('click', function() {
        $('.btn[data-filter]').removeClass('active');
        $(this).addClass('active');
      });
    })
  </script>
</body>

</html>