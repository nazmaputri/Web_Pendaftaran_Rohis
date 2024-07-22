<?php 

//koneksi database
include 'koneksi.php';

//menangkap sebuah data yang dikirim dari form
if( isset($_POST["save"])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $kelas = $_POST['kelas'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];

    //menginput data ke database 
    $insert = mysqli_query($koneksi, "INSERT INTO tb_pendaftar (nama, username, kelas, no_telp, email) VALUES ('$nama', '$username', '$kelas', '$no_telp', '$email')");

    //mengalihkan halaman kembali ke pendaftar.php
    header("location: pendaftar.php");
    exit(); // tambahkan baris ini untuk menghentikan eksekusi kode setelah mengalihkan halaman
}

?>
