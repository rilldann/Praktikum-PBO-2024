<?php

include 'conf.php';

$nama = $_POST['nama_form'];
$nim = $_POST['nim_form'];
$prodi = $_POST['prodi_form'];
$jurusan = $_POST['jurusan_form'];

$mysqli = mysqli_query($conn, "INSERT INTO mahasiswa (nama, nim, prodi, jurusan)
VALUES ('$nama', '$nim', '$prodi', '$jurusan')");

if ($mysqli) {
    echo "<script>alert('data berhasil disimpan');window.location.href='../praktikum1.php'</script>";
} else {
    echo "<script>alert('data gagal disimpan');window.location.href='praktikum1.php'</script>";
}

?>