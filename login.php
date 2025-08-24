<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Cek username & password langsung (plain text)
    $stmt = $koneksi->prepare("SELECT * FROM petugas WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $petugas = $result->fetch_assoc();

        // Simpan session
        $_SESSION['id_petugas']   = $petugas['id_petugas'];
        $_SESSION['nama_petugas'] = $petugas['nama_petugas'];
        $_SESSION['jabatan']      = $petugas['jabatan'];
        $_SESSION['foto'] = $petugas['foto'];


        header("Location: dashboard.php");
        exit;
    } else {
        echo "<script>alert('Username atau password salah!');window.location='index.html';</script>";
    }
}
?>
