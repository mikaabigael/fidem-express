<?php
require "functions.php";
?>
<?php
$id = $_GET["id"];
$rows = query("SELECT * from `tb_admin` where id = '$id'");
?>
<?php

foreach ($rows as $row) :
?>

    <?php

    if (isset($_POST["tambah"])) {

        if (tambahkurir($_POST) > 0) {
            echo "
            <script>
            alert('Data Berhasil ditambahkan');
            window.location.replace('datakurir.php?id=$row[id]');
            </script>";
            // header("Location: datakurir.php?id=$row[id]");
        } else {
            echo "
            <script>
            alert('Data Gagal ditambahkan');
            window.location.replace('datakurir.php?id=$row[id]');
            </script>";
        }
    }
    ?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Tanbah Kurir</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style2.css">
        <link rel="stylesheet" type="text/css" href="css/style3.css">
    </head>


    <body class="bg-light">
        <div class="wrap">
            <div class="container">
                <div class="position-relative">
                    <div class="d-flex justify-content-center mt-4">
                        <div class="col-md-4">
                            <div class="card text-black" style="background-color: white;">
                                <h1 class="card-header border border-black text-center text-white" style="background-color: #20c997;">Tambah Kurir</h1>
                                <div class="card-body">
                                    <br>
                                    <?php

                                    ?>
                                    <div class="form-order">
                                        <form action="" method="POST" class="fw-bold">
                                            <input type="hidden" name="id" id="id" class="for">
                                            <div class="form-group mb-2">
                                                <label for="">Nama</label>
                                                <input type="text" name="nama_kurir" id="nama_kurir" class="form-control">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="">Email</label>
                                                <input type="text" name="email" id="email" class="form-control">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="">No. Handphone</label>
                                                <input type="text" name="nomor_kurir" id="nomor_kurir" class="form-control">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="">Plat Motor</label>
                                                <input type="text" name="plat_kurir" id="plat_kurir" class="form-control">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="">Asal Kota</label>
                                                <select type="text" name="asal_kurir" class="form-select" required>
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
                                                <label for="">Alamat</label>
                                                <textarea type="text" rows="4" name="alamat_kurir" id="alamat_kurir" class="form-control"></textarea>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="">Username</label>
                                                <input type="text" name="username" id="username" class="form-control">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="">Password</label>
                                                <input type="password" name="password" id="password" class="form-control">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="">Repeat Password</label>
                                                <input type="password" name="password2" id="password2" class="form-control">
                                            </div>

                                            <hr>
                                            <br>
                                            <div class="button mt-1" style="display: grid; grid-template-columns: 1fr 1fr; grid-gap: 20px;">
                                                <button class="btn btn-success" type="submit" name="tambah">Tambah</button>
                                                <a href="datakurir.php?id=<?php echo $row['id'] ?>" role="button" class="btn btn-warning" style=" color:white" type="reset" name="cancel">Cancel</a>
                                            </div>
                                        </form>
                                    </div>
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
                            <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="./css/main.js"></script>
    </body>

    </html>