<?php 
$koneksi = mysqli_connect("localhost", "root", "", "db_pendaftaran");

//cek koneksi
if(mysqli_connect_errno()){
	echo "koneksi  database gagal : " . $koneksi;

}

 ?>