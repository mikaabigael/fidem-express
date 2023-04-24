<?php 

    require "functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Data Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

                <?php
                $id = $_GET['id'];
                $query = "SELECT * from tb_admin where id = '$id'";
                $query_exec = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($query_exec)):
            ?>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand" style="background-color: #04a575;">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" style="color : white;" href="index.php?id=<?php echo $row['id'] ?>">FIDEM Express</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" style="color: white;" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4 position-absolute top-2 end-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: white;" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="settings.php?id=<?php echo $row['id'] ?>">Settings</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="index.php?id=<?php echo $row['id'] ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>


                        <div class="sb-sidenav-menu-heading">MAIN NAVIGATION</div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-edit"></i></div>
                            Data Akses
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="dataadmin.php?id=<?php echo $row['id'] ?>">Data Admin</a>
                                <a class="nav-link" href="datapengguna.php?id=<?php echo $row['id'] ?>">Data Pengguna</a>
                                <a class="nav-link" href="datakurir.php?id=<?php echo $row['id'] ?>">Data Kurir</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Data Pengiriman
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="datapengirim.php?id=<?php echo $row['id'] ?>">
                                    Data Pengirim
                                </a>
                                <a class="nav-link collapsed" href="datapenerima.php?id=<?php echo $row['id'] ?>">
                                    Data Penerima
                                </a>
                                <a class="nav-link collapsed" href="databarang.php?id=<?php echo $row['id'] ?>">
                                    Data Barang
                                </a>
                            </nav>
                        </div>
                    </div>
                    <div>
                        <a class="nav-link" href="lapkirim.php?id=<?php echo $row['id'] ?>">
                            <div></div>Laporan Pengiriman
                        </a>
                    </div>
                </div>

                <div class="sb-sidenav-footer">
                    <div class="small" style="color: white;">Logged in as:</div>
                    <div style="color: white;">
                    <?php echo $row['nama']; ?>
                    </div>
                </div>
            </nav>
        </div>
        <?php endwhile; ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Data Admin</h1>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i> Data Admin
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">No.</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                    <th style="text-align: center;">No.</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                    </tr>
                                </tfoot>
                                <?php 
                                    $no = 1;
                                    $data = mysqli_query($conn,"SELECT * from `tb_admin`");
                                    while($d = mysqli_fetch_array($data)){
                                ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $no++; ?></td>
                                        <td><?php echo $d['nama']; ?></td>
                                        <td><?php echo $d['username']; ?></td>
                                        <td><?php echo $d['email']; ?></td>
                                    </tr>
                        </div>
                        <?php 
                             }
                        ?>
                    </tbody>
                    </table>
                    </div>
                </div>
        </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">&copy; 2021 PT. FIDEM Express All Rights Reserved</div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>