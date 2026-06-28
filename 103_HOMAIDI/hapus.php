<?php
include 'koneksi.php';

// Cek apakah ID tersedia
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    // Hapus data berdasarkan ID
    $query = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id='$id'");

    if ($query) {
        echo "<script>
                alert('Data mahasiswa berhasil dihapus!');
                window.location='data.php';
              </script>";
    } else {
        echo "<script>
                alert('Data mahasiswa gagal dihapus!');
                window.location='data.php';
              </script>";
    }

} else {

    header("Location: data.php");

}
?>
