<?php
require 'koneksi.php';
include "tanggal.php";
date_default_timezone_set("ASIA/JAKARTA");
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
        <p>Thank You</p>
            <?php
                $ambilsemuadatajumlah = mysqli_query($conn,"select * from barang");
                while($data=mysqli_fetch_array($ambilsemuadatajumlah)){
                    $idb = $data['idbarang'];
                    $namabarang = $data['namabarang'];
                    $harga = $data['harga'];
                    $jumlah = $data['jumlah'];
                    $tanggal = $data['tanggal'];
                    $total = $data['harga'] * $data['jumlah'];
                }
            ?>
            <table cellpadding="10" >
                <tr>
                    <td><h4>Description Item</h4></td>
                    <td><h4>Price (US$)</h4></td>
                    <td><h4>Quantity</h4></td>
                </tr>
                <tr>
                    <td><?=$namabarang;?></td>
                    <td><?=$harga;?></td>
                    <td><?=$jumlah;?></td>
                </tr>
                <tr>
                    <td><h4>Sub Total</h4></td>
                    <td><?=$total?></td>
                </tr>
                <tr>
                    <td colspan="2"><?=tgl_indonesia($tanggal)?></td>
                    <td></td>
                </tr>
            </table>
            
        </div>

    </div>

</body>
</html>