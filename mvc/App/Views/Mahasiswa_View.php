<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswaa</title>
    <link rel="stylesheet" href="public/style1.css">
</head>
<body>
    <section>
        <h2>Form Mahasiswa</h2>
        <form action="index.php?action=add" method="post">
            <label for="nama">Nama Mahasiswa</label>
            <input type="text" id="nama" name="nama_form"><br><br>

            <label for="nim">Nomor Induk Mahasiswa</label>
            <input type="number" id="nim" name="nim_form"><br><br>

            <label for="prodi">Program Studi</label>
            <input type="text" id="prodi" name="prodi_form"> <br><br>

            <label for="jurusan">Jurusan </label>
            <input type="text" id="jurusan" name="jurusan_form"><br><br>

            <button type="submit">Kirimkan</button>
        </form>
    </section>

    <br><br>

    <!-- Menampilkan Tabel Data Mahasiswa -->
    <section>
        <h2>Data Mahasiswa</h2>
        <table border="1">
            <thead>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>PRODI</th>
                <th>JURUSAN</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php foreach ($data as $d): ?>
                    <tr>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['nim']; ?></td>
                        <td><?php echo $d['prodi']; ?></td>
                        <td><?php echo $d['jurusan']; ?></td>
                        <td>
                            <a href="index.php?action=update&id=<?php echo $d['id']; ?>">Update</a>
                            <a href="index.php?action=delete&id=<?php echo $d['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</body>
</html>
