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
                    <img src="image/delivery.png" class="mx-auto d-block" alt="" width="30%">
                    <div class="position-relative">
                        <div class="d-flex justify-content-center mt-4" style="position: relative; left: 10px;">
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

                <h4 class="judul mt-4" style="text-align:center">Terms of Delivery Service</h4>

                <br>
                <ol>
                    <li>The sender must pack the package properly to protect package content during transportation. If a loss arises due to improper packaging, the loss is the responsibility of the sender.</li>
                    <li>The weight used as a reference in billing is original weight or dimensional weight which has greater value. If there is a weight addition caused by the additional packaging process carried out by Fidem Express, then the billing reference is weight after repackaging.</li>
                    <li>The sender must notify clearly and correctly the contents and value of the package. Incorrect information regarding this matter is entirely the responsibility of the sender.</li>
                    <li>Fidem Express prohibits the delivery of items such as bodies or it parts, live or dead animals, drugs, weapons, ammunition, other combustible materials, high-value art items, securities, money, precious metals, high-value jewelry or the like and items prohibited by applicable law in Indonesia based on the '45 Constitution.</li>
                    <li>Fidem Express has the right but is not obliged to inspect package contents to ensure that the goods sent do not violate applicable laws. If without the knowledge of Fidem Express, the sender sends items that are prohibited in point 4, the sender hereby releases Fidem Express from all damage or other costs and at the demands of any party.</li>
                    <li>In the shipping process, Fidem Express does not guarantee that the entire process will proceed smoothly and properly, caused by events that may arise beyond the ability of Fidem Express in the area through which Fidem Express transportation passes.</li>
                    <li>The sender is responsible for protecting the package with adequate insurance and bearing the applicable premium costs. Compensation for goods insured is in accordance with the insurance provisions that apply to Fidem Express. If the sender does not use insurance, the payment of the replacement cost for the lost or damaged items, the maximum is 10 x (ten times) the shipping cost or the lowest value of the goods taken, the maximum of replacement value is Rp.1.000.000 (one million Rupiah). Especially for document shipments, the maximum reimbursement value is IDR 100.000 (one hundred thousand rupiah). If the sender use insurance, the payment of the replacement cost for the lost or damaged items, the maximum of replacement value is IDR 20.000.000 (Twenty million Rupiah). Especially for document shipments, the maximum reimbursement value is IDR 2.000.000 (Two million rupiah).</li>
                    <li>Fidem Express will not provide compensation to the sender as a result of events or things that are beyond the control ability of Fidem Express or damage due to natural disasters (Force Majeure).</li>
                    <li>If there is no complaint from the recipient when the package is delivered, then the package is deemed to have been received properly and correctly.</li>
                    <li>Complaints / claims for loss or damage must be submitted by the sender (not the recipient) no later than 3 (three) days from the receipt of the item along with the related documents.</li>
                    <li>In addition to the agreement or terms and conditions written on this receipt, Fidem Express cannot be prosecuted and burdened with an agreement or other legal basis except with a written agreement approved by the person in charge of Fidem Express authorized.</li>
                    <li>When submitting goods to Fidem Express, the sender is deemed to have read and agreed to all the terms and conditions of delivery stated in this receipt without any coercion from any party, and free Fidem Express from all claims or forms of compensation.</li>
                </ol>
                </div>
            </div>
        </div>
        </div>
        </div>

        <script src="./css/main.js"></script>
    </body>
    <footer class="footer d-flex justify-content-center" style="background-color: #1cb688; height: 50px;">
        <div class="isi">
            <p class="foot_remark" style="color: white; font-size: small;  position: relative; top: 15px; font-family: Times New Roman; ">© 2021 PT. FIDEM Express All Rights Reserved</p>
        </div>
    </footer>

</html>