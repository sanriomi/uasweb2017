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
	       <div class="header">Hi <?=$_SESSION['username']?>, Silakan masukkan data baru.</div>
	           <div class="main">
		        <div class="left">
                    
                </div>
		      <div class="middle">
                  <form method="post" action="simpan.php">
    <input type="text" name="judul" placeholder="Title..." size="30" maxlength="30">
    <br>    
    <textarea name="isi" placeholder="Contain.." rows="4" cols="50"></textarea>
    <br>
    <input type="text" name="lokasi" placeholder="Image Location.."><br>
<input type="submit" value="simpan">
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
