<?php
include_once("koneksi.php");

// jika ada kiriman update
if(isset($_POST['update'])) {
    $id = $_POST['id']; // Ambil id sebagai primary key
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $kelas = $_POST['kelas'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];

    // update data berdasarkan ID
    $query = "UPDATE tb_pendaftar SET nama='$nama', username='$username', kelas='$kelas', no_telp='$no_telp', email='$email' WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);

    if($result) {
        header("Location: pendaftar.php");
        exit();
    } else {
        echo "Update data gagal. Error: " . mysqli_error($koneksi);
    }
}
?>
