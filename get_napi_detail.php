<?php
include 'auth.php';
cek_login();

include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    
    $query = mysqli_query($koneksi, "SELECT blok, kamar FROM napi WHERE id_napi = $id LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    // jika data ada
    if ($data) {
        echo json_encode($data);
    } else {
        echo json_encode(["blok" => "", "kamar" => ""]);
    }
}
?>
