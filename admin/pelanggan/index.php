<?php 
require '../../koneksi.php'; 

session_start();

require 'functions.php';

if(!isset($_SESSION["username"])){
    echo "
        <script>
        alert('login dulu yaa');
        window.location = '/e-ticketing airplane/auth/login/login.php'
        
        </script>
        ";
}


$pengguna = query("SELECT * FROM user WHERE roles = 'Maskapai' || roles = 'Penumpang' ");


?>



<?php require '../../layouts/sidebar_admin.php'?>

<div class="p-6">
    <h1 class="text-2xl font-semibold text-blue-950 mb-4">Halo, <?= $_SESSION["nama_lengkap"]; ?></h1>
    <div>
        <a href="tambah.php" class="bg-indigo-500 px-4 py-2 rounded-lg text-white">Tambah User</a>
    </div>

    <table class="min-w-full border-collapse bg-white border border-gray-300 rounded-lg mt-6">
        <thead>
            <tr>
                <th class="border py-2 px-4 border-b">NO.</th>
                <th class="border py-2 px-4 border-b">Username</th>
                <th class="border py-2 px-4 border-b">Nama Lengkap</th>
                <th class="border py-2 px-4 border-b">Password</th> 
                <th class="border py-2 px-4 border-b">Role</th>
                <th class="border py-2 px-4 border-b">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?> 
            <?php foreach($pengguna as $data) : ?>
                <tr>
                    <td class="border py-2 px-4 border-b"><?= $no; ?></td>
                    <td class="border py-2 px-4 border-b"><?= $data["username"]; ?></td>
                    <td class="border py-2 px-4 border-b"><?= $data["nama_lengkap"]; ?></td>
                    <td class="border py-2 px-4 border-b"><?= $data["password"]; ?></td> 
                    <td class="border py-2 px-4 border-b"><?= $data["roles"]; ?></td>
                    <td class="flex py-2 px-2 border-b items-center">
                        <a href="edit.php?id=<?= $data["id_user"]; ?>" class="bg-indigo-600 text-white px-4 py-2 rounded-md mr-2 hover:bg-indigo-600">Edit</a>
                        <form action="hapus.php?id=<?= $data["id_user"]; ?>" class=" inline-block" method="post">
                            <button type="submit" onclick="confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php $no++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
