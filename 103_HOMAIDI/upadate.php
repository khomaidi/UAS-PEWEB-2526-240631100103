<?php
include 'koneksi.php';

// Cek apakah form dikirim
if (isset($_POST['id'])) {

    // Mengambil data dari form
    $id              = $_POST['id'];
    $nim             = $_POST['nim'];
    $nama            = $_POST['nama'];
    $jenis_kelamin   = $_POST['jenis_kelamin'];
    $prodi           = $_POST['prodi'];
    $semester        = $_POST['semester'];
    $alamat          = $_POST['alamat'];

    // Query update data
    $sql = "UPDATE mahasiswa SET
            nim = '$nim',
            nama = '$nama',
            jenis_kelamin = '$jenis_kelamin',
            prodi = '$prodi',
            semester = '$semester',
            alamat = '$alamat'
            WHERE id = '$id'";

    $query = mysqli_query($koneksi, $sql);

    // Cek hasil update
    if ($query) {
        echo "<script>
                alert('Data mahasiswa berhasil diperbarui!');
                window.location='data.php';
              </script>";
    } else {
        echo "<script>
                alert('Data mahasiswa gagal diperbarui!');
                window.location='edit.php?id=$id';
              </script>";
    }

} else {

    header("Location: data.php");

}
?>
