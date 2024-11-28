<?php
include 'crud/conf.php';
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
        <h2>Form Mahasiswa</h2>
        <form action="crud/add_form.php" method="post"> 
            <label for="nama">Nama Mahasiswa</label>
            <input type="text" id="nama" name="nama_form" required><br><br>

            <label for="nim">Nomor Induk Mahasiswa</label>
            <input type="number" id="nim" name="nim_form" required><br><br>

            <label for="prodi">Program Studi</label>
            <input type="text" id="prodi" name="prodi_form" required><br><br>

            <label for="jurusan">Jurusan </label>
            <input type="text" id="jurusan" name="jurusan_form" required><br><br>

            <button type="submit">Kirimkan</button>
        </form>
    </section>

    <br><br><br><br>

    <section id="chiko">
        <h2>Data Mahasiswa</h2>
        <table border="5">
            <thead>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>PRODI</th>
                    <th>JURUSAN</th>
                    <th>Action</th>
                </tr>
            </thead>

            <?php
            try {
                $stmt = $conn->query("SELECT * FROM mahasiswa");
                while ($d = $stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tbody>
                <tr>
                    <td><?php echo htmlspecialchars($d['nama']); ?></td>
                    <td><?php echo htmlspecialchars($d['nim']); ?></td>
                    <td><?php echo htmlspecialchars($d['prodi']); ?></td>
                    <td><?php echo htmlspecialchars($d['jurusan']); ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $d['id']; ?>">Update</a> |
                        <a href="crud/delete_form.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                    </td>
                </tr>
            </tbody>
            <?php
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            ?>
        </table>
    </section>
</body>
</html>
