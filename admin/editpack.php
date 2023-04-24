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
    if (isset($_POST["ubah"])) {
        if (ubah3($_POST) > 0) {
            // header("Location: databarang.php?id=$row[id]");
            echo "
            <script>
            alert('Data Berhasil Diubah');
            window.location.replace('databarang.php?id=$row[id]');
            </script>
            ";
        } else {
            // header("Location: index.php?id=$row[id]");
            echo "
            <script>
            alert('Data Gagal Diubah');
            window.location.replace('databarang.php?id=$row[id]');
            </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Package Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/style3.css">
</head>

<?php

$no_resi = $_GET["no_resi"];
$rows = query("SELECT * from `order` where no_resi='$no_resi'");
?>

<body class="bg-light">
    <div class="wrap">
        <div class="container">
            <div class="position-relative">
                <div class="d-flex justify-content-center mt-4">
                    <div class="col-md-8">
                        <div class="card text-black" style="background-color: white;">
                            <h1 class="card-header border border-black text-center text-white" style="background-color: #20c997;">Edit Package Information</h1>
                            <div class="card-body">
                                <br>
                                <?php
                                foreach ($rows as $data) :
                                ?>
                                    <div class="form-order">
                                        <form style="display: grid; grid-template-columns: 1fr 1fr; grid-gap: 20px;" action="" method="POST" class="fw-bold">
                                            <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $data['id'] ?>">
                                            <div class="form-group mb-2">
                                                <label for="">No. Resi</label>
                                                <input type="text" name="no_resi" id="no_resi" class="form-control" value="<?php echo $data['no_resi'] ?>" disabled>
                                            </div>
                                            <br>
                                            <div class="form-group mb-2">
                                                <label for="">Item Name</label>
                                                <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="<?php echo $data['nama_barang'] ?>">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="">Type package</label>
                                                <select type="text" name="jenis_barang" class="form-select" required>
                                                <option <?php echo $data['jenis_barang'] == 'Umum' ? "selected" : "" ?>>Umum</option>
                                                <option <?php echo $data['jenis_barang'] == 'Dokumen' ? "selected" : "" ?>>Dokumen</option>
                                                <option <?php echo $data['jenis_barang'] == 'Makanan/Minuman' ? "selected" : "" ?>>Makanan/Minuman</option>
                                                <option <?php echo $data['jenis_barang'] == 'Elektronik' ? "selected" : "" ?>>Elektronik</option>
                                                <option <?php echo $data['jenis_barang'] == 'Mudah Pecah' ? "selected" : "" ?>>Mudah Pecah</option>
                                                <option> <?php echo $data['jenis_barang'] == 'Transportasi' ? "selected" : "" ?>Transportasi</option>
                                            </select>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="">Weight</label>
                                                <input type="text" name="berat_barang" id="berat_barang" class="form-control" value="<?php echo $data['berat_barang'] ?>">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="">Quantity</label>
                                                <input type="text" name="banyak_barang" id="banyak_barang" class="form-control" value="<?php echo $data['banyak_barang'] ?>">
                                            </div>

                                            <hr>
                                            <hr>
                                            <div class="form-group mb-2">
                                                <label for="">Status Pengiriman</label>
                                                <select type="text" name="status" id="status" class="form-select">
                                                <option <?php echo $data['status'] == 'Dalam perjalanan' ? "selected" : "" ?>>Dalam perjalanan</option>
                                                <option <?php echo $data['status'] == 'Dalam pengantaran kurir' ? "selected" : "" ?>>Dalam pengantaran kurir</option>
                                                <option <?php echo $data['status'] == 'Diterima Ybs' ? "selected" : "" ?>>Diterima Ybs</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="">Total Fee</label>
                                                <input type="text" id="total" name="total_transaksi" class="form-control" placeholder="0" readonly="" value="<?php echo $data['total_transaksi'] ?>">
                                            </div>



                                            <button class="btn btn-success mt-4" style="margin-left: 80%" type="submit" name="ubah">Save</button>
                                            <a href="databarang.php?id=<?php echo $row['id'] ?>" role="button" class="btn btn-warning mt-4" style="margin-right: 80%; color:white" type="reset" name="cancel">Cancel</a>
                                            <?php endforeach; ?>
                                        </form>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#berat_barang").keyup(function() {
                    var berat_barang = $("#berat_barang").val();

                    var total = parseInt(berat_barang) * 20000;
                    $("#total").val(total);
                });
            });
        </script>
        <script src="./js/main.js"></script>
</body>

</html>