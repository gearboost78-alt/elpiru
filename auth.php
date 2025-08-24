<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function cek_login() {
    if (!isset($_SESSION['id_petugas']) || empty($_SESSION['id_petugas'])) {
        header("Location: index.html?pesan=belum_login");
        exit();
    }
}
