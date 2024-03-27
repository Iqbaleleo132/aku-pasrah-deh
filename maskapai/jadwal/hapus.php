<?php

session_start();
require 'functions.php';

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu, ya!');
        window.location = '/e-ticketing airplane/auth/login/login.php';
    </script>
    ";
}

$id = $_GET["id"];

if(hapus($id) > 0){
    echo "
    <script type='text/javascript'>
        alert('Yay! data jadwal penerbangan berhasil dihapus');
        window.location = 'index.php';
    </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('Yhaa .. data jadwal penerbangan gagal ditambahkan :(')
        window.location = 'index.php';
    </script>
    ";
}

?>