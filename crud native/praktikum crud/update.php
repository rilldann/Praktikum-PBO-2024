<?php
include 'crud/conf.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id = $id");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">

</head>
<body>
    <section> 
        <h2>Form Update Mahasiswa</h2>
      
        <form action="crud/update_form.php" method="post"> 
            <input type="hidden" name="id" value="<?= $d['id'] ?>">

            <label for="nama">Nama Mahasiswa</label>
            <input type="text" id="nama" name="nama_form" value="<?= $d['nama'] ?>"><br><br>

            <label for="nim">Nomor Induk Mahasiswa</label>
            <input type="number" id="nim" name="nim_form" value="<?= $d['nim'] ?>"><br><br>

            <label for="prodi">Program Studi</label>
            <input type="text" id="prodi" name="prodi_form" value="<?= $d['prodi'] ?>"> <br><br>

            <label for="jurusan">Jurusan </label>
            <input type="text" id="jurusan" name="jurusan_form" value="<?= $d['jurusan'] ?>"><br><br>

            <button type="submit">Perbarui</button>
        </form>
    </section>
</body>
</html>