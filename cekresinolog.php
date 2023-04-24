<?php
require "functions.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Pengiriman</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="wrap">
        <div class="container">
            <h1 style="text-align: center;" class="mt-5">Hasil Pencarian</h1>
            <br>
            <?php
                $cari = $_GET['cari'];
                $query = "SELECT * from `order` where no_resi like '%".$cari."%' limit 10";
                $query_exec = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($query_exec)):
            ?>
            <?php
            if (isset($row['no_resi'])) {
                $cari = $row['no_resi'];
                echo "<b>Hasil pencarian : " . $cari . "</b>";
            }
            ?>
            <?php endwhile; ?>
            <hr>
            <a href="index.php" role="button" class="btn btn-primary mb-3">Kembali</a>
            <table class="table table-bordered border-dark">
                <thead class="table table-bordered border-dark" style="background-color: #20c997;">
                    <tr style="text-align: center;">
                        <th scope="col">No. Resi</th>
                        <th scope="col">Nama Pengirim</th>
                        <th scope="col">Asal Pengirim</th>
                        <th scope="col">Nama Penerima</th>
                        <th scope="col">Asal Penerima</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <div id='result'>
                <?php
                    $cari = $_GET['cari'];
                    $query = "SELECT * from `order` where no_resi like '%".$cari."%' limit 10";
                    $query_exec = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($query_exec)):
                    ?>
                            <tr style="text-align: center;">
                                <td><?php echo $row['no_resi']; ?></td>
                                <td><?php echo $row['nama_pengirim']; ?></td>
                                <td><?php echo $row['asal_pengirim']; ?></td>
                                <td><?php echo $row['nama_penerima']; ?></td>
                                <td><?php echo $row['asal_penerima']; ?></td>
                                <td><?php echo $row['nama_barang']; ?></td>
                                <td><?php echo rupiah($row['total_transaksi']); ?></td>
                                <td><a role="button" class="btn btn-success" href="detaildatanolog.php?no_resi=<?= $row['no_resi'] ?>">Detail</a></td>
                            </tr>
                </div>
                <?php 
                    endwhile; 
                ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>