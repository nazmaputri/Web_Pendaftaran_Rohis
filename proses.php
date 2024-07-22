<?php
   if(isset($_POST['aksi'])){
     if($_POST['aksi'] == "add"){

         $nama = $_POST['nama'];
         $username = $_POST['username'];
         $kelas = $_POST['kelas'];
         $no_telp = $_POST['no_telp'];
         $email = $_POST['email'];

         echo $nama." | ".$username." | ".$kelas." | ".$no_telp." | ".$email;

         echo "<br>Tambah Data <a href='index.php'>[Home]</a>";
     } 
   }

?>