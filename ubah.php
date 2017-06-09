<?php
    include "check.php";
?>
<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>TEKNOKRAT</title>
    </head>
    <body>
        <div class="rio">
	       <div class="header">Ada yang ingin anda ubah <?=$_SESSION['username']?>?</div>
	       <div class="main">
		      <div class="left">
               </div>
		      <div class="middle">                  
                <form name="form1" method="get" action="ubahaction.php">  
					<table width="400" border="0" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFF99" bgcolor="#FF0000">  
						<tr bgcolor="#FFFFCC">  
						  <td height="50" colspan="2"><div align="center">EDIT DATA</div></td>  
						</tr>  
						 <?php  
						  include "koneksi.php";         
						  $sqlTampil="select * from tbl_blog Where id='$_GET[id]'";  
						  $qryTampil=mysql_query($sqlTampil);  
						  $dataTampil=mysql_fetch_array($qryTampil);  
						 ?>  
						<tr bgcolor="#FFFFFF">  
							  <td height="40">Judul </td>  
							  <td>: <input name="id" type="hidden" id="id" value="<?php echo $dataTampil['id']; ?>">
							  <input name="judul" type="text" id="judul" value="<?php echo $dataTampil['judul']; ?>"></td>  
						</tr>  
						<tr bgcolor="#FFFFFF">  
							  <td height="40">Tanggal </td>  
							  <td>:
							  <input name="tanggal" type="text" id="tanggal" value="<?php echo $dataTampil['tanggal']; ?>"></td>  
						</tr>  
						<tr bgcolor="#FFFFFF">  
							  <td height="40">Lokasi </td>  
							  <td>:
                                  <textarea name="lokasi" id="lokasi"><?php echo $dataTampil['lokasi']; ?></textarea>
                            </td>  
						</tr>  
						   
						<tr bgcolor="#FFFFFF">  
							  <td></td>  
							  <td height="50" align="center"><input type="submit" name="Submit" value="Perbaharui"></td>  
						</tr>  
					</table>  
				</form>  
              </div>
		      <div class="right">
                   <a href="logout.php">Logout</a><br>
                   <a href="input.php">input</a><br>
                   <a href="dataubah.php">Edit</a><br>
                   <a href="register.php">Daftar Admin Baru</a><br>
	       </div>
	       <div class="footer">Isi bagian Bawah...</div>
        </div>
    </body>
</html>
