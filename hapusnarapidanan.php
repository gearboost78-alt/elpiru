<?php
include 'auth.php';
cek_login();

include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM napi WHERE id_napi='$id'");
header("Location: daftarnarapidana.php");
?>
