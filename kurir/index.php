<?php

require "functions.php";

session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard Kurir</title>
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
$asal_kurir = $_GET['asal_kurir'];
$query = "SELECT * from tb_kurir where id = '$id'";
$query_exec = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($query_exec)) :
?>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand" style="background-color: #04a575;">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" style="color : white;" href="index.php?id=<?php echo $row['id'] ?>&asal_kurir=<?php echo $row['asal_kurir'] ?>">FIDEM Express</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" style="color: white;" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4 position-absolute top-2 end-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: white;" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="navbarDropdown">
                </li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.php?id=<?php echo $row['id'] ?>&asal_kurir=<?php echo $row['asal_kurir'] ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>


                            <div class="sb-sidenav-menu-heading">MAIN NAVIGATION</div>

                            <div>
                                <a class="nav-link" href="belumkirim.php?id=<?php echo $row['id'] ?>&asal_kurir=<?php echo $row['asal_kurir'] ?>">
                                    <div></div>Belum Diantar
                                </a>
                            </div>
                            <div>
                                <a class="nav-link" href="sedangkirim.php?id=<?php echo $row['id'] ?>&asal_kurir=<?php echo $row['asal_kurir'] ?>">
                                    <div></div>Dalam Pengantaran
                                </a>
                            </div>
                            <div>
                                <a class="nav-link" href="sudahkirim.php?id=<?php echo $row['id'] ?>&asal_kurir=<?php echo $row['asal_kurir'] ?>">
                                    <div></div>Paket Sampai
                                </a>
                            </div>
                        </div>

                        <div class="sb-sidenav-footer">
                            <div class="small" style="color: white;">Logged in as:</div>
                            <div style="color: white;">
                                <?php echo $row['nama_kurir']; ?>
                            </div>
                        </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Info Paket</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Jumlah Paket</div>
                                    <div class="jmldata" style="text-align: center; font-size: xxx-large;">
                                        <?php
                                        $sql = mysqli_query($conn, "SELECT COUNT(no_resi) as maxtb FROM `order` where asal_penerima = '$asal_kurir'");
                                        $data = mysqli_fetch_array($sql);
                                        $kode = $data['maxtb'];
                                        echo $kode;
                                        ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="index.php?id=<?php echo $row['id'] ?>&asal_kurir=<?php echo $row['asal_kurir'] ?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Belum Diantar</div>
                                    <div class="jmldata" style="text-align: center; font-size: xxx-large;">
                                        <?php
                                        $sql = mysqli_query($conn, "SELECT COUNT(no_resi) as maxtb FROM `order` where `status` = 'Dalam Perjalanan' and asal_penerima = '$asal_kurir'");
                                        $data = mysqli_fetch_array($sql);
                                        $kode = $data['maxtb'];
                                        echo $kode;
                                        ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="belumkirim.php?id=<?php echo $row['id'] ?>&asal_kurir=<?php echo $row['asal_kurir'] ?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Dalam Pengantaran</div>
                                    <div class="jmldata" style="text-align: center; font-size: xxx-large;">
                                        <?php
                                        $sql = mysqli_query($conn, "SELECT COUNT(no_resi) as maxtb FROM `order` where `status` = 'Dalam pengantaran kurir' and asal_penerima = '$asal_kurir'");
                                        $data = mysqli_fetch_array($sql);
                                        $kode = $data['maxtb'];
                                        echo $kode;
                                        ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="sedangkirim.php?id=<?php echo $row['id'] ?>&asal_kurir=<?php echo $row['asal_kurir'] ?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Paket Sampai</div>
                                    <div class="jmldata" style="text-align: center; font-size: xxx-large;">
                                        <?php
                                        $sql = mysqli_query($conn, "SELECT COUNT(no_resi) as maxtb FROM `order` where `status` = 'Diterima Ybs' and asal_penerima = '$asal_kurir'");
                                        $data = mysqli_fetch_array($sql);
                                        $kode = $data['maxtb'];
                                        echo $kode;
                                        ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="sudahkirim.php?id=<?php echo $row['id'] ?>&asal_kurir=<?php echo $row['asal_kurir'] ?>">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                        <?php endwhile; ?>
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i> Data Paket
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">No.</th>
                                        <th>No. Resi</th>
                                        <th>Nama Pengirim</th>
                                        <th>Asal Pengirim</th>
                                        <th>Nama Penerima</th>
                                        <th>Asal Penerima</th>
                                        <th>Nama Barang</th>
                                        <th>Total Harga</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th style="text-align: center;">No.</th>
                                        <th>No. Resi</th>
                                        <th>Nama Pengirim</th>
                                        <th>Asal Pengirim</th>
                                        <th>Nama Penerima</th>
                                        <th>Asal Penerima</th>
                                        <th>Nama Barang</th>
                                        <th>Total Harga</th>
                                    </tr>
                                </tfoot>
                                <?php
                                $no = 1;
                                $data = mysqli_query($conn, "SELECT * from `order` where asal_penerima = '$asal_kurir'");
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                    <tr>
                                        <td style="text-align: center;"><?php echo $no++; ?></td>
                                        <td><?php echo $d['no_resi']; ?></td>
                                        <td><?php echo $d['nama_pengirim']; ?></td>
                                        <td><?php echo $d['asal_pengirim']; ?></td>
                                        <td><?php echo $d['nama_penerima']; ?></td>
                                        <td><?php echo $d['asal_penerima']; ?></td>
                                        <td><?php echo $d['nama_barang']; ?></td>
                                        <td><?php echo rupiah($d['total_transaksi']); ?></td>
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