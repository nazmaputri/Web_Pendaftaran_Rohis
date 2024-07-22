<?php 

//koneksi database
include 'koneksi.php';

//menangkap sebuah data yang dikirim dari form
if( isset($_POST["submit"])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $kelas = $_POST['kelas'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];

    //menginput data ke database 
    $insert = mysqli_query($koneksi, "INSERT INTO tb_pendaftar (nama, username, kelas, no_telp, email) VALUES ('$nama', '$username', '$kelas', '$no_telp', '$email')");

    //mengalihkan halaman kembali ke pendaftar.php
    header("location: index.html");
    exit(); // tambahkan baris ini untuk menghentikan eksekusi kode setelah mengalihkan halaman
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RODAMU - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-success">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="text-center">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Daftar dulu yukk!</h1>
                            </div>
                            <form class="user" method="post" action="">
                                <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-3">
                                        <input type="text" class="form-control form-control-user" id="nama"
                                            placeholder="Nama Lengkap" name="nama">
                                    </div>
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="username"
                                            placeholder="Username" name="username">
                                    </div>

                                    <div class="col-sm-12 mb-3 mb-sm-0 mt-3">
                                        <input type="text" class="form-control form-control-user" id="examplekelas"
                                            placeholder="Kelas dan Jurusan" name="kelas">
                                    </div>

                                     <div class="col-sm-12 mb-3 mb-sm-0 mt-3">
                                        <input type="text" class="form-control form-control-user" id="exampleno_telp"
                                            placeholder="No_telp" name="no_telp">
                                    </div>

                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email" name="email">
                                </div>
                                
                                <!-- <div class="mb-4 mt-3">
                                        <label for="exampleFormControlTextarea1" class="form-label" >Alasan Masuk ROHIS</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div> -->
                                <button type="submit" method="POST" name="submit" class="btn btn-success btn-user btn-block">Daftar</button>
                               
                                <hr>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>