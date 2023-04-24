<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "fidemexpress";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Database tidak terkoneksi" . $conn->connect_error);
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function rupiah($harga)
{
    $hasil = "Rp. " . number_format($harga, '2', ',', ',');
    return $hasil;
}

function registrasi($data)
{

    global $conn;

    $username = strtolower($data["username"]);
    $nama = mysqli_escape_string($conn, $data["nama"]);
    $email = mysqli_escape_string($conn, $data["email"]);
    $password = mysqli_escape_string($conn, $data["password"]);
    $password2 = mysqli_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM tb_user
                                        WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "
                <script>    
                    alert('Username Sudah Terdaftar');
                </script>
            ";

        return false;
    }

    if ($password != $password2) {
        echo "
                <script>
                    alert('Konfirmasi Password Tidak Sama');
                </script>
            ";

        return false;
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($conn, "INSERT INTO tb_user VALUES ('','$nama','$username','$email','$password')");

        
        return mysqli_affected_rows($conn);
    }
}

function tanggal()
{

    $ket = date("d-m-Y");
    $tgl = $ket;

    return $tgl;
}

function autoresi($data)
{

    global $conn;

    $sql = mysqli_query($conn, "SELECT max(id_transaksi) as 'maxID' from `tb_transaksi`");
    $data = mysqli_fetch_array($sql);

    $kode = $data['maxID'];

    $kode++;
    $kode <= 20;

    $ket = "FDM";
    $ket2 = date("Ymd");
    $kodeauto = $ket . $ket2 . sprintf("%01s", $kode);

    return $kodeauto;
}

    
function tambah($data)
{
    global $conn;

    $no_resi = autoresi($data);
    $tgl_transaksi = tanggal();
    $nama_pengirim = htmlspecialchars($data["nama_pengirim"]);
    $pos_pengirim = htmlspecialchars($data["pos_pengirim"]);
    $asal_pengirim = htmlspecialchars($data["asal_pengirim"]);
    $nomor_pengirim = htmlspecialchars($data["nomor_pengirim"]);
    $alamat_pengirim = htmlspecialchars($data["alamat_pengirim"]);
    $nama_penerima = htmlspecialchars($data["nama_penerima"]);
    $pos_penerima = htmlspecialchars($data["pos_penerima"]);
    $asal_penerima = htmlspecialchars($data["asal_penerima"]);
    $nomor_penerima = htmlspecialchars($data["nomor_penerima"]);
    $alamat_penerima = htmlspecialchars($data["alamat_penerima"]);
    $nama_barang = htmlspecialchars($data["nama_barang"]);
    $jenis_barang = htmlspecialchars($data["jenis_barang"]);
    $berat_barang = htmlspecialchars($data["berat_barang"]);
    $banyak_barang = htmlspecialchars($data["banyak_barang"]);
    $total_transaksi = htmlspecialchars($data["total_transaksi"]);

    $query = "INSERT INTO `order`(`no_resi`, `tgl_transaksi`, `nama_pengirim`, `asal_pengirim`, `alamat_pengirim`, `pos_pengirim`, `nomor_pengirim`, `nama_penerima`, `asal_penerima`, `alamat_penerima`, `pos_penerima`, `nomor_penerima`, `nama_barang`, `berat_barang`, `jenis_barang`, `banyak_barang`, `total_transaksi`) VALUES 
        ('$no_resi','$tgl_transaksi','$nama_pengirim','$asal_pengirim','$alamat_pengirim','$pos_pengirim','$nomor_pengirim','$nama_penerima','$asal_penerima','$alamat_penerima','$pos_penerima','$nomor_penerima','$nama_barang','$berat_barang','$jenis_barang','$banyak_barang','$total_transaksi')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambah2($data)
{
    global $conn;

    $no_resi = autoresi($data);
    $tgl_transaksi = tanggal();
    $total_transaksi = htmlspecialchars($data["total_transaksi"]);
    $nama_pengirim = htmlspecialchars($data["nama_pengirim"]);
    $pos_pengirim = htmlspecialchars($data["pos_pengirim"]);
    $asal_pengirim = htmlspecialchars($data["asal_pengirim"]);
    $nomor_pengirim = htmlspecialchars($data["nomor_pengirim"]);
    $alamat_pengirim = htmlspecialchars($data["alamat_pengirim"]);
    $nama_penerima = htmlspecialchars($data["nama_penerima"]);
    $pos_penerima = htmlspecialchars($data["pos_penerima"]);
    $asal_penerima = htmlspecialchars($data["asal_penerima"]);
    $nomor_penerima = htmlspecialchars($data["nomor_penerima"]);
    $alamat_penerima = htmlspecialchars($data["alamat_penerima"]);
    $nama_barang = htmlspecialchars($data["nama_barang"]);
    $jenis_barang = htmlspecialchars($data["jenis_barang"]);
    $berat_barang = htmlspecialchars($data["berat_barang"]);
    $banyak_barang = htmlspecialchars($data["banyak_barang"]);

    $query1 = "INSERT INTO `tb_transaksi`(`no_resi`, `tgl_transaksi`, `total_transaksi`) VALUES 
        ('$no_resi','$tgl_transaksi','$total_transaksi')";
    $query2 = "INSERT INTO `tb_pengirim`(`nama_pengirim`, `asal_pengirim`, `alamat_pengirim`, `pos_pengirim`, `nomor_pengirim`) VALUES 
        ('$nama_pengirim','$asal_pengirim','$alamat_pengirim','$pos_pengirim','$nomor_pengirim')";
    $query3 = "INSERT INTO `tb_penerima`(`nama_penerima`, `asal_penerima`, `alamat_penerima`, `pos_penerima`, `nomor_penerima`) VALUES 
        ('$nama_penerima','$asal_penerima','$alamat_penerima','$pos_penerima','$nomor_penerima')";
    $query4 = "INSERT INTO `tb_barang`(`nama_barang`, `berat_barang`, `jenis_barang`, `banyak_barang`) VALUES 
        ('$nama_barang','$berat_barang','$jenis_barang','$banyak_barang')";

    mysqli_query($conn, $query1);
    mysqli_query($conn, $query2);
    mysqli_query($conn, $query3);
    mysqli_query($conn, $query4);

    return mysqli_affected_rows($conn);
}

function ubah5($data)
{
    global $conn;
    $id = $data["id"];
    $nama = $data["nama"];
    $username = $data["username"];
    $email = $data["email"];
    $query = "UPDATE `tb_user` SET nama = '$nama', username = '$username', email = '$email' WHERE id = '$id'
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function antar($data)
{
    global $conn;
    $id = $data["id"];
    $status = 'Dalam pengantaran kurir';
    $query = "UPDATE `order` SET `status` = '$status' WHERE id = '$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function selesai($data)
{
    global $conn;
    $id = $data["id"];
    $status = 'Diterima Ybs';
    $query = "UPDATE `order` SET `status` = '$status' WHERE id = '$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}