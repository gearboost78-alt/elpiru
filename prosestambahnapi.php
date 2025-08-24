<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

    // Upload foto
    $foto_name = $_FILES['foto']['name'];
    $foto_tmp = $_FILES['foto']['tmp_name'];
    $foto_folder = "uploads/napi/" . $foto_name;

    if (move_uploaded_file($foto_tmp, $foto_folder)) {
        $sql = "INSERT INTO napi (nama_lengkap, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, kasus, tanggal_masuk, tanggal_bebas, status_aktif, blok, kamar, foto)
                VALUES ('$nama_lengkap','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$alamat','$kasus','$tanggal_masuk','$tanggal_bebas','$status_aktif','$blok','$kamar','$foto_name')";

        if (mysqli_query($koneksi, $sql)) {
            header("Location: daftarnarapidana.php?status=sukses");
        } else {
            echo "Gagal menyimpan data: " . mysqli_error($koneksi);
        }
    } else {
        echo "Gagal upload foto.";
    }
}
?>
