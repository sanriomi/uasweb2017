<html >
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>TEKNOKRAT</title>
    </head>
    <body>
        <div class="rio">
	       <div class="header">Isi bagian Atas</div>
	       <div class="main">
		      <div class="left">
               </div>
		      <div class="middle">
                  <table>
<tr>
<?php
//memanggil koneksi database
include "koneksi.php";
$kueri = "SELECT title,picture,contain,date FROM tbl_food order by date DESC";
//mengambil data dari database
$tampil = mysql_query($kueri); 
while ($data = mysql_fetch_array($tampil))   
	{
	  $judul = $data[0];
	  $lokasi = $data[1];
      $isi = $data[2];
	  $tanggal = $data[3];
?>
<td><h1 align="left"><?=$judul?></h1></td> 
    <td align="right">
        <?=$tanggal?></td>
</tr>
<tr>
    <td colspan="2">
        <img src="<?=$lokasi?>" width="100%">
    </td>
</tr>
<tr>
    <td colspan="2">
        <br>
            <p style="text-align:justify">
                <?=$isi?>
            </p>
        <br>
    </td>
</tr>
<tr>
    <td colspan="2">
        <br>
        <hr>
        <br>
    </td>
</tr>
<?php
}
?>

</table>
                  
              </div>
		      <div class="right">
               <a href="login.php">Log-in</a>
	       </div>
	       <div class="footer">Isi bagian Bawah...</div>
        </div>

    </body>
</html>
