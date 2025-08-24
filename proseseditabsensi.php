<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_absensi = $_POST['id_absensi'];
    $jenis_absensi = $_POST['jenis_absensi'];
    $tanggal_waktu = $_POST['tanggal_waktu'];
    $waktu_masuk = $_POST['waktu_masuk'] ?: NULL; // Bisa kosong
    $alasan = $_POST['alasan'];
    $keterangan = $_POST['keterangan'];

    $sql = "UPDATE absensi_keluar_masuk SET 
            jenis_absensi = ?, 
            tanggal_waktu = ?, 
            waktu_masuk = ?, 
            alasan = ?, 
            keterangan = ?
            WHERE id_absensi = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("sssssi", $jenis_absensi, $tanggal_waktu, $waktu_masuk, $alasan, $keterangan, $id_absensi);

    if ($stmt->execute()) {
        header('Location: absensi.php?status=success');
    } else {
        echo "Error updating record: " . $koneksi->error;
    }
}
?>
