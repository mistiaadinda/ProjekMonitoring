<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url('assets/')?>img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?=base_url('assets/')?>img/favicon.png">
  <title>
    Project Monitoring
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?=base_url('assets/')?>css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?=base_url('assets/')?>css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?=base_url('assets/')?>css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?=base_url('assets/')?>css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
</head>

<body class="bg-gray-100">
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header text-center">
                        <h4><?php echo $judul; ?></h4>
                    </div>
                    
                    <hr class="horizontal dark mt-0">
                    <br>
                    <div class="row ">
                        <div class="col-12">
                            <div class="card mb-4">
                                <div class="card-body px-8 pt-0 pb-2">
                                    <form role="form" action="" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Project Name</label>
                                                <input type="text" class="form-control"  value="<?= set_value('nama_projek'); ?>" name="nama_projek" id="nama_projek">
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput2">Client</label>
                                                <input type="text" class="form-control" value="<?= set_value('nama_klien'); ?>" name="nama_klien" id="nama_klien">
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput3">Project Leader</label>
                                                <input type="text" class="form-control" value="<?= set_value('nama_leader'); ?>" name="nama_leader" id="nama_leader">
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput4">Project Leader Email</label>
                                                <input type="email" class="form-control"  value="<?= set_value('email'); ?>" name="email" id="email">
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput5">Project Leader Profile</label>
                                                <input type="file" class="form-control" value="<?= set_value('gambar'); ?>" name="gambar" id="gambar">
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput6">Date Start</label>
                                                <input type="date" class="form-control"  value="<?= set_value('tanggal_mulai'); ?>" name="tanggal_mulai" id="tanggal_mulai">
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput7">Date End</label>
                                                <input type="date" class="form-control"  value="<?= set_value('tanggal_selesai'); ?>" name="tanggal_selesai" id="tanggal_selesai">
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput8">Progress</label> 
                                                <input type="text" class="form-control" value="<?= set_value('progress'); ?>" name="progress" id="progress">
                                            </div>
                                            </div>
                                            <br>
                                            <div class="col-md-12 text-center px-8 pt-4 pb-6">
                                                <a href="<?= site_url('Monitoring') ?>" type="submit" class="btn bg-gradient-danger">Batal</a>
                                                <button type="submit" name="tambah" class="btn bg-gradient-success">Tambah</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>