<?php

include 'koneksi.php';

// Mengecek apakah parameter id_guru telah diterima
if (isset($_GET['hapus'])) {
  $id_user = $_GET['hapus'];

  // Query untuk menghapus data
  $query = "DELETE FROM tb_pendaftar WHERE id = '$id'";
  $result = mysqli_query($conn, $query);

  // Mengecek apakah penghapusan berhasil
  if ($result) {
    header("Location: pendaftar.php");
  } else {
    echo "Gagal menghapus data: " . mysqli_error($conn);
  }
}

?>