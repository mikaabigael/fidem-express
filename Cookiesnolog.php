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
          <img src="image/Cookies.png" class="mx-auto d-block" alt="" width="30%">
        </div>

        <div class="position-relative">
                        <div class="d-flex justify-content-center mt-4" style="position: relative; left: 30px;">
                            <div class="col-md-4">
                                <div class="btn-group">
                                    <a href="deliverynolog.php" class="btn btn-success">Delivery T&C</a>
                                    <a href="TCnolog.php" class="btn btn-success">T&C</a>
                                    <a href="Privacynolog.php" class="btn btn-success">Privacy Policy</a>
                                    <a href="Cookiesnolog.php" class="btn btn-success">Cookies Policy</a>
                                </div>
                            </div>
                        </div>
                    </div>

	<h4 class="judul mt-4" style="text-align: center"> Cookies Policy </h4>

	<h6>Effective Date : June, 2021</h6>


	<p>This is the Cookie Policy for Fidem Express Website, accessible from http://localhost/fidemexpress/</p>
	 

	<h6>What Are Cookies</h6>
	<p>As is common practice with almost all professional websites this site uses cookies, which are tiny files that are downloaded to your computer, to improve your experience. This page describes what information they gather, how we use it and why we sometimes need to store these cookies. We will also share how you can prevent these cookies from being stored however this may downgrade or 'break' certain elements of the sites functionality.</p>
	 

	<h6>How we use cookies</h6>
	<p>We use cookies for a variety of reasons detailed below. Unfortunately in most cases there are no industry standard options for disabling cookies without completely disabling the functionality and features they add to this site. It is recommended that you leave on all cookies if you are not sure whether you need them or not in case they are used to provide a service that you use.</p>
	 

	<h6>Disabling Cookies</h6>
	<p>You can prevent the setting of cookies by adjusting the settings on your browser (see your browser Help for how to do this). Be aware that disabling cookies will affect the functionality of this and many other websites that you visit. Disabling cookies will usually result in also disabling certain functionality and features of the this site. Therefore it is recommended that you do not disable cookies.</p>
	 
	<ol>
	<h6>The Cookies We Set</h6>

  <div class="isi" style="position: relative; left: 20px;">
	<h6><li>Account related cookies</li></h6>
	<p>If you create an account with us then we will use cookies for the management of the signup process and general administration. These cookies will usually be deleted when you log out however in some cases they may remain afterwards to remember your site preferences when logged out.</p>

	<h6><li>Login related cookies</li></h6>
	<p>We use cookies when you are logged in so that we can remember this fact. This prevents you from having to log in every single time you visit a new page. These cookies are typically removed or cleared when you log out to ensure that you can only access restricted features and areas when logged in.</p>

	<h6><li>Orders processing related cookies</li></h6>
	<p>This site offers e-commerce or payment facilities and some cookies are essential to ensure that your order is remembered between pages so that we can process it properly.</p>

	<h6><li>Forms related cookies</h6></li>

	<p>When you submit data to through a form such as those found on contact pages or comment forms cookies may be set to remember your user details for future correspondence.</p>
	</ol>
  </div>

  <div class="isi" style="position: relative; bottom: 20px;">
	<h6>Contact Us</h6>
	<p>However if you are still looking for more information then you can contact us through one of our preferred contact feature on our website</p>
  </div>


      </div>
    </div>
    </div>
    </div>
    <script src="./css/main.js"></script>
    <footer class="footer d-flex justify-content-center" style="background-color: #1cb688; height: 50px; position: relative; top: 120px;">
      <div class="isi">
        <p class="foot_remark" style="color: white; font-size: small;  position: relative; top: 15px; font-family: Times New Roman; ">© 2021 PT. FIDEM Express All Rights Reserved</p>
      </div>
    </footer>
  </body>

</html>