<?php

include 'conf.php';

$id = $_POST['id'];
$nama = $_POST['nama_form'];
$nim = $_POST['nim_form'];
$prodi = $_POST['prodi_form'];
$jurusan = $_POST['jurusan_form'];

$mysqli = mysqli_query($conn, "UPDATE mahasiswa SET 
nama='$nama', 
nim='$nim', 
prodi='$prodi', 
jurusan='$jurusan'
WHERE id = $id");

if ($mysqli) {
    echo "<script>alert('data berhasil diubah');window.location.href='../praktikum1.php'</script>";
} else {
    echo "<script>alert('data gagal diubah');window.location.href='../praktikum1.php'</script>";
}