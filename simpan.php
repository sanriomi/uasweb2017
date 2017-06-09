<?php
	$judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $lokasi = $_POST['lokasi'];
    $tanggal = date("Y-m-d");
	include "koneksi.php";
	$kueri = "insert into tbl_food(title,date,contain,picture) values ('$judul','$tanggal', '$isi','$lokasi')";
	mysql_query($kueri); 
	echo "<center>Data Berhasil Di Simpan<center>";  
	echo "<center><h3>
	<a href=indexadmin.php>
	Kembali
	</a></h3></center>"; 
	echo $tanggal.$judul.$isi;	
?>
