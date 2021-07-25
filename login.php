<?php
require 'koneksi.php';
session_start();

//cek email terdaftar atau tidak
if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	//mencocokan data dengan database
	$cekdata = mysqli_query($conn, "SELECT * FROM login where email='$email' and password='$password'");

	//hitung data di database
	$hitung = mysqli_num_rows($cekdata);

	if($hitung>0){
	   $_SESSION['log'] = 'True';
        header('location:index.php');
    } else {
        header('location:login.php');
    };
};

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

	<div class="log">
		<div class="kosong">
		<img src="6.jpg">
		<h1>Retrogrid Art</h1>
		</div>

		<div class="menu">
		<p>Login</p>
			<form method="post">
				<input type="text" name="email" placeholder="Enter Email Address..."><br>
				<br>
				<input type="password" name="password" placeholder="Password..."><br>
				<br>
				<button class="masuk" type="submit" name="login">Login</button>
			</form>
		</div>
	</div>

</body>
</html>