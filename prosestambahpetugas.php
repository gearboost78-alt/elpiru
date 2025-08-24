<?php
include 'koneksi.php';

// ambil data dari form
$nama_petugas = $_POST['nama_petugas'];
$jabatan      = $_POST['jabatan'];
$username     = $_POST['username'];
$password     = $_POST['password']; // langsung simpan tanpa hash (sesuai permintaan)

// Upload foto
$foto_name = $_FILES['foto']['name'];
$foto_tmp  = $_FILES['foto']['tmp_name'];

// Buat nama unik biar tidak bentrok
if (!empty($foto_name)) {
    $foto_name = uniqid() . "_" . $foto_name;
    $foto_folder = "uploads/petugas/" . $foto_name;
    move_uploaded_file($foto_tmp, $foto_folder);
}

// query insert
$sql = "INSERT INTO petugas (nama_petugas, jabatan, username, password, foto)
        VALUES ('$nama_petugas', '$jabatan', '$username', '$password', '$foto_name')";

if (mysqli_query($koneksi, $sql)) {
    echo "<script>
            alert('Data petugas berhasil disimpan');
            window.location='daftarpetugas.php';
          </script>";
} else {
    echo "Error: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
