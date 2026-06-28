<?php
include 'koneksi.php';

// Mengambil semua data mahasiswa
$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa ORDER BY id ASC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <h2>Sistem Pendataan Mahasiswa</h2>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="data.php">Data Mahasiswa</a></li>
            <li><a href="tambah.php">Tambah Mahasiswa</a></li>
        </ul>
    </div>

    <!-- Container -->
    <div class="container">

        <div class="card">

            <h1 class="judul">Data Mahasiswa</h1>

            <a href="tambah.php" class="btn btn-success">
                + Tambah Mahasiswa
            </a>

            <br><br>

            <table>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Program Studi</th>
                    <th>Semester</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>

                <?php
                $no = 1;

                while($row = mysqli_fetch_assoc($data)){
                ?>

                <tr>

                    <td><?= $no++; ?></td>

                    <td><?= $row['nim']; ?></td>

                    <td><?= $row['nama']; ?></td>

                    <td><?= $row['jenis_kelamin']; ?></td>

                    <td><?= $row['prodi']; ?></td>

                    <td><?= $row['semester']; ?></td>

                    <td><?= $row['alamat']; ?></td>

                    <td>

                        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning">
                            Edit
                        </a>

                        <a href="hapus.php?id=<?= $row['id']; ?>"
                           class="btn btn-danger"
                           onclick="return confirm('Yakin ingin menghapus data ini?')">
                            Hapus
                        </a>

                    </td>

                </tr>

                <?php } ?>

            </table>

        </div>

    </div>

    <div class="footer">
        &copy; <?php echo date("Y"); ?> Sistem Pendataan Mahasiswa | UAS Pemrograman Web
    </div>

</body>
</html>
