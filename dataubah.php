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
		      <div class="middlewithoutright">
                 <table border="1">
					<tr bgcolor="brown">
						<th>Nomor</th>
						<th>Judul</th>
						<th>Tanggal</th>
						<th>Gambar</th>
						<th>Aksi</th>
					</tr>
					<tr>
						<?php
						//memanggil koneksi database
						include "koneksi.php";
						$kueri = "SELECT id,title,date,picture,contain FROM tbl_food order by date DESC";
						//mengambil data dari database
						$tampil = mysql_query($kueri); 
						//memberi nomor
						$nomor = 0;
						while ($data = mysql_fetch_array($tampil))   
							{
                              $id = $data[0];
                              $judul = $data[1];
							  $tanggal = $data[2];
							  $lokasi = $data[3];
							  $isi = $data[4];
							  
							  $nomor = $nomor+1;
						?>
						<td align="center"><?=$nomor?></td>
						<td align="center"><?=$judul?></td>
						<td align="center"><?=$tanggal?></td>
						<td align="center">
							<img src="<?=$lokasi?>" width="50%">
						</td>
						<td>
							<div align="center">
							<a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a> | 
							<a href="ubah.php?id=<?php echo $data['id']; ?>">Ubah</a>
							</div>
						</td>  
					</tr>
					<?php
					}
					?>
				</table>                  
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
