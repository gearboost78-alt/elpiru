<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_petugas   = $_POST['id_petugas'];
    $nama_petugas = $_POST['nama_petugas'];
    $jabatan      = $_POST['jabatan'];
    $username     = $_POST['username'];
    $password     = $_POST['password'];

    // Cek apakah ada foto baru diupload
    $foto_name = $_FILES['foto']['name'];
    $foto_tmp  = $_FILES['foto']['tmp_name'];
    $foto_new  = "";

    if (!empty($foto_name)) {
        $foto_new = time() . "_" . basename($foto_name); // supaya unik
        $target   = "uploads/petugas/" . $foto_new;

        // Pindahkan file
        if (move_uploaded_file($foto_tmp, $target)) {
            $update_foto = ", foto='$foto_new'";
        } else {
            $update_foto = ""; // gagal upload, jangan update foto
        }
    } else {
        $update_foto = ""; // tidak ada file baru
    }

    // Update query
    if (empty($password)) {
        $sql = "UPDATE petugas 
                SET nama_petugas='$nama_petugas', 
                    jabatan='$jabatan', 
                    username='$username'
                    $update_foto
                WHERE id_petugas='$id_petugas'";
    } else {
        $sql = "UPDATE petugas 
                SET nama_petugas='$nama_petugas', 
                    jabatan='$jabatan', 
                    username='$username', 
                    password='$password'
                    $update_foto
                WHERE id_petugas='$id_petugas'";
    }

    if (mysqli_query($koneksi, $sql)) {
        header("Location: daftarpetugas.php?pesan=update_sukses");
    } else {
        echo "Gagal mengupdate data: " . mysqli_error($koneksi);
    }
}
?>
