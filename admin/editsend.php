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
        if (ubah($_POST) > 0) {
            // header("Location: datapengirim.php?id=$row[id]");
            echo "
            <script>
            alert('Data Berhasil Diubah');
            window.location.replace('datapengirim.php?id=$row[id]');
            </script>
    ";
        } else {
            // header("Location: index.php?id=$row[id]");
            echo "
            <script>
            alert('Data Gagal Diubah');
            window.location.replace('datapengirim.php?id=$row[id]');
            </script>
            ";
        }
    }
    ?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Edit Sender Information</title>
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
                                <h1 class="card-header border border-black text-center text-white" style="background-color: #20c997;">Edit Sender Information</h1>
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
                                                    <label for="">Name</label>
                                                    <input type="text" name="nama_pengirim" id="nama_pengirim" class="form-control" value="<?php echo $data['nama_pengirim'] ?>">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="">Post Code</label>
                                                    <input type="text" name="pos_pengirim" id="pos_pengirim" class="form-control" value="<?php echo $data['pos_pengirim'] ?>">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="">Origin City</label>
                                                    <select type="text" name="asal_pengirim" class="form-select" required>
                                                        <option <?php echo $data['asal_pengirim'] == 'Ambon' ? "selected" : "" ?>>Ambon</option>
                                                        <option <?php echo $data['asal_pengirim'] == 'Bandung' ? "selected" : "" ?>>Bandung</option>
                                                        <option <?php echo $data['asal_pengirim'] == 'Banjarmasin' ? "selected" : "" ?>>Banjarmasin</option>
                                                        <option <?php echo $data['asal_pengirim'] == 'Bogor' ? "selected" : "" ?>>Bogor</option>
                                                        <option <?php echo $data['asal_pengirim'] == 'Cirebon' ? "selected" : "" ?>>Cirebon</option>
                                                        <option <?php echo $data['asal_pengirim'] == 'Garut' ? "selected" : "" ?>>Garut</option>
                                                        <option <?php echo $data['asal_pengirim'] == 'Jakarta' ? "selected" : "" ?>>Jakarta</option>
                                                        <option <?php echo $data['asal_pengirim'] == 'Kerawang' ? "selected" : "" ?>>Kerawang</option>
                                                        <option <?php echo $data['asal_pengirim'] == 'Lampung' ? "selected" : "" ?>>Lampung</option>
                                                        <option <?php echo $data['asal_pengirim'] == 'Palembang' ? "selected" : "" ?>>Palembang</option>
                                                        <option <?php echo $data['asal_pengirim'] == 'Semarang' ? "selected" : "" ?>>Semarang</option>
                                                        <option <?php echo $data['asal_pengirim'] == 'Surakarta' ? "selected" : "" ?>>Surakarta</option>
                                                        <option <?php echo $data['asal_pengirim'] == 'Surabaya' ? "selected" : "" ?>>Surabaya</option>
                                                        <option <?php echo $data['asal_pengirim'] == 'Tasik' ? "selected" : "" ?>>Tasik</option>
                                                        <option <?php echo $data['asal_pengirim'] == 'Yogyakarta' ? "selected" : "" ?>>Yogyakarta</option>
                                                    </select>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="">Phone Number</label>
                                                    <input type="text" name="nomor_pengirim" id="nomor_pengirim" class="form-control" value="<?php echo $data['nomor_pengirim'] ?>">
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="">Address</label>
                                                    <textarea type="text" name="alamat_pengirim" id="alamat_pengirim" class="form-control" rows="4"><?php echo $data['alamat_pengirim'] ?></textarea>
                                                </div>

                                                <br>
                                                <button class="btn btn-success mt-4" style="margin-left: 80%" type="submit" name="ubah">Save</button>
                                                <a href="datapengirim.php?id=<?php echo $row['id'] ?>" role="button" class="btn btn-warning mt-4" style="margin-right: 80%; color:white" type="reset" name="cancel">Cancel</a>
                                            </form>
                                        <?php endforeach; ?>
                                        </div>
                                    <?php endforeach; ?>
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