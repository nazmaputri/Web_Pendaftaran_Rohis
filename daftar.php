<?php 

$hostname = "localhost";
$user = "root";
$password = "";
$db_name = "#";

$koneksi = mysqli_connect($hostname,$user,$password,$db_name);
 
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
    $username = $_POST['username'];
    $kelas = $_POST['kelas'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $alasan = $_POST['alasan']; 

    $cek_user = mysqli_query($koneksi,"SELECT * FROM tb_pendaftar WHERE username = '$username'");
    $cek_login = mysqli_num_rows($cek_user);

	if ($cek_login > 0) {
        echo "<script>
		alert('username telah tedaftar');
		window.location = 'daftar.php';
        </script>";
    }else {
    	if ($password1 != $password2) {
    		echo "<script>
        	alert('konfirmasi password tidak sesuai');
        	window.location = 'daftar.php';
        	</script>";
    	}else {
        	mysqli_query($koneksi,"INSERT INTO tb_pendaftar VALUES('','$nama','$username',''$kelas','$email',$password1,'$alasan')");
        	echo "<script>
        	alert('data berhasil dikirim!');
        	window.location = 'login.php';
        	</script>";
   		}
    }
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

</head>

<body class="bg-gradient-success">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="text-center">
                        <div class="p-5">
                            <!--ll-->
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Daftar dulu yukk!</h1>
                            </div>
                             <!--end ll-->
                            <form class="user" action="" method="POST">
                                
                                <div class="form-group row">
                                    <div class="col-sm-10 mb-3 mb-sm-3">
                                        <input type="text" name="nama" class="form-control form-control-user" id="exampleFirst"
                                            placeholder="Nama Lengkap">
                                    </div>

                                    <div class="col-sm-10 mb-3 mb-sm-0">
                                        <input type="text" name="username" class="form-control form-control-user" id="exampleFirst"
                                            placeholder="username">
                                    </div>

                                    <div class="col-sm-10 mb-3 mb-sm-0 mt-3 form-control form-control-user" aria-label=".form-select example">
                                        <select name="kelas" class="col-sm-10 mb-sm-0 mt-3 mb-3" aria-label=".form-select example">
                                            <option value="1">10 PPLG</option>
                                            <option value="2">10 BCF</option>
                                            <option value="3">10 ANIMASI</option>
                                            <option value="4">10 TO</option>
                                            <option value="5">10 TPFL</option>
                                            <option value="6">11 PPLG 1</option>
                                            <option value="7">11 PPLG 2</option>
                                            <option value="8">11 PPLG 3</option>
                                            <option value="9">11 BCF 1</option>
                                            <option value="10">11 BCF 2</option>
                                            <option value="11">11 ANIMASI 1</option>
                                            <option value="12">11 ANIMASI 2</option>
                                            <option value="13">11 TO 1</option>
                                            <option value="14">11 TO 2</option>
                                            <option value="15">11 TPFL</option>
                                        </select>
                                    </div>

                                     <div class="col-sm-10 mb-3 mb-sm-0 mt-3">
                                        <input type="no" class="form-control form-control-user" name="no_telp" id="exampleno_telp" placeholder="No_telp">
                                     </div>

                                </div>
                                <div class="form-group">
                                <div class="col-sm-10 mb-3 mb-sm-0">
                                        <input type="text" name="email" class="form-control form-control-user" id="exampleFirst"
                                            placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-5 mb-3 mb-sm-0">
                                        <input type="password" name="password1" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">

                                    </div>
                                    <div class="col-sm-5 mb-3 mb-sm-0 form-group row">
                                        <input type="password" name="password2" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Ulangi Password">

                                    </div>
                                </div>
                                <div class="col-sm-10 mb-4 mt-3">
                                        <label type="text" name="alasan" id="alasan" for="exampleFormControlTextarea1" class="form-label">Alasan Masuk ROHIS</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                       
                                       <button type="submit" name="submit" value="daftar" name="submit" class="btn btn-success btn-user btn-block">
                                    Daftar</button>
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


