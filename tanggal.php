<?php

	//mengubah format tanggal
	function tgl_indonesia($date){
		//array untuk hari
		$Hari = array("Sunday", "Monday", "Thrusday", "Wednesday", "Tuesday", "Friday", "Saturday");
		//array untuk bulan
		$Bulan = array("January", "February", "March", "April", "Mei", "June", "July", "August", "September", "Oktober", "November", "Desember");

		//memisahkan format tanggal bulan dan tahun menggunakan substring
		$tahun = substr($date, 0, 4);
		$bulan = substr($date, 5, 2);
		$tgl = substr($date, 8, 2);
		$waktu = substr($date,11, 5);
		$hari = date("w", strtotime($date));

		$result = $Hari[$hari].", ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun." ".$waktu;
		return $result;
	}