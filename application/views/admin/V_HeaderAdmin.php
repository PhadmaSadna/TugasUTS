<!DOCTYPE html>
<html>
<head>
  <title>Introduction CI With Bootstrap</title>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/admin/fontawesome/web-fonts-with-css/css/fontawesome.min.css')?>">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!-- Data Tables -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>


</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url()?>Login/">Data Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url()?>Guide/">Data Guide</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url()?>Customer/">Data Customer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url()?>Paket_Tour/">Data Paket Tour</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url()?>BookingTour/">Data Booking</a>
        </li>
      </ul>
    </div>
  </nav>
  <br>