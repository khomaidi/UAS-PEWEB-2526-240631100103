<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<nav class="navbar">

    <div class="logo">
        🎓 Sistem Pendataan Mahasiswa
    </div>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="data.php">Data Mahasiswa</a></li>
        <li><a href="tambah.php" class="active">Tambah Mahasiswa</a></li>
    </ul>

</nav>

<div class="container">

<div class="form-card">

<h2>Tambah Data Mahasiswa</h2>

<p>Silakan isi seluruh data mahasiswa.</p>

<form action="simpan.php" method="POST">

<div class="form-group">
<label>NIM</label>
<input type="text" name="nim" class="form-control" placeholder="Masukkan NIM" required>
</div>

<div class="form-group">
<label>Nama Mahasiswa</label>
<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Mahasiswa" required>
</div>

<div class="form-group">
<label>Jenis Kelamin</label>

<select name="jenis_kelamin" class="form-control" required>

<option value="">Pilih Jenis Kelamin</option>

<option value="Laki-laki">Laki-laki</option>

<option value="Perempuan">Perempuan</option>

</select>

</div>

<div class="form-group">

<label>Program Studi</label>

<input type="text" name="prodi" class="form-control" placeholder="Contoh : Teknik Informatika" required>

</div>

<div class="form-group">

<label>Semester</label>

<input type="number" name="semester" class="form-control" min="1" max="14" required>

</div>

<div class="form-group">

<label>Alamat</label>

<textarea name="alamat" rows="4" class="form-control" placeholder="Masukkan alamat lengkap"></textarea>

</div>

<div class="button-group">

<button class="btn btn-success">
💾 Simpan
</button>

<a href="data.php" class="btn btn-primary">
⬅ Kembali
</a>

</div>

</form>

</div>

</div>

<footer>

© <?php echo date('Y');?> Sistem Pendataan Mahasiswa

</footer>

</body>
</html>
