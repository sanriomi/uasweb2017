<?php    
include "koneksi.php";
    $id_get=$_GET['id'];  
    $delete="Delete from tbl_food Where id='$id_get'";  
mysql_query($delete) or die ("Ada Kesalahan");  

echo "<center><h3>Data berhasil di hapus</h3></center>";    
?>  
<center>
<a href="dataubah.php">Kembali</a>
</center>
