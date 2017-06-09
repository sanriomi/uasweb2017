<?php
$username  = $_POST['username'];
$password1 = $_POST['pass1'];
$password2 = $_POST['pass2'];

// cek kesamaan password
if ($password1 == $password2)
{
	mysql_connect("localhost", "root", "");
	mysql_select_db("db_belajar1");

	// perlu dibuat sebarang pengacak
	$pengacak  = "test";

	// mengenkripsi password dengan md5() dan pengacak
	$password1 = md5($pengacak . md5($password1) . $pengacak);

	// menyimpan username dan password terenkripsi ke database
	$query = "INSERT INTO tbl_user VALUES('$username', '$password1')";
	$hasil = mysql_query($query);

	// menampilkan status pendaftaran
	if ($hasil){ echo "User sudah berhasil terdaftar";
    echo "<a href=indexadmin.php>Menu Utama</a>";
}
	else {
        echo "Username sudah ada yang memiliki";
         }

}
else echo "Password yang dimasukkan tidak sama";

?>