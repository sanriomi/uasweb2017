<?php
	//koneksi ke database
	$db_host = "localhost";
	$db_user = "root";
	$db_password = "";
    mysql_connect($db_host, $db_user, $db_password);
    
    //memilih database yang digunakan
	$db_name = "db_belajar1";
	mysql_select_db($db_name);
	
?>