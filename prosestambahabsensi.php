<?php
session_start();
include 'koneksi.php';

// Pastikan login
if (!isset($_SESSION['id_petugas'])) {
    echo "<script>alert('Sesi habis, silakan login ulang.'); window.location='login.php';</script>";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: tambah_absensi.php");
    exit;
}

// ambil dari POST
$id_napi = intval($_POST['id_napi'] ?? 0);
$tanggal_waktu = $_POST['tanggal_waktu'] ?? '';
$jenis_absensi = $_POST['jenis_absensi'] ?? '';
$alasan = $_POST['alasan'] ?? '';
$keterangan = $_POST['keterangan'] ?? '';

// ambil id_petugas dari session (lebih aman)
$id_petugas = intval($_SESSION['id_petugas']);

// validasi sederhana
if (!$id_napi || !$id_petugas || !$tanggal_waktu || !$jenis_absensi) {
    echo "<script>alert('Lengkapi semua field yang wajib.'); window.history.back();</script>";
    exit;
}

// verifikasi napi ada
$stmt = $koneksi->prepare("SELECT id_napi FROM napi WHERE id_napi = ? LIMIT 1");
$stmt->bind_param("i", $id_napi);
$stmt->execute();
$res = $stmt->get_result();
if ($res->num_rows === 0) {
    $stmt->close();
    echo "<script>alert('Narapidana tidak ditemukan.'); window.history.back();</script>";
    exit;
}
$stmt->close();

// simpan absensi
$sql = "INSERT INTO absensi_keluar_masuk (id_napi, id_petugas, tanggal_waktu, jenis_absensi, alasan, keterangan)
        VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $koneksi->prepare($sql);
$stmt->bind_param("iissss", $id_napi, $id_petugas, $tanggal_waktu, $jenis_absensi, $alasan, $keterangan);

if ($stmt->execute()) {
    $stmt->close();
    $koneksi->close();
    header("Location: absensi.php?status=success");
    exit;
} else {
    $err = $stmt->error;
    $stmt->close();
    $koneksi->close();
    echo "<script>alert('Gagal menyimpan: ".htmlspecialchars($err)."'); window.history.back();</script>";
    exit;
}
