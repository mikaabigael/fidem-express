<?php
if (isset($_GET['no_resi'])) {
    $no_resi = $_GET['no_resi'];
} else {
    die("Error. No No. Resi Selected!");
}
require "functions.php";
$query = mysqli_query($conn, "SELECT * FROM `order` WHERE no_resi = '$no_resi'");
$result = mysqli_fetch_array($query);
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Detail Data Pengiriman</title>
</head>
<?php
$id = $_GET['id'];
$query = "SELECT * from tb_user where id = '$id'";
$query_exec = mysqli_query($conn, $query);
while ($data = mysqli_fetch_array($query_exec)) :
?>
<body>
    <div class="wrap">
        <div class="container">
            <div class="position-relative">
                <div class="d-flex justify-content-center mt-4">
                    <div class="col-md-6">
                        <div class="card text-black" style="background-color: white;">
                            <h1 class="card-header border border-black text-center text-white" style="background-color: #20c997;">Detail Data Pengiriman</h1>
                            <div class="card-body">
                                <br>
                                <h5><i>No. Resi :</i> <b><?php echo $no_resi ?></b></h5>
                                <h6>Status Pengiriman : <b><?php echo $result['status'] ?></b></h6>
                                <table border="0" cellpadding="5">
                                    <tr>
                                        <td size="90">Tanggal Transaksi</td>
                                        <td>: <?php echo $result['tgl_transaksi'] ?></td>
                                    </tr>
                                    <tr>
                                        <td size="90">Nama Pengirim</td>
                                        <td>: <?php echo $result['nama_pengirim'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Asal Pengirim</td>
                                        <td>: <?php echo $result['asal_pengirim'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Pengirim</td>
                                        <td>: <?php echo $result['alamat_pengirim'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kode Pos Pengirim</td>
                                        <td>: <?php echo $result['pos_pengirim'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Pengirim</td>
                                        <td>: <?php echo $result['nomor_pengirim'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Penerima</td>
                                        <td>: <?php echo $result['nama_penerima'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Asal Penerima</td>
                                        <td>: <?php echo $result['asal_penerima'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Penerima</td>
                                        <td>: <?php echo $result['alamat_penerima'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Pos Penerima</td>
                                        <td>: <?php echo $result['pos_penerima'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Penerima</td>
                                        <td>: <?php echo $result['nomor_penerima'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Barang</td>
                                        <td>: <?php echo $result['nama_barang'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Berat Barang</td>
                                        <td>: <?php echo $result['berat_barang'] ?> Kg</td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Barang</td>
                                        <td>: <?php echo $result['jenis_barang'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Banyak Barang</td>
                                        <td>: <?php echo $result['banyak_barang'] ?> buah</td>
                                    </tr>
                                    <tr>
                                        <td>Total Harga</td>
                                        <td>: <?php echo rupiah($result['total_transaksi']) ?></td>
                                    </tr>
                                </table>
                                <a role="button" class="btn btn-primary mt-4" href="home.php?id=<?php echo $data['id'] ?>">Kembali</a>

                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>