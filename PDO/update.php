<?php
include 'crud/conf.php';

// Ambil ID dari URL
$id = $_GET['id'];

try {
    $stmt = $conn->prepare("SELECT * FROM mahasiswa WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $d = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$d) {
        throw new Exception("Data tidak ditemukan untuk ID $id");
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update Mahasiswa</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <section> 
        <h2>Form Update Mahasiswa</h2>
      
        <form action="crud/update_form.php" method="post"> 
            <input type="hidden" name="id" value="<?= htmlspecialchars($d['id']) ?>">

            <label for="nama">Nama Mahasiswa</label>
            <input type="text" id="nama" name="nama_form" value="<?= htmlspecialchars($d['nama']) ?>" required><br><br>

            <label for="nim">Nomor Induk Mahasiswa</label>
            <input type="number" id="nim" name="nim_form" value="<?= htmlspecialchars($d['nim']) ?>" required><br><br>

            <label for="prodi">Program Studi</label>
            <input type="text" id="prodi" name="prodi_form" value="<?= htmlspecialchars($d['prodi']) ?>" required><br><br>

            <label for="jurusan">Jurusan </label>
            <input type="text" id="jurusan" name="jurusan_form" value="<?= htmlspecialchars($d['jurusan']) ?>" required><br><br>

            <button type="submit">Perbarui</button>
        </form>
    </section>
</body>
</html>
