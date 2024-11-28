<?php
include 'conf.php';

$id = $_POST['id'];
$nama = $_POST['nama_form'];
$nim = $_POST['nim_form'];
$prodi = $_POST['prodi_form'];
$jurusan = $_POST['jurusan_form'];

try {
    $stmt = $conn->prepare("UPDATE mahasiswa SET nama = :nama, nim = :nim, prodi = :prodi, jurusan = :jurusan WHERE id = :id");
    $stmt->execute([
        ':id' => $id,
        ':nama' => $nama,
        ':nim' => $nim,
        ':prodi' => $prodi,
        ':jurusan' => $jurusan
    ]);
    echo "<script>alert('Data berhasil diubah');window.location.href='../praktikum1.php'</script>";
} catch (PDOException $e) {
    echo "<script>alert('Data gagal diubah: " . $e->getMessage() . "');window.location.href='../praktikum1.php'</script>";
}
?>
