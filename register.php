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
	       <div class="header">Anda masuk sebagai <?=$_SESSION['username']?></div>
	       <div class="main">
		      <div class="left">
               </div>
		      <div class="middle">
                  <form method="post" action="registeraction.php">
					  <table border="0">
						<tr>
						  <td>Masukkan Username </td>
						  <td><input name="username" type="text"></td>
						</tr>
						<tr>
						  <td>Masukkan Password </td>
						  <td><input name="pass1" type="password"></td>
						</tr>
						<tr>
						  <td>Ulangi Password </td>
						  <td><input name="pass2" type="password"></td>
						</tr>
						<tr>
						  <td>&nbsp;</td>
						  <td><input type="submit" name="Submit" value="Submit"></td>
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
