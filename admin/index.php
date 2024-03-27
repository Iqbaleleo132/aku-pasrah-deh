<?php 
require '../koneksi.php'; 

session_start();



?>


<?php require '../layouts/sidebar_admin.php'?>

<p>Selamat Datang Kembali <?= $_SESSION['nama_lengkap']?></p>