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
                  <?php
					// menjalankan session
					session_start();

					$username = $_POST['username'];
					$password = $_POST['pass'];

					include "koneksi.php";

					// mencari password terenkripsi berdasarkan username
					$query = "SELECT * FROM tbl_user WHERE username = '$username'";
					$hasil = mysql_query($query) or die("Error");
					$data  = mysql_fetch_array($hasil);

					$pengacak  = "test";

					// cek kesesuaian password terenkripsi dari form login
					// dengan password terenkripsi dari database
					if ((md5($pengacak . md5($password) . $pengacak)) == $data['password'])
					{
						// jika sesuai, maka buat session untuk username
						$_SESSION['username'] = $username;

						// menampilkan menu ke halaman akses
						echo "<h2>Login sukses</h2>";
						echo "<p><a href=\"indexadmin.php\">Halaman Muka Admin</a> <br> <a href=\"input.php\">Input Data Baru</a></p>";
					}
					else {echo "<h2>Login Gagal</h2>";
					exit;}
					?>
               </div>
		      <div class="middle">
                  Selamat Datang <?=$_SESSION['username']?>.       
              </div>
		      <div class="right">
               </div>
	       </div>
	       <div class="footer">Isi bagian Bawah...</div>
        </div>

    </body>
</html>
