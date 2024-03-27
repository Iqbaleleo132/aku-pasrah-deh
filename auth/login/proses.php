<?php

require '../../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM user where username = '$username' AND password = '$password'");

$cekLog = mysqli_num_rows($query);

if($cekLog > 0){
    $data = mysqli_fetch_array($query);
    if($data['roles'] == "Admin"){
        session_start();
        $_SESSION["username"] = $data["username"];
        $_SESSION["nama_lengkap"] = $data["nama_lengkap"];
        $_SESSION["password"] = $data["password"];
        $_SESSION["roles"] = $data["roles"];

        echo "
        <script>
        alert('Anda Berhasil Login');
        window.location = '../../admin/index.php'
        
        </script>
        ";
        

    }else if($data['roles'] == "Maskapai"){
        session_start();
        $_SESSION["username"] = $data["username"];
        $_SESSION["nama_lengkap"] = $data["nama_lengkap"];
        $_SESSION["password"] = $data["password"];
        $_SESSION["roles"] = $data["roles"];


        echo "
        <script>
        alert('Anda Berhasil Login');
        window.location = '../../maskapai/index.php'
        
        </script>
        ";

    }else if($data['roles'] == "Penumpang"){
        session_start();
        $_SESSION["username"] = $data["username"];
        $_SESSION["nama_lengkap"] = $data["nama_lengkap"];
        $_SESSION["password"] = $data["password"];
        $_SESSION["roles"] = $data["roles"];

        echo "
        <script>
        alert('Anda Berhasil Login');
        window.location = '../../index.php'
        
        </script>
        ";


    }else{
        echo "
        <script>
        alert('anda gagal login');
        window.location = 'login.php'
        
        </script>
        ";
    }
}


?>