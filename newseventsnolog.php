<?php

require "functions.php";


?>

<!DOCTYPE html>
<html>

<head>
  <title>FIDEM EXPRESS</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style2.css">
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-success" style="background-color: #1cb688;">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="image/logo_putih.png" alt="navbar-brand" width="150"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-3 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php" style="color: white; font-size: 15px;"><b>Home</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="login.php" style="color: white; font-size: 15px;"><b>Order</b></a>
            </li>
            <li class="nav-item dropdown">
              <a role="button" class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" style="color: white; font-size: 15px;">
                <b>Information</b>
              </a>
              <ul class="dropdown-menu mt-2" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item" href="faqnolog.php">FAQ</a></li>
                <li><a class="dropdown-item" href="Packagingnolog.php">Packaging Information</a></li>
                <li><a class="dropdown-item" href="Deliverynolog.php">Term</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a role="button" class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false" style="color: white; font-size: 15px;">
                <b>About Us</b>
              </a>
              <ul class="dropdown-menu mt-2" aria-labelledby="dropdownMenuButton3">
                <li><a class="dropdown-item" href="companyprofilnolog.php">Company Profile</a></li>
                <li><a class="dropdown-item" href="newseventsnolog.php">News & Events</a></li>
                <li><a class="dropdown-item" href="careernolog.php">Career</a></li>
              </ul>
            </li>
          </ul>
          <div id='form-input'>
            <form action="cekresi.php" method="get" class="d-flex justify-content-center">
              <input name="cari" id="cari" class="form-control me-2" type="search" placeholder="Cek Resi" aria-label="Search">
              <input name="id" id="id" class="kirim me-2" type="hidden" value="<?php echo $row['id'] ?>">
              <input value="Search" type="submit" role="button" class="btn btn-outline-dark border border-2 me-md-4" style="color :black; background-color: #fff;">
            </form>
          </div>
        <a href="login.php" class="btn btn-primary">Login/Registrasi</a>
      </div>
    </div>
  </nav>


  <div class="container pt-md-50 pt-15 pb-20">
    <div class="row">
      <div class="col-md-15">
        <br>
        <br>
        <img src="image/NewsEvents.png" class="mx-auto d-block" alt="" width="35%">
        <br>
      </div>
    </div>
  </div>


  <br>
  <figure class="text-center">
    <blockquote class="blockquote">
      <p>News and Events</p>
    </blockquote>
    <figcaption class="blockquote-footer">
      all about us <cite title="Source Title">FIDEM Express</cite>
    </figcaption>
  </figure>
  <br>

  <div class="isi" style="position: relative; left: 15%; width: 85%; ">
    <h4 class="bg-success text-white" style="width: 85%;">New Style Send Package</h4>
    <div class="text-justify " style="width:85%;">
      <p>Bringing ease of sending the latest packages! Send packages directly from your location,
        enjoy the free pick up package on the spot without the minimum number and weight of packages. 
        do not use straightforward complicated, do not use long!</p>
        <br>

      <h4 class="bg-success text-white" >Division Serves</h4>
      <p>FIDEM Express  serves shipments of time-sensitive packages and documents for domestic 
      destinations via  from pick-up to delivery. This Service uses the fastest transportation means 
      available and serves a variety of services in line with the customers’ needs.</p>
      <br>
      
      <h4 class="bg-success text-white" >Service Delivery </h4>
      <p>service delivery of highly valued goods and documents directly handled by the officers 
      (hand carry) prioritizing the certainty, security and speed of delivery starting from the pick-up 
      process until personally received by the recipients.</p>
      <br>

    </div>
  </div>


  <footer class="footer d-flex justify-content-center" style="background-color: #1cb688; height: 50px;">
    <div class="isi">
      <p class="foot_remark" style="color: white; font-size: small;  position: relative; top: 15px; font-family: Times New Roman; ">© 2021 PT. FIDEM Express All Rights Reserved</p>
    </div>
  </footer>

  <script src="./css/main.js"></script>
  </body>

</html>