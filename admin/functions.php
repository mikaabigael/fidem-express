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

    $result = mysqli_query($conn, "SELECT username FROM tb_admin
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
        mysqli_query($conn, "INSERT INTO tb_admin VALUES ('','$nama','$username','$email','$password')");

        return mysqli_affected_rows($conn);
    }
}

function status()
{

    $ket = "Dalam perjalanan";

    return $ket;
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

    $sql = mysqli_query($conn, "SELECT max(id) as 'maxID' from `order`");
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
    $status = status();
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

    $query = "INSERT INTO `order`(`no_resi`, `tgl_transaksi`, `nama_pengirim`, `asal_pengirim`, `alamat_pengirim`, `pos_pengirim`, `nomor_pengirim`, `nama_penerima`, `asal_penerima`, `alamat_penerima`, `pos_penerima`, `nomor_penerima`, `nama_barang`, `berat_barang`, `jenis_barang`, `banyak_barang`, `total_transaksi`, `status`) VALUES 
        ('$no_resi','$tgl_transaksi','$nama_pengirim','$asal_pengirim','$alamat_pengirim','$pos_pengirim','$nomor_pengirim','$nama_penerima','$asal_penerima','$alamat_penerima','$pos_penerima','$nomor_penerima','$nama_barang','$berat_barang','$jenis_barang','$banyak_barang','$total_transaksi','$status')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function delete($no_resi)
{
    global $conn;
    $query = "DELETE FROM `order` WHERE no_resi='$no_resi'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function delete2($nama)
{
    global $conn;
    $query = "DELETE FROM `tb_user` WHERE nama='$nama'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function delete3($nama)
{
    global $conn;
    $query = "DELETE FROM `tb_kurir` WHERE nama_kurir='$nama'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $nama_pengirim = $data["nama_pengirim"];
    $pos_pengirim = $data["pos_pengirim"];
    $asal_pengirim = $data["asal_pengirim"];
    $nomor_pengirim = $data["nomor_pengirim"];
    $alamat_pengirim = $data["alamat_pengirim"];
    $query = "UPDATE `order` SET nama_pengirim = '$nama_pengirim', pos_pengirim = '$pos_pengirim', asal_pengirim = '$asal_pengirim', nomor_pengirim = '$nomor_pengirim', alamat_pengirim = '$alamat_pengirim' WHERE id = '$id'
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah2($data)
{
    global $conn;
    $id = $data["id"];
    $nama_penerima = $data["nama_penerima"];
    $pos_penerima = $data["pos_penerima"];
    $asal_penerima = $data["asal_penerima"];
    $nomor_penerima = $data["nomor_penerima"];
    $alamat_penerima = $data["alamat_penerima"];
    $query = "UPDATE `order` SET nama_penerima = '$nama_penerima', pos_penerima = '$pos_penerima', asal_penerima = '$asal_penerima', nomor_penerima = '$nomor_penerima', alamat_penerima = '$alamat_penerima' WHERE id = '$id'
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah3($data)
{
    global $conn;
    $id = $data["id"];
    $nama_barang = $data["nama_barang"];
    $jenis_barang = $data["jenis_barang"];
    $berat_barang = $data["berat_barang"];
    $banyak_barang = $data["banyak_barang"];
    $total_transaksi = $data["total_transaksi"];
    $status = $data["status"];
    $query = "UPDATE `order` SET nama_barang = '$nama_barang', jenis_barang = '$jenis_barang', berat_barang = '$berat_barang', banyak_barang = '$banyak_barang', total_transaksi = '$total_transaksi', `status` = '$status' WHERE id = '$id'
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah4($data)
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

function ubah5($data)
{
    global $conn;
    $id = $data["id"];
    $nama = $data["nama"];
    $username = $data["username"];
    $email = $data["email"];
    $query = "UPDATE `tb_admin` SET nama = '$nama', username = '$username', email = '$email' WHERE id = '$id'
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah6($data)
{
    global $conn;
    $id = $data["id"];
    $nama_kurir = $data["nama_kurir"];
    $username = $data["username"];
    $email = $data["email"];
    $nomor_kurir = $data["nomor_kurir"];
    $plat_kurir = $data["plat_kurir"];
    $asal_kurir = $data["asal_kurir"];
    $alamat_kurir = $data["alamat_kurir"];
    $query = "UPDATE `tb_kurir` SET nama_kurir = '$nama_kurir', username = '$username', email = '$email', nomor_kurir = '$nomor_kurir', plat_kurir = '$plat_kurir', asal_kurir = '$asal_kurir', alamat_kurir = '$alamat_kurir' WHERE id = '$id'
    ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambahkurir($data)
{

        global $conn;

        $nama_kurir = mysqli_escape_string($conn, $data["nama_kurir"]);
        $email = mysqli_escape_string($conn, $data["email"]);
        $nomor_kurir = mysqli_escape_string($conn, $data["nomor_kurir"]);
        $plat_kurir = mysqli_escape_string($conn, $data["plat_kurir"]);
        $asal_kurir = mysqli_escape_string($conn, $data["asal_kurir"]);
        $alamat_kurir = mysqli_escape_string($conn, $data["alamat_kurir"]);
        $username = strtolower($data["username"]);
        $password = mysqli_escape_string($conn, $data["password"]);
        $password2 = mysqli_escape_string($conn, $data["password2"]);

        $result = mysqli_query($conn, "SELECT username FROM tb_kurir
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
            mysqli_query($conn, "INSERT INTO tb_kurir(`nama_kurir`, `email`, `nomor_kurir`, `plat_kurir`, `asal_kurir`, `alamat_kurir`, `username`, `password`) VALUES 
            ('$nama_kurir','$email','$nomor_kurir','$plat_kurir','$asal_kurir','$alamat_kurir','$username','$password')");

            return mysqli_affected_rows($conn);
        }
}

