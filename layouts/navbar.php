<?php

    require 'functions.php'

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<nav class="nav">
    
<div class="container-fluid mx-auto flex justify-between items-center bg-green-700 py-3 px-3 ">
    <div>
    <h1 class="text-2xl text-green-200 font-semibold">E-Ticketing</h1>
    </div>
    <div>
        <ul class="flex text-decoration-none">
            <a href="index.php" class="text-white hover:text-grey-200 px-3 py-2">Beranda</a>
            <a href="cart.php" class="text-white hover:text-grey-200 px-3 py-2">Pemesanan Tiket</a>
            <a href="histori.php" class="text-white hover:text-grey-200 px-3 py-2">Riwayat Transaksi</a>
        </ul>
    </div>
    <div>
    <div class="auth">
    <?php if(isset($_SESSION["username"])) { ?>
     
        <span class="text-white mr-2"><?= $_SESSION["nama_lengkap"]; ?></span>
                <a href="logout.php" class="text-white hover:text-gray-200 bg-red-600 py-2 px-4 rounded-md">Logout</a>
     
        <?php } else { ?>
            
            <button><a href="./auth/login/login.php" class="bg-green-400 hover:bg-green-500 py-3 px-5 rounded text-lg text-grey-400 font-medium ">Login</a></button>
            <button><a href="./auth/login/login.php" class="bg-green-400 hover:bg-green-500 py-3 px-5 rounded text-lg text-grey-400 font-medium ">Register</a></button>

        <?php } ?>
    </div>
    </div>
</div>


</nav>
    


</body>
</html>