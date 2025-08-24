<?php
include 'koneksi.php';

$id_napi = $_POST['id_napi'];
$nama_lengkap = $_POST['nama_lengkap'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$kasus = $_POST['kasus'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$tanggal_bebas = $_POST['tanggal_bebas'];
$status_aktif = $_POST['status_aktif'];
$blok = $_POST['blok'];
$kamar = $_POST['kamar'];

// cek upload foto
if($_FILES['foto']['name'] != ''){
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    move_uploaded_file($tmp, "uploads/".$foto);
    $sql = "UPDATE napi SET nama_lengkap='$nama_lengkap', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', kasus='$kasus', tanggal_masuk='$tanggal_masuk', tanggal_bebas='$tanggal_bebas', status_aktif='$status_aktif', blok='$blok', kamar='$kamar', foto='$foto' WHERE id_napi='$id_napi'";
} else {
    $sql = "UPDATE napi SET nama_lengkap='$nama_lengkap', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', alamat='$alamat', kasus='$kasus', tanggal_masuk='$tanggal_masuk', tanggal_bebas='$tanggal_bebas', status_aktif='$status_aktif', blok='$blok', kamar='$kamar' WHERE id_napi='$id_napi'";
}

mysqli_query($koneksi, $sql);
header("Location: daftarnarapidana.php");
?>
