<?php
// koneksi.php
$host     = "localhost";  // biasanya localhost
$user     = "root";       // user database
$pass     = "";           // password database
$db       = "absensi"; // nama database

$koneksi = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
