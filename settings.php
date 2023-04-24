<?php
require "functions.php";
?>

<?php

$id = $_GET["id"];
$rows = query("SELECT * from `tb_user` where id = '$id'");
?>
    <?php 
    
    foreach($rows as $row) :
    ?>
<?php
if (isset($_POST["ubah"])) {
    if (ubah5($_POST) > 0) {
        // header("Location: home.php?id=$row[id]");
        echo "
        <script>
        alert('Data Berhasil Diubah');
        window.location.replace('home.php?id=$row[id]');
        </script>
        ";
    } else {
        // header("Location: home.php?id=$row[id]");
        echo "
        <script>
        alert('Data Gagal Diubah');
        window.location.replace('home.php?id=$row[id]');
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Order</title>
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
                                <h1 class="card-header border border-black text-center text-white" style="background-color: #20c997;">Edit Data</h1>
                                <div class="card-body">
                                    <br>
                                    <div class="form-order">
                                        <form action="" method="POST" class="fw-bold">
                                                <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $row['id'] ?>">
                                            <div class="form-group mb-2">
                                                <label for="">Nama</label>
                                                <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $row['nama'] ?>">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="">Username</label>
                                                <input type="text" name="username" id="username" class="form-control" value="<?php echo $row['username'] ?>">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="">Email</label>
                                                <input type="text" name="email" id="email" class="form-control" value="<?php echo $row['email'] ?>">
                                            </div>

                                            <hr>
                                            <br>
                                            <div class="button mt-1" style="display: grid; grid-template-columns: 1fr 1fr; grid-gap: 20px;">
                                            <button class="btn btn-success" type="submit" name="ubah">Save</button>
                                            <a href="home.php?id=<?php echo $row['id'] ?>" role="button" class="btn btn-warning" style=" color:white" type="reset" name="cancel">Cancel</a>
                                            </div>
                                        </form>
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