<?php

	//membuat koneksi ke databse
	$conn = mysqli_connect("localhost","root","","shop");

	//memasukkan data barang terjual ke database
	if(isset($_POST['addnewitem'])){
		$namabarang = $_POST['namabarang'];
		$harga = $_POST['harga'];
		$jumlah = $_POST['jumlah'];

		$addtotable = mysqli_query($conn,"insert into barang (namabarang, harga, jumlah) values('$namabarang','$harga','$jumlah')");
		if($addtotable){
			header('location:struk.php');
		} else {
			echo 'Gagal';
			header('location:belanja.php');
		}
	}
?>