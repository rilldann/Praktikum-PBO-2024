<?php
include 'conf.php';

$id = $_GET['id'];

try {
    $stmt = $conn->prepare("DELETE FROM mahasiswa WHERE id = :id");
    $stmt->execute([':id' => $id]);
    echo "<script>alert('Data berhasil dihapus');window.location.href='../praktikum1.php'</script>";
} catch (PDOException $e) {
    echo "<script>alert('Data gagal dihapus: " . $e->getMessage() . "');window.location.href='../praktikum1.php'</script>";
}
?>
