<!-- create connection to mysql database -->
<?php
// create connection to mysql
$koneksi = mysqli_connect("localhost:3308", "root", "", "toko_db");

// check connection
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>