<?php

session_start();

// menghapus session username
unset($_SESSION['username']);

echo "<h1>Anda sudah logout</h1>";
echo "<a href=index.php>Menu Utama</a>";
?>