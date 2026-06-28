<?php
include 'koneksi.php';

// Menghitung jumlah data mahasiswa
$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
$total = mysqli_num_rows($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendataan Mahasiswa</title>

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

            <h1 class="judul">Selamat Datang</h1>

            <p style="text-align:center; margin-bottom:20px;">
                Selamat datang di <b>Sistem Pendataan Mahasiswa</b>.
                Aplikasi ini dibuat untuk memudahkan pengelolaan data mahasiswa
                seperti menambah, mengubah, melihat, dan menghapus data mahasiswa.
            </p>

            <hr><br>

            <h3>Informasi Aplikasi</h3>

            <br>

            <table>
                <tr>
                    <th width="40%">Keterangan</th>
                    <th>Isi</th>
                </tr>

                <tr>
                    <td>Nama Aplikasi</td>
                    <td>Sistem Pendataan Mahasiswa</td>
                </tr>

                <tr>
                    <td>Database</td>
                    <td>db_mahasiswa</td>
                </tr>

                <tr>
                    <td>Total Data Mahasiswa</td>
                    <td><?php echo $total; ?> Mahasiswa</td>
                </tr>

                <tr>
                    <td>Bahasa Pemrograman</td>
                    <td>PHP Native</td>
                </tr>

                <tr>
                    <td>Database Server</td>
                    <td>MySQL</td>
                </tr>

            </table>

            <br>

            <a href="data.php" class="btn btn-primary">
                Lihat Data Mahasiswa
            </a>

            <a href="tambah.php" class="btn btn-success">
                Tambah Mahasiswa
            </a>

        </div>

    </div>

    <div class="footer">
        &copy; <?php echo date("Y"); ?> Sistem Pendataan Mahasiswa | UAS Pemrograman Web
    </div>

</body>
</html>
