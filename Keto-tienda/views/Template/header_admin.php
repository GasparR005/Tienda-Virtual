<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="description" content="Tienda Virtual Dianny-Keto">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Gaspar Reyes">
  <meta name="theme-color" content="#009688">
  <link rel="shortcut icon" href="<?= media(); ?>/img/letra-k.ico">
  <title><?= $data['page_tag'] ?></title>


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= media(); ?>/plugins/fontawesome/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= media(); ?>/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= media(); ?>/css/mainStiles.css">
</head>



<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">


  <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
       <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fas fa-users"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         
          <div class="dropdown-divider"></div>
          <a href="<?= base_url(); ?>/opciones" class="dropdown-item">
            <i class="fas fa-cogs"></i> Settings
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?= base_url(); ?>/perfil" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> Profile
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?= base_url(); ?>/logout" class="dropdown-item">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
<?php require_once ("nav_admin.php")?>
