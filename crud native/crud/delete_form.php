<?php
include 'conf.php';

$id = $_GET['id'];

$mysqli =mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

if ($mysqli) {
    echo "<script>alert('data berhasil dihapus');window.location.href='../praktikum1.php'</script>";
} else {
    echo "<script>alert('data gagal dihapus');window.location.href='../praktikum1.php'</script>";
}