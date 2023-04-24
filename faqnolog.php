<?php

require "functions.php";

// session_start();
// if (!isset($_SESSION["login"])) {
//   header("Location: login.php");
// }

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
          <img src="image/faq.png" class="mx-auto d-block" alt="" width="30%">
        </div>
        <div class="wrap">
          <div class="container">
            <div class="position-relative">
              <div class="d-flex justify-content-center">
                <div class="col-md-10">

                <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseLayout" aria-expanded="false" aria-controls="collapseLayout">
                  <h5 style="color: black;" class="sb-sidenav-collapse-arrow">What are the advantages of FIDEM Express?<i class="fas fa-angle-down" style="position: relative; left: 16cm;"></i></h5>
                </a>
                <div class="collapse" id="collapseLayout" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                  <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <p style="position: relative; bottom: 10px; left: 18px;">
                      You can easily find out the shipping tariff,
                      and check the nearest drop point (branch office)
                      to your location through the application and website.
                      The facilities trace & tracking system will make you easier
                      to track your packages' location during the shipping process.
                      FIDEM Express Drop points operate every day
                      (including weekends, and National Holidays)
                    </p>
                  </nav>
                </div>
                <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                  <h5 style="color: black;" class="sb-sidenav-collapse-arrow">How is FIDEM Express payment system?<i class="fas fa-angle-down" style="position: relative; left: 16.9cm;"></i></h5>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                  <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <p style="position: relative; bottom: 10px; left: 18px;">
                      For non-corporate customers, the payments should be
                      in cash when sending the package through drop point.
                      For corporate customers, the payment system can be
                      made with special terms and conditions.</p>
                  </nav>
                </div>

                <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#cllpsPgs" aria-expanded="false" aria-controls="cllpsPgs">
                  <h5 style="color: black;" class="sb-sidenav-collapse-arrow">How do you check FIDEM Express waybill number ?<i class="fas fa-angle-down" style="position: relative; left: 14.2cm;"></i></h5>
                </a>
                <div class="collapse" id="cllpsPgs" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                  <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <p style="position: relative; bottom: 10px; left: 18px;">
                      You can check FIDEM Express waybill number on
                      FIDEM Express website www.fidem.co.id
                      or mobile application.</p>
                  </nav>
                </div>

                <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePag" aria-expanded="false" aria-controls="collapsePag">
                  <h5 style="color: black;" class="sb-sidenav-collapse-arrow">How and when do you get FIDEM Express waybill number ?<i class="fas fa-angle-down" style="position: relative; left: 12.3cm;"></i></h5>
                </a>

                <div class="collapse" id="collapsePag" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                  <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <p style="position: relative; bottom: 10px; left: 18px;">
                      Waybill numbers will be given directly by FIDEM Express
                      when the package is sent via drop point.</p>
                  </nav>
                </div>

                <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapse" aria-expanded="false" aria-controls="collapse">
                  <h5 style="color: black;" class="sb-sidenav-collapse-arrow">How do you proceed a claim?<i class="fas fa-angle-down" style="position: relative; left: 19.4cm;"></i></h5>
                </a>
                <div class="collapse" id="collapse" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                  <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <p style="position: relative; bottom: 10px; left: 18px;">
                      For proceed the claim, you can contact
                      J&T Express call center 08123456789.
                      Then you can take the claim form at the nearest
                      drop point and complete all the needed requirements.</a>
                    </p>
                  </nav>
                </div>

                <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collaps" aria-expanded="false" aria-controls="collaps">
                  <h5 style="color: black;" class="sb-sidenav-collapse-arrow"> How to send a package with insurance service?<i class="fas fa-angle-down" style="position: relative; left: 15.3cm;"></i></h5>
                </a>
                <div class="collapse" id="collaps" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                  <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <p style="position: relative; bottom: 10px; left: 18px;">
                      You can tell the FIDEM Express drop point
                      admin that you want to insure your shipment goods.
                      Then, J&T Express will calculate your package
                      insurance costs with a calculation 0.2% from
                      the price of the invoice.</p>
                    </a>
                  </nav>
                </div>

                <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collap" aria-expanded="false" aria-controls="collap">
                  <h5 style="color: black;" class="sb-sidenav-collapse-arrow">What if there is damage and loss of package when shipping?<i class="fas fa-angle-down" style="position: relative; left: 12cm;"></i></h5>
                </a>
                <div class="collapse" id="collap" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                  <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <p style="position: relative; bottom: 10px; left: 18px;">
                      If you have made an insurance payment and completed all claim documents,
                      then FIDEM Express will make a claim payment accordancing with the value of the goods,
                      with maximum Rp. 20.000.000,- (Twenty Million Rupiah)
                      If you do not use shipping insurance, the claim will be paid 10 times of shipping rates,
                      with maximum Rp. 1,000,000 - (One Million Rupiah).</p>
                  </nav>
                </div>

                <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#colla" aria-expanded="false" aria-controls="colla">
                  <h5 style="color: black;" class="sb-sidenav-collapse-arrow">What happens if the customer sends a package containing Dangerous Goods?<i class="fas fa-angle-down" style="position: relative; left: 7.8cm;"></i></h5>
                </a>
                <div class="collapse" id="colla" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                  <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <p style="position: relative; bottom: 10px; left: 18px;">
                      For customers who intentionally send
                      prohibited items or dangerous goods, according to
                      Pasal 47 UU No. 38 Th. 2009, the customer will be sentenced
                      to a maximum jail sentence of 5 (five) years or
                      a maximum fine of Rp. 1,000,000,000 (One Billion Rupiah) and
                      the delivery service provider
                      (FIDEM Express) cannot be held liable for the incident.</p>
                    </a>
                  </nav>
                </div>

                <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePgs" aria-expanded="false" aria-controls="collapsePgs">
                <h5 style="color: black;" class="sb-sidenav-collapse-arrow">How to report complaints and advices?<i class="fas fa-angle-down" style="position: relative; left: 17.1cm;"></i></h5>
                </a>
                <div class="collapse" id="collapsePgs" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                  <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <p style="position: relative; bottom: 10px; left: 18px;">
                    You can contact our 24-hour customer service at 08123456789.</p>
                  </nav>
                </div>

                <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePg" aria-expanded="false" aria-controls="collapsePg">
                <h5 style="color: black;" class="sb-sidenav-collapse-arrow">What kind of FIDEM Express services?<i class="fas fa-angle-down" style="position: relative; left: 17.5cm;"></i></h5>
                </a>
                <div class="collapse" id="collapsePg" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                  <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <p style="position: relative; bottom: 10px; left: 18px;">
                      Regular / EZ: shipping service throughout
                      Indonesia with an estimated delivery time of
                      2-3 working days, depend on the delivery destination.</p>
                  </nav>
                </div>

                <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collps" aria-expanded="false" aria-controls="collpse">
                <h5 style="color: black;" class="sb-sidenav-collapse-arrow">How to change the address when the package has been sent?<i class="fas fa-angle-down" style="position: relative; left: 11.8cm;"></i></h5>
                </a>
                <div class="collapse" id="collps" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                  <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <p style="position: relative; bottom: 10px; left: 18px;">
                      For a replacement address when the package has been sent,
                      you can immediately contact the FIDEM Express
                      call center at 08123456789 for further assistance.</p>
                  </nav>
                </div>

                <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collpse" aria-expanded="false" aria-controls="collpse">
                <h5 style="color: black;" class="sb-sidenav-collapse-arrow">How to calculate the package with volumetric formula?<i class="fas fa-angle-down" style="position: relative; left: 13.3cm;"></i></h5>
                </a>
                <div class="collapse" id="collpse" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                  <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <p style="position: relative; bottom: 10px; left: 18px;"> (Length x Width x Height) X 1 Kg / 20000</p>
                  </nav>
                </div>

                <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collpsPgs" aria-expanded="false" aria-controls="collpsPgs">                 
                <h5 style="color: black;" class="sb-sidenav-collapse-arrow">How to calculate the package with wooden packing formula?<i class="fas fa-angle-down" style="position: relative; left: 11.9cm;"></i></h5>
                </a>
                <div class="collapse" id="collpsPgs" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                  <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <p style="position: relative; bottom: 10px; left: 18px;">
                      The calculation of shipping costs with wooden packing formula is:
                      Actual Weight + (30% x Actual Weight)
                      If 30% x actual weight is less than 3Kg, it will be rounded to 3Kg.</p>
                  </nav>
                </div>

                <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#colpsePages" aria-expanded="false" aria-controls="colapsePages">
                <h5 style="color: black;" class="sb-sidenav-collapse-arrow">How to send liquid goods through FIDEM Express?<i class="fas fa-angle-down" style="position: relative; left: 14.37cm;"></i></h5>
                <br>
                </a>
                <div class="collapse" id="colpsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                  <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <p style="position: relative; bottom: 10px; left: 18px;">
                      For liquid goods delivery can only be done through landline routes.
                      For now FIDEM Express has not served liquid shipping across the islands.</p>
                    <br>
                    <br>
                  </nav>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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