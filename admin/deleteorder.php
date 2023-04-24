<?php
require 'functions.php';
?>

<?php

$id = $_GET['id'];
$query = "SELECT * from tb_admin where id = '$id'";
$query_exec = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($query_exec)):
$no_resi = $_GET["no_resi"];

if (delete($no_resi) > 0) {
    // header("Location: index.php?id=$row[id]");
    echo "
    <script>
    alert('Data Berhasil Dihapus');
    window.location.replace('index.php?id=$row[id]');
    </script>
    ";
} else {
    // header("Location: index.php?id=$row[id]");
    echo "
    <script>
    alert('Data Gagal Dihapus');
    window.location.replace('index.php?id=$row[id]');
    </script>
    ";
}
?>
<?php endwhile ?>