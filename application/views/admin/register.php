<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SIMRS Dashboard</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/assets/modules/bootstrap/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/dist/assets/modules/fontawesome/css/all.min.css');?>">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/assets/modules/jqvmap/dist/jqvmap.min.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/dist/assets/modules/weather-icon/css/weather-icons.min.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/dist/assets/modules/weather-icon/css/weather-icons-wind.min.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/dist/assets/modules/summernote/summernote-bs4.css');?>">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/assets/css/style.css');?>">
  <link rel="stylesheet" href="<?= base_url('assets/dist/assets/css/components.css');?>">

  <!-- SweetAlert CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
  <!-- SweetAlert JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>

  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-94034622-3');
  </script>
  <!-- /END GA -->
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <h1>Mojosari Indah</h1>
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST" action="<?= site_url('admin/register');?>">
                  <div class="row">
                    <div class="form-group col-12">
                      <label for="username">Username</label>
                      <input id="username" type="text" class="form-control" name="username" autofocus>
                      <?php echo form_error('username', '<div class="text-danger">', '</div>'); ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-12">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                      <?php echo form_error('password', '<div class="text-danger">', '</div>'); ?>
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-12">
                      <label for="password-confirm" class="d-block">Password Confirmation</label>
                      <input id="password-confirm" type="password" class="form-control" name="password_confirm">
                      <?php echo form_error('password-confirm', '<div class="text-danger">', '</div>'); ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-12">
                      <label for="role" class="d-block">Role</label>
                      <select name="role" id="role" class="form-control">
                        <option value="" selected disabled>- pilih -</option>
                        <option value="superadmin">Superadmin</option>
                        <option value="admin">Admin</option>
                      </select>
                      <?php echo form_error('role', '<div class="text-danger">', '</div>'); ?>
                    </div>
                  </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>
                  <div class="mt-3 text-muted text-center">
                  Sudah punya akun? <a href="<?= site_url('Admin');?>">Login</a>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- SweetAlert -->
<script>
    <?php if ($this->session->flashdata('success')): ?>
        Swal.fire({
            icon: 'success',
            title: 'Register Berhasil',
            text: '<?= $this->session->flashdata('success') ?>',
        });
    <?php elseif ($this->session->flashdata('error')): ?>
        Swal.fire({
            icon: 'error',
            title: 'Register Gagal',
            text: '<?= $this->session->flashdata('error') ?>',
        });
    <?php endif; ?>
</script>


  <!-- General JS Scripts -->
  <script src="<?= base_url('assets/dist/assets/modules/jquery.min.js');?>"></script>
  <script src="<?= base_url('assets/dist/assets/modules/popper.js');?>"></script>
  <script src="<?= base_url('assets/dist/assets/modules/tooltip.js');?>"></script>
  <script src="<?= base_url('assets/dist/assets/modules/bootstrap/js/bootstrap.min.js');?>"></script>
  <script src="<?= base_url('assets/dist/assets/modules/nicescroll/jquery.nicescroll.min.js');?>"></script>
  <script src="<?= base_url('assets/dist/assets/modules/moment.min.js');?>"></script>
  <script src="<?= base_url('assets/dist/assets/js/stisla.js');?>"></script>
  
  <!-- JS Libraries -->
  <script src="<?= base_url('assets/dist/assets/modules/simple-weather/jquery.simpleWeather.min.js');?>"></script>
  <script src="<?= base_url('assets/dist/assets/modules/chart.min.js');?>"></script>
  <script src="<?= base_url('assets/dist/assets/modules/jqvmap/dist/jquery.vmap.min.js');?>"></script>
  <script src="<?= base_url('assets/dist/assets/modules/jqvmap/dist/maps/jquery.vmap.world.js');?>"></script>
  <script src="<?= base_url('assets/dist/assets/modules/summernote/summernote-bs4.js');?>"></script>
  <script src="<?= base_url('assets/dist/assets/modules/chocolat/dist/js/jquery.chocolat.min.js');?>"></script>

  <!-- Page Specific JS File -->
  <script src="<?= base_url('assets/dist/assets/js/page/index-0.js');?>"></script>
  
  <!-- Template JS File -->
  <script src="<?= base_url('assets/dist/assets/js/scripts.js');?>"></script>
  <script src="<?= base_url('assets/dist/assets/js/custom.js');?>"></script>

    <!-- General JS Scripts -->
  <script src="<?= base_url('assets/dist/assets/modules/popper.js');?>"></script>
  <script src="<?= base_url('assets/dist/assets/modules/tooltip.js');?>"></script>
  
  <!-- JS Libraies -->
  <script src="<?= base_url('assets/dist/assets/modules/sweetalert/sweetalert.min.js');?>"></script>

  <!-- Page Specific JS File -->
  <script src="<?= base_url('assets/dist/assets/js/page/modules-sweetalert.js');?>"></script>
  
</body>
</html>
