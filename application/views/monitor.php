<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Project Monitoring
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
</head>
<body class="">
 
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.html">
              Project Monitoring
            </a>
            </div>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">
                <li class="nav-item">
                  <a class="small" href="<?= base_url('Auth/registrasi'); ?>">
                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                    Keluar
                  </a>
                  
                </li>
              </ul>
            </div> 
          </div>
          </br>
</br>
</br>
</br>

          <div class="card mb-4">
            <div class="card-header text-center">
              <h4><?php echo $judul; ?></h4>
            </div>
            <div class="card-header text-center">
                <a href="<?= site_url('Monitoring/tambah') ?>" class="btn btn-icon btn-3 btn-primary" type="button">
                    <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                    <span class="btn-inner--text">&nbsp;&nbsp;&nbsp;Tambah Project</span>
                </a>
            </div>
            <hr class="horizontal dark mt-0">
            <br>
            <div class="row ">
                <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10 ">PROJECT NAME</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10 ">CLIENT</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10">Project Leader</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10 ">Start Date</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10">End Date</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10">Progress</th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-10">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($monitoring as $mr) : ?>
                            <tr>
                            <td>
                                <div class="d-flex px-2">
                                <div class="my-auto">
                                    <h4 class="mb-0 text-sm"><?= $mr['nama_projek']; ?></h4>
                                </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2">
                                <div class="my-auto">
                                    <h4 class="mb-0 text-sm"><?= $mr['nama_klien']; ?></h4>
                                </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                <div>
                                    <img src="<?= ('assets/img/profil/') . $mr['gambar']; ?>" class="avatar avatar-sm me-3" alt="user1">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm"><?= $mr['nama_leader']; ?></h6>
                                    <p class="text-xs text-secondary mb-0"><?= $mr['email']; ?></p>
                                </div>
                                </div>
                            </td>
                            <td>
                                <div class="my-auto">
                                    <h4 class="mb-0 text-sm"><?= $mr['tanggal_mulai']; ?></h4>
                                </div>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <div class="my-auto">
                                    <h4 class="mb-0 text-sm"><?= $mr['tanggal_selesai']; ?></h4>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <div class="d-flex align-items-center justify-content-center">
                                <span class="me-2 text-xs font-weight-bold"><?= $mr['progress']; ?>%</span>
                                <div>
                                    <!-- <div class="progress">
                                    <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="<?= $mr['progress']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $mr['progress']; ?>%;"></div>
                                    </div> -->
                                            <?php
                                            if ($mr['progress'] <= 30) { ?>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="<?= $mr['progress']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $mr['progress']; ?>%;"></div>
                                                </div>
                                            <?php } 
                                            else if ($mr['progress'] <= 60) { ?>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="<?= $mr['progress']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $mr['progress']; ?>%;"></div>
                                                </div>
                                            <?php
                                            } else if ($mr['progress'] >= 61) {?>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="<?= $mr['progress']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $mr['progress']; ?>%;"></div>
                                                </div>
                                            <?php } ?>
                                </div>
                                </div>
                            </td>
                            <td class="align-middle">
                                <a href="<?= base_url('Monitoring/edit/') . $mr['id']; ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                    <button class="btn btn-link text-success mb-0">
                                        <i class="fa fa-pen text-sm "></i>
                                    </button>
                                </a>
                                <a href="<?= base_url('Monitoring/hapus/') . $mr['id']; ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                    <button class="btn btn-link text-danger mb-0">
                                        <i class="fa fa-trash text-sm"></i>
                                    </button>
                                </a>
                            </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                        </table>
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