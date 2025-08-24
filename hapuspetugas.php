<?php
include 'auth.php';
cek_login();

include 'auth.php';
cek_login();

include 'koneksi.php';

if (isset($_GET['id'])) {
    $id_petugas = $_GET['id'];

    $sql = "DELETE FROM petugas WHERE id_petugas='$id_petugas'";
    if (mysqli_query($koneksi, $sql)) {
        header("Location: daftarpetugas.php?pesan=hapus_sukses");
        exit;
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
} else {
    echo "ID petugas tidak diberikan.";
}
?>
