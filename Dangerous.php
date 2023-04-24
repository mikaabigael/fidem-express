<?php

require "functions.php";

session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}

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
<?php
$id = $_GET['id'];
$query = "SELECT * from tb_user where id = '$id'";
$query_exec = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($query_exec)) :
?>

    <body>
        <nav class="navbar navbar-expand-lg navbar-success" style="background-color: #1cb688;">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.php?id=<?php echo $row['id'] ?>">
                    <img src="image/logo_putih.png" alt="navbar-brand" width="150"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-3 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.php?id=<?php echo $row['id'] ?>" style="color: white; font-size: 15px;"><b>Home</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="order.php?id=<?php echo $row['id'] ?>" style="color: white; font-size: 15px;"><b>Order</b></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a role="button" class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" style="color: white; font-size: 15px;">
                                <b>Information</b>
                            </a>
                            <ul class="dropdown-menu mt-2" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item" href="faq.php?id=<?php echo $row['id'] ?>">FAQ</a></li>
                                <li><a class="dropdown-item" href="Packaging.php?id=<?php echo $row['id'] ?>">Packaging Information</a></li>
                                <li><a class="dropdown-item" href="Delivery.php?id=<?php echo $row['id'] ?>">Term</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a role="button" class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false" style="color: white; font-size: 15px;">
                                <b>About Us</b>
                            </a>
                            <ul class="dropdown-menu mt-2" aria-labelledby="dropdownMenuButton3">
                                <li><a class="dropdown-item" href="companyprofil.php?id=<?php echo $row['id'] ?>">Company Profile</a></li>
                                <li><a class="dropdown-item" href="newsevents.php?id=<?php echo $row['id'] ?>">News & Events</a></li>
                                <li><a class="dropdown-item" href="career.php?id=<?php echo $row['id'] ?>">Career</a></li>
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
                    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-2">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color: white;" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" style="background-color: #1cb688; color:white"><?php echo $row['nama'] ?></a>
                                </li>
                                <li><a class="dropdown-item mt-1" href="settings.php?id=<?php echo $row['id'] ?>">Settings</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container pt-md-50 pt-15 pb-20">
            <div class="row">
                <div class="col-md-15">
                    <img src="image/warning.png" class="mx-auto d-block" alt="" width="30%">
                </div>
                <div class="position-relative">
                    <div class="d-flex justify-content-center mt-4" style="position: relative; left: 50px;">
                        <div class="col-md-4">
                            <div class="btn-group">
                                <a href="Packaging.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Guidance</a>
                                <a href="Dangerous.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Dangerous Goods</a>
                                <a href="Prohibited.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Prohibited</a>
                                <!-- <a href="delivery.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Delivery T&C</a> -->
                                <!-- <a href="TC.php?id=<?php echo $row['id'] ?>" class="btn btn-success">T&C</a> -->
                                <!-- <a href="Privacy.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Privacy Policy</a> -->
                                <!-- <a href="Cookies.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Cookies Policy</a> -->
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
            <div class="wrap" style="position: relative; left: 60px;">
                <div class="container">
                    <div class="position-relative">
                        <div class="d-flex justify-content-center mt-4">
                            <div class="col-md-10">
                                <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseLayout" aria-expanded="false" aria-controls="collapseLayout">
                                    <h5 style="color: black;" class="sb-sidenav-collapse-arrow">Dangerous Goods Class 1<i class="fas fa-angle-down" style="position: relative; left: 16.09cm;"></i></h5>
                                </a>
                                <div class="collapse" id="collapseLayout" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <ul style="position: relative; bottom: 10px; left: 18px;">
                                            <li>Fireworks</li>
                                            <li>Ammunition/cartridges </li>
                                            <li>Airbag inflators</li>
                                            <li>TNT compositions</li>
                                            <li>Nail Polish</li>
                                            <li>Flares</li>
                                        </ul>
                                    </nav>
                                </div>

                                <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                    <h5 style="color: black;" class="sb-sidenav-collapse-arrow">Dangerous Goods Class 2<i class="fas fa-angle-down" style="position: relative; left: 16cm;"></i></h5>
                                </a>
                                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <ul style="position: relative; bottom: 10px; left: 18px;">
                                            <li>Aerosol</li>
                                            <li>Gas Cylinder (filled)</li>
                                            <li>Silicon</li>
                                            <li>Fire Stop</li>
                                            <li>Nail Polish</li>
                                            <li>Gas CO2</li>
                                        </ul>
                                    </nav>
                                </div>

                                <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapse" aria-expanded="false" aria-controls="collapse">
                                    <h5 style="color: black;" class="sb-sidenav-collapse-arrow">Dangerous Goods Class 3<i class="fas fa-angle-down" style="position: relative; left: 16cm;"></i></h5>
                                </a>
                                <div class="collapse" id="collapse" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <ul style="position: relative; bottom: 10px; left: 18px;">
                                            <li>Glue </li>
                                            <li>Parfume </li>
                                            <li>Paint Cans </li>
                                            <li>Oil </li>
                                            <li>Sanpoly </li>
                                            <li>Toner </li>
                                            <li>Gasoline gauge</li>
                                        </ul>

                                    </nav>
                                </div>


                                <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collaps" aria-expanded="false" aria-controls="collaps">
                                <h5 style="color: black;" class="sb-sidenav-collapse-arrow">Dangerous Goods Class 4<i class="fas fa-angle-down" style="position: relative; left: 16cm;"></i></h5>
                                </a>
                                <div class="collapse" id="collaps" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <ul style="position: relative; bottom: 10px; left: 18px;">
                                            <li>Alkali metals</li>
                                            <li>Alumunium phosephide </li>
                                            <li>Carbon</li>
                                            <li>Camphor</li>
                                            <li>Oily fabrics</li>
                                        </ul>
                                </div>

                                <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePgs" aria-expanded="false" aria-controls="collapsePgs">
                                <h5 style="color: black;" class="sb-sidenav-collapse-arrow">Dangerous Goods Class 5<i class="fas fa-angle-down" style="position: relative; left: 16cm;"></i></h5>
                                </a>
                                <div class="collapse" id="collapsePgs" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <ul style="position: relative; bottom: 10px; left: 18px;">
                                            <li>Organic peroxides</li>
                                            <li>Oxidizing substances</li>
                                        </ul>
                                    </nav>
                                </div>

                                <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collap" aria-expanded="false" aria-controls="collaps">
                                <h5 style="color: black;" class="sb-sidenav-collapse-arrow">Dangerous Goods Class 6<i class="fas fa-angle-down" style="position: relative; left: 16cm;"></i></h5>
                                </a>
                                <div class="collapse" id="collap" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <ul style="position: relative; bottom: 10px; left: 18px;">
                                            <li>Pesticide</li>
                                            <li>Toner Powder</li>
                                            <li>Insecticide</li>
                                        </ul>
                                    </nav>
                                </div>

                                <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collpse" aria-expanded="false" aria-controls="collpse">
                                <h5 style="color: black;" class="sb-sidenav-collapse-arrow">Dangerous Goods Class 7<i class="fas fa-angle-down" style="position: relative; left: 16cm;"></i></h5>
                                </a>
                                <div class="collapse" id="collpse" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <ul style="position: relative; bottom: 10px; left: 18px;">
                                            <li>Radioactive materials</li>
                                        </ul>
                                    </nav>
                                </div>

                                <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collpsPgs" aria-expanded="false" aria-controls="collpsPgs">
                                <h5 style="color: black;" class="sb-sidenav-collapse-arrow">Dangerous Goods Class 8<i class="fas fa-angle-down" style="position: relative; left: 16cm;"></i></h5>
                                </a>
                                <div class="collapse" id="collpsPgs" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <ul style="position: relative; bottom: 10px; left: 18px;">
                                            <li>Corrosive Liquids</li>
                                            <li>Crust cleaning liquid</li>
                                        </ul>
                                    </nav>
                                </div>

                                <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#colpsPages" aria-expanded="false" aria-controls="colpsPages">
                                <h5 style="color: black;" class="sb-sidenav-collapse-arrow">Dangerous Goods Class 9<i class="fas fa-angle-down" style="position: relative; left: 16cm;"></i></h5>
                                </a>
                                <div class="collapse" id="colpsPages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <ul style="position: relative; bottom: 10px; left: 18px;">
                                            <li>Battery</li>
                                            <li>Empty Tank</li>
                                            <li>Emergency Battery</li>
                                            <li>Laptop Battery</li>
                                            <li>Power Bank</li>
                                            <li>Dry Accu</li>
                                            <li>Laptop</li>
                                            <li>Insecticide</li>
                                            <li>Zippo</li>
                                            <li>Digital Scale</li>
                                            <li>Mic</li>
                                            <li>Dinamo</li>
                                            <li>Cylinder head</li>
                                            <li>Magnet, Lithium Battery</li>
                                        </ul>
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

        <script src="./css/main.js"></script>
    </body>
    <footer class="footer d-flex justify-content-center" style="background-color: #1cb688; height: 50px;">
        <div class="isi">
            <p class="foot_remark" style="color: white; font-size: small;  position: relative; top: 15px; font-family: Times New Roman; ">© 2021 PT. FIDEM Express All Rights Reserved</p>
        </div>
    </footer>

</html>