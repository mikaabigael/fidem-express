<?php

require "functions.php";

$id = $_GET['id'];
$query = "SELECT * from tb_admin where id = '$id'";
$query_exec = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($query_exec)) :

    if (isset($_POST["tambah"])) {

        if (tambah($_POST) > 0) {
            echo "
        <script>
        alert('Data Berhasil ditambahkan');
        window.location.replace('index.php?id=$row[id]');
        </script>";
        // header("Location: index.php?id=$row[id]");
    } else {
        echo "
        <script>
        alert('Data Gagal ditambahkan');
        window.location.replace('index.php?id=$row[id]');
        </script>";
        }
    }
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Tambah Data</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/style2.css">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    </head>
    <div class="wrap">
        <div class="container">
            <div class="position-relative">
                <div class="d-flex justify-content-center mt-4">
                    <div class="col-md-8">
                        <div class="card text-black" style="background-color: white;">
                            <h1 class="card-header border border-black text-center text-white" style="background-color: #20c997;">Tambah Data</h1>
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
                                                    <option>Semarang</option>
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
                                        <button class="btn btn-success mt-4" style="margin-left: 70%" type="submit" name="tambah">Tambah</button>
                                        <a href="index.php?id=<?php echo $row['id'] ?>" role="button" class="btn btn-warning mt-4" style="margin-right: 70%; color:white;" type="reset" name="cancel">Cancel</a>
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

    </html>