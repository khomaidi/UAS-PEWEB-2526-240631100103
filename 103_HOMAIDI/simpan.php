<?php
include 'koneksi.php';

// Mengecek apakah tombol simpan ditekan
if (isset($_POST['nim'])) {

    // Mengambil data dari form
    $nim             = $_POST['nim'];
    $nama            = $_POST['nama'];
    $jenis_kelamin   = $_POST['jenis_kelamin'];
    $prodi           = $_POST['prodi'];
    $semester        = $_POST['semester'];
    $alamat          = $_POST['alamat'];

    // Query simpan data
    $sql = "INSERT INTO mahasiswa
            (nim, nama, jenis_kelamin, prodi, semester, alamat)
            VALUES
            ('$nim', '$nama', '$jenis_kelamin', '$prodi', '$semester', '$alamat')";

    $query = mysqli_query($koneksi, $sql);

    // Cek apakah berhasil
    if ($query) {
        echo "<script>
                alert('Data mahasiswa berhasil disimpan!');
                window.location='data.php';
              </script>";
    } else {
        echo "<script>
                alert('Data mahasiswa gagal disimpan!');
                window.location='tambah.php';
              </script>";
    }

} else {

    header("Location: tambah.php");

}
?>
