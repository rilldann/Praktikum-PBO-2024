<?php
include 'conf.php';

$nama = $_POST['nama_form'];
$nim = $_POST['nim_form'];
$prodi = $_POST['prodi_form'];
$jurusan = $_POST['jurusan_form'];

try {
    $stmt = $conn->prepare("INSERT INTO mahasiswa (nama, nim, prodi, jurusan) VALUES (:nama, :nim, :prodi, :jurusan)");
    $stmt->execute([
        ':nama' => $nama,
        ':nim' => $nim,
        ':prodi' => $prodi,
        ':jurusan' => $jurusan
    ]);
    echo "<script>alert('Data berhasil disimpan');window.location.href='../praktikum1.php'</script>";
} catch (PDOException $e) {
    echo "<script>alert('Data gagal disimpan: " . $e->getMessage() . "');window.location.href='../praktikum1.php'</script>";
}
?>
