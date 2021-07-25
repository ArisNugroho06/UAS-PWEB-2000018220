<?php
require 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Belanja</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

	<div class="log">
		<div class="kosong">
			<img src="6.jpg">
			<h1>Retrogrid Art</h1>
			<a href="index.php">Back</a>
		</div>

		<div class="menu">
		<p>Check Out</p>
			<form method="post">
			<input type="text" name="namabarang" placeholder="Enter Item Name..."><br>
			<br>
			<input type="number" name="harga" placeholder="Price (US$)..."><br>
			<br>
			<input type="number" name="jumlah" placeholder="Enter Item Quantity..."><br>
			<br>
			<button class="masuk" type="submit" name="addnewitem">Submit</button>
			</form>

		</div>

	</div>

</body>
</html>