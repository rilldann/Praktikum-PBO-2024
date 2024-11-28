<?php
$base_url = "http://" . $_SERVER['HTTP_HOST'] . "/mvc";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Mahasiswa</title>
    <link rel="stylesheet" href="<?php echo $base_url; ?>/public/style1.css">
</head>
<body>
    <section>
        <h2>Form Update Mahasiswa</h2>

        <form method="POST" action="">
            <label for="nama_form">Nama:</label><br>
            <input type="text" id="nama_form" name="nama_form" 
                value="<?php echo isset($data['nama']) ? htmlspecialchars($data['nama']) : ''; ?>" required><br><br>
            
            <label for="nim_form">NIM:</label><br>
            <input type="text" id="nim_form" name="nim_form" 
                value="<?php echo isset($data['nim']) ? htmlspecialchars($data['nim']) : ''; ?>" required><br><br>

            <label for="prodi_form">Prodi:</label><br>
            <input type="text" id="prodi_form" name="prodi_form" 
                value="<?php echo isset($data['prodi']) ? htmlspecialchars($data['prodi']) : ''; ?>" required><br><br>

            <label for="jurusan_form">Jurusan:</label><br>
            <input type="text" id="jurusan_form" name="jurusan_form" 
                value="<?php echo isset($data['jurusan']) ? htmlspecialchars($data['jurusan']) : ''; ?>" required><br><br>

            <button type="submit">Update</button>
        </form>
    </section>
</body>
</html>
