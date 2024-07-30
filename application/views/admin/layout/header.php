
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Dashboard &mdash; Stisla</title>

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
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?= base_url('assets/dist/assets/img/avatar/avatar-1.png');?>" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Role : <?=$this->session->userdata('role')?></div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?=site_url('admin/logout')?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <!-- <li class="menu-header">Dashboard</li> -->
            <li class="dropdown active">
              <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Manajemen Data Penduduk</li>
            <li class="dropdown">
              <a href="<?=site_url('penduduk/index')?>" class="nav-link"><i class="fas fa-users"></i> <span>Data Penduduk</span></a>
              <a href="<?=site_url('penghuni/index')?>" class="nav-link"><i class="fas fa-users"></i> <span>Data Penghuni</span></a>
            </li>
            <li class="menu-header">Manajemen Data Keuangan</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Data Keuangan</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="forms-advanced-form.html">Data Iuran</a></li>
                <li><a class="nav-link" href="forms-editor.html">Editor</a></li>
                <li><a class="nav-link" href="forms-validation.html">Validation</a></li>
              </ul>
            </li>
            <li class="menu-header">Manajemen Data Pengurus</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Data Pengurus</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="forms-advanced-form.html">Pengurus RT</a></li>
              </ul>
            </li>
            <li class="menu-header">Manajemen Akun Admin</li>
            <li class="dropdown">
              <a href="#" class="nav-link"><i class="far fa-user"></i> <span>Auth</span></a>
            </li>
          </ul>
        </aside>
      </div>


      
      