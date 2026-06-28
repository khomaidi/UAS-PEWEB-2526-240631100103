<?php
include 'koneksi.php';

// Cek apakah ID ada
if (!isset($_GET['id'])) {
    header("Location: data.php");
    exit;
}

$id = $_GET['id'];

// Mengambil data berdasarkan ID
$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

// Jika data tidak ditemukan
if (!$data) {
    echo "<script>
            alert('Data tidak ditemukan!');
            window.location='data.php';
          </script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>

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

            <h1 class="judul">Edit Data Mahasiswa</h1>

            <form action="update.php" method="POST">

                <input type="hidden" name="id" value="<?= $data['id']; ?>">

                <div class="form-group">
                    <label>NIM</label>
                    <input type="text" name="nim" class="form-control"
                           value="<?= $data['nim']; ?>" required>
                </div>

                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="text" name="nama" class="form-control"
                           value="<?= $data['nama']; ?>" required>
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>

                    <select name="jenis_kelamin" class="form-control" required>

                        <option value="Laki-laki"
                        <?= ($data['jenis_kelamin']=="Laki-laki") ? "selected" : ""; ?>>
                        Laki-laki
                        </option>

                        <option value="Perempuan"
                        <?= ($data['jenis_kelamin']=="Perempuan") ? "selected" : ""; ?>>
                        Perempuan
                        </option>

                    </select>

                </div>

                <div class="form-group">
                    <label>Program Studi</label>
                    <input type="text" name="prodi" class="form-control"
                           value="<?= $data['prodi']; ?>" required>
                </div>

                <div class="form-group">
                    <label>Semester</label>
                    <input type="number" name="semester" class="form-control"
                           value="<?= $data['semester']; ?>" min="1" max="14" required>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" rows="4" required><?= $data['alamat']; ?></textarea>
                </div>

                <button type="submit" class="btn btn-warning">
                    Update
                </button>

                <a href="data.php" class="btn btn-primary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

    <div class="footer">
        &copy; <?php echo date("Y"); ?> Sistem Pendataan Mahasiswa | UAS Pemrograman Web
    </div>

</body>
</html>
