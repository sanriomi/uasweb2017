<?php  
  include "koneksi.php";  
    $id_get = $_GET['id'];
	$judul_get = $_GET['judul'];
	$tanggal_get = $_GET['tanggal'];
	$lokasi_get = $_GET['lokasi'];
      
  $update="UPDATE tbl_food SET title='$judul_get',date='$tanggal_get',picture='$lokasi_get' WHERE id='$id_get'";  
  mysql_query($update);  
      
  echo "<center>Data Berhasil Di Update<center>";  
  echo "<center><h3><a href=dataubah.php>
	Kembali</a></h3></center>";  
?>
