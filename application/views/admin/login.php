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

  <!-- Start GA -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <!-- <img src="<?= base_url('assets/dist/assets/img/stisla-fill.svg');?>" alt="logo" width="100" class="shadow-light rounded-circle"> -->
              <h1>Mojosari Indah</h1>
            </div>
            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>
              <div class="card-body">
                <form method="POST" action="<?= site_url('admin/login');?>" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="username" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Isikan username terlebih dahulu!
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Lupa Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                     Isikan password terlebih dahulu!
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-3 text-muted text-center">
              Belum punya akun? <a href="<?= site_url('Admin/registerView');?>">Register</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>

<!-- SweetAlert -->
<script>
  <?=var_dump($this->session);?>
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
  
  <!-- JS Libraies -->
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
