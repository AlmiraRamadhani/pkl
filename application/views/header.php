<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Buletin BBWS Brantas</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('tema/blog-home/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('tema/blog-home/'); ?>css/blog-home.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Buletin BBWS Brantas</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <?php echo anchor('buletin/index', 'Home', 'class="nav-link"') ?>
          </li>
          <li class="nav-item">
            <?php echo anchor('crud/index', 'Daftar Gambar Buletin', 'class="nav-link"') ?>
          </li>
          <li class="nav-item">
            <?php echo anchor('crud/form_add', 'Tambah Data Buletin', 'class="nav-link"') ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>