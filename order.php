<?php

require "functions.php";

$id = $_GET['id'];
$query = "SELECT * from tb_user where id = '$id'";
$query_exec = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($query_exec)) :

    if (isset($_POST["tambah"])) {

        if (tambah($_POST) > 0) {
            echo "
        <script>
        alert('Data BERHASIL ditambahkan');
        window.location.replace('kwitansi.php?id=$row[id]');
        </script>";
            // header("Location: kwitansi.php?id=$row[id]");
        } else {
            echo "
        <script>
        alert('Data GAGAL ditambahkan');
        </script>";
        }
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
        <?php endwhile; ?>
        <div class="wrap">
            <div class="container">
                <div class="position-relative">
                    <div class="d-flex justify-content-center mt-4">
                        <div class="col-md-8">
                            <div class="card text-black" style="background-color: white;">
                                <h1 class="card-header border border-black text-center text-white" style="background-color: #20c997;">Order</h1>
                                <div class="card-body">
                                    <br>
                                    <h5 class="fw-bold text-success">Sender Information</h5>
                                    <div class="form-order">
                                        <form style="display: grid; grid-template-columns: 1fr 1fr; grid-gap: 20px;" action="" method="POST" class="fw-bold">

                                            <div class="form-group mb-2">
                                                <label for="">Name</label>
                                                <input type="text" name="nama_pengirim" class="form-control" required>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="">Post Code</label>
                                                <input type="text" name="pos_pengirim" class="form-control" required>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="">Origin City</label>
                                                <select type="text" name="asal_pengirim" class="form-select" required>
                                                    <option>--Select--</option>
                                                    <option>Ambon</option>
                                                    <option>Bandung</option>
                                                    <option>Banjarmasin</option>
                                                    <option>Bogor</option>
                                                    <option>Cirebon</option>
                                                    <option>Garut</option>
                                                    <option>Jakarta</option>
                                                    <option>Kerawang</option>
                                                    <option>Lampung</option>
                                                    <option>Palembang</option>
                                                    <option>Semarang</option>
                                                    <option>Surakarta</option>
                                                    <option>Surabaya</option>
                                                    <option>Tasik</option>
                                                    <option>Yogyakarta</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="">Phone Number</label>
                                                <input type="text" name="nomor_pengirim" class="form-control" required>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="">Address</label>
                                                <textarea type="text" name="alamat_pengirim" class="form-control" rows="4" required></textarea>
                                            </div>

                                            <br>
                                            <h5 class="fw-bold text-success">Recipient Information</h5>
                                            <br>
                                            <div class="form-group mb-2">
                                                <label for="">Name</label>
                                                <input type="text" name="nama_penerima" class="form-control" required>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="">Post Code</label>
                                                <input type="text" name="pos_penerima" class="form-control" required>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="">Origin City</label>
                                                <select type="text" name="asal_penerima" class="form-select" required>
                                                    <option>--Select--</option>
                                                    <option>Ambon</option>
                                                    <option>Bandung</option>
                                                    <option>Banjarmasin</option>
                                                    <option>Bogor</option>
                                                    <option>Cirebon</option>
                                                    <option>Garut</option>
                                                    <option>Jakarta</option>
                                                    <option>Kerawang</option>
                                                    <option>Lampung</option>
                                                    <option>Palembang</option>
                                                    <option>Surakarta</option>
                                                    <option>Surabaya</option>
                                                    <option>Tasik</option>
                                                    <option>Yogyakarta</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="">Phone Number</label>
                                                <input type="text" name="nomor_penerima" class="form-control" required>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="">Address</label>
                                                <textarea type="text" name="alamat_penerima" class="form-control" rows="4" required></textarea>
                                            </div>

                                            <br>
                                            <h5 class="fw-bold text-success">Package Information</h5>
                                            <br>
                                            <div class="form-group mb-2">
                                                <label for="">Item Name</label>
                                                <input type="text" name="nama_barang" class="form-control" required>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="">Type package</label>
                                                <select type="text" name="jenis_barang" class="form-select" required>
                                                    <option>--Select--</option>
                                                    <option>Umum</option>
                                                    <option>Dokumen</option>
                                                    <option>Makanan/Minuman</option>
                                                    <option>Elektronik</option>
                                                    <option>Mudah Pecah</option>
                                                    <option>Transportasi</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="">Weight</label>
                                                <input type="text" id="berat" name="berat_barang" class="form-control" required>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="">Quantity</label>
                                                <input type="text" name="banyak_barang" class="form-control" required>
                                            </div>

                                            <hr>
                                            <hr>
                                            <br>
                                            <div class="form-group mb-2">
                                                <label for="">Total Fee</label>
                                                <input type="text" id="total" name="total_transaksi" class="form-control" placeholder="0" readonly="">
                                            </div>
                                            <button class="btn btn-success mt-4" style="margin-left: 70%" type="submit" name="tambah">Order</button>
                                            <button class="btn btn-warning mt-4" style="margin-right: 70%;" type="reset" name="delete">Delete</button>
                                        </form>
                                    </div>
                                <?php endwhile; ?>
                                <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $("#berat").keyup(function() {
                                            var berat = $("#berat").val();

                                            var total = parseInt(berat) * 20000;
                                            $("#total").val(total);
                                        });
                                    });
                                </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="./css/main.js"></script>
        </body>
        <footer class="footer d-flex justify-content-center" style="background-color: #1cb688; height: 50px; position: relative; top: 30px;">
            <div class="isi">
                <p class="foot_remark" style="color: white; font-size: small;  position: relative; top: 18px; font-family: Times New Roman; ">© 2021 PT. FIDEM Express All Rights Reserved</p>
            </div>
        </footer>

    </html>