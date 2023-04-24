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
                    <img src="image/prohib.png" class="mx-auto d-block" alt="" width="30%">
                    <div class="position-relative">
                        <div class="d-flex justify-content-center mt-4" style="position: relative; left: 50px;">
                            <div class="col-md-4">
                                <div class="btn-group">
                                    <a href="Packagingnolog.php" class="btn btn-success">Guidance</a>
                                    <a href="Dangerousnolog.php" class="btn btn-success">Dangerous Goods</a>
                                    <a href="Prohibitednolog.php" class="btn btn-success">Prohibited</a>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="wrap">
                    <div class="container">
                        <div class="position-relative">
                            <div class="d-flex justify-content-center mt-4">
                                <div class="col-md-7">
                                    <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseLayout" aria-expanded="false" aria-controls="collapseLayout">
                                        <h5 style="color: black;" class="sb-sidenav-collapse-arrow">Firearms<i class="fas fa-angle-down" style="position: relative; left: 16cm;"></i></h5>
                                    </a>
                                    <div class="collapse" id="collapseLayout" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                            <ul style="position: relative; bottom: 10px; left: 18px;">
                                                <li>All kinds of ammunitions</li>
                                                <li>firearms</li>
                                                <li>bullets</li>
                                                <li>grenades</li>
                                                <li>bombs</li>
                                                <li>etc</li>
                                            </ul>
                                        </nav>
                                    </div>

                                    <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                    <h5 style="color: black;" class="sb-sidenav-collapse-arrow">Explosive Materials<i class="fas fa-angle-down" style="position: relative; left: 13.5cm;"></i></h5>
                                    </a>
                                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                            <ul style="position: relative; bottom: 10px; left: 18px;">
                                                <li>Easily explosive materials like explosive materials & detonator</li>
                                                <li>gunpowder</li>
                                                <li>firecrackers</li>
                                                <li>etc</li>
                                            </ul>

                                        </nav>
                                    </div>


                                    <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#cllpsPgs" aria-expanded="false" aria-controls="cllpsPgs">
                                    <h5 style="color: black;" class="sb-sidenav-collapse-arrow">Flammable<i class="fas fa-angle-down" style="position: relative; left: 15.48cm;"></i></h5>
                                    </a>
                                    <div class="collapse" id="cllpsPgs" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                            <p style="position: relative; bottom: 10px; left: 18px;"> All kinds of flammable material, including liquid, gas and solid chemistry.</p>
                                            <p style="position: relative; bottom: 10px; left: 18px;"> Like gasoline, kerosene, alcohol, varnish, diesel fuel,aerosol/ spray tube, lighters, gas holder, phosphorus, sulfur, matches, etc</p>
                                        </nav>
                                    </div>

                                    <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePag" aria-expanded="false" aria-controls="collapsePag">
                                    <h5 style="color: black;" class="sb-sidenav-collapse-arrow">Drugs<i class="fas fa-angle-down" style="position: relative; left: 16.7cm;"></i></h5>
                                    </a>
                                    <div class="collapse" id="collapsePag" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                            <p style="position: relative; bottom: 10px; left: 18px;"> 
                                                All kinds of narcotic drugs like, opium (including flowers, sprout and opium leaf),
                                                morn, cocaine, heroin, marijuana, methamphetamine, ephedrine, and other related products</p>
                                        </nav>
                                    </div>

                                    <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapse" aria-expanded="false" aria-controls="collapse">
                                    <h5 style="color: black;" class="sb-sidenav-collapse-arrow">Chemical<i class="fas fa-angle-down" style="position: relative; left: 15.95cm;"></i></h5>
                                    </a>
                                    <div class="collapse" id="collapse" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                            <p style="position: relative; bottom: 10px; left: 18px;">
                                                All kinds of corrosive materials like sulfuric acid,
                                                hydrochloric acid, nitric acid, organic solvents,
                                                pesticide, hydrogen peroxide, and other hazardous chemicals</p>
                                            </a>
                                        </nav>
                                    </div>

                                    <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collaps" aria-expanded="false" aria-controls="collaps">
                                    <h5 style="color: black;" class="sb-sidenav-collapse-arrow">Radioactive<i class="fas fa-angle-down" style="position: relative; left: 15.4cm;"></i></h5>
                                    </a>
                                    <div class="collapse" id="collaps" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                            <p style="position: relative; bottom: 10px; left: 18px;">
                                                Various types of radioactive elements and its depository
                                                like uranium, cobalt, radium and plutonium</p>
                                            </a>
                                        </nav>
                                    </div>

                                    <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collap" aria-expanded="false" aria-controls="collap">
                                    <h5 style="color: black;" class="sb-sidenav-collapse-arrow">Propaganda Materials<i class="fas fa-angle-down" style="position: relative; left:12.9cm;"></i></h5>
                                    </a>
                                    <div class="collapse" id="collap" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                            <p style="position: relative; bottom: 10px; left: 18px;">
                                                Goods that endanger national security and stability of publication for social and political like,
                                                propaganda materials and its printing materials etc</a>
                                            </p>
                                        </nav>
                                    </div>

                                    <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#colla" aria-expanded="false" aria-controls="colla">
                                    <h5 style="color: black;" class="sb-sidenav-collapse-arrow">Organs<i class="fas fa-angle-down" style="position: relative; left: 16.42cm;"></i></h5>
                                    </a>
                                    <div class="collapse" id="colla" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                            <p style="position: relative; bottom: 10px; left: 18px;">
                                                Variuos goods that can harm health, like animal bones or other limbs,
                                                animal organs, unproccesed animal skins,
                                                and animal bones without or before safely process</p>
                                        </nav>
                                    </div>

                                    <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePgs" aria-expanded="false" aria-controls="collapsePgs">
                                    <h5 style="color: black;" class="sb-sidenav-collapse-arrow">Prohibited by Law<i class="fas fa-angle-down" style="position: relative; left: 13.82cm;"></i></h5>
                                    </a>
                                    <div class="collapse" id="collapsePgs" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                            <p style="position: relative; bottom: 10px; left: 18px;">
                                                Goods that are prohibited to be circulated according to laws and
                                                regulation of country like, document, state secret information, currency,
                                                counterfeit money, all kinds of securities paper, replica weapons,
                                                sharp weapon, art goods, rare animals and finished product</p>
                                        </nav>
                                    </div>

                                    <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePg" aria-expanded="false" aria-controls="collapsePg">
                                    <h5 style="color: black;" class="sb-sidenav-collapse-arrow">Inappropirate Packaging Material<i class="fas fa-angle-down" style="position: relative; left: 10.15cm;"></i></h5>
                                    </a>
                                    <div class="collapse" id="collapsePg" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                            <p style="position: relative; bottom: 10px; left: 18px;">
                                                Goods with inappropriate packaging, which can endanger, caused pollution,
                                                or goods that can pollute partial or total part of other shipment</p>
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