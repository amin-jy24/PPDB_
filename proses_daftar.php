<?php
include "db.php";

$nama = $_POST['nama'];
$jk   = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO pendaftar (nama, jenis_kelamin, alamat) VALUES ('$nama', '$jk', '$alamat')";
if ($conn->query($sql) === TRUE) {
    echo "Pendaftaran berhasil! <a href='index.php'>Kembali ke Beranda</a>";
} else {
    echo "Gagal: " . $conn->error;
}
$conn->close();
?>