<?php
require 'functions.php';
?>

<?php
$id = $_GET['id'];
$query = "SELECT * from tb_admin where id = '$id'";
$query_exec = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($query_exec)):
$nama = $_GET["nama"];

if (delete2($nama) > 0) {
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
    alert('Data Berhasil Dihapus');
    window.location.replace('index.php?id=$row[id]');
    </script>
    ";
}

?>
<?php endwhile; ?>