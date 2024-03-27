<?php
$page = "Maskapai";

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

$maskapai = query("SELECT * FROM maskapai");

?>

<?php require '../../layouts/sidebar_admin.php'; ?>

<div class="p-6">
    <h1 class="text-2xl font-semibold text-blue-950 mb-4">Halo, <?= $_SESSION["nama_lengkap"]; ?></h1>
    <div>
        <a href="tambah.php" class="bg-indigo-500 px-4 py-2 rounded-lg text-white">Tambah Maskapai</a>
    </div>

    <table class="min-w-full border-collapse bg-white border border-gray-300 rounded-lg mt-6">
        <thead>
            <tr>
                <th class="border py-2 px-4 border-b">NO.</th>
                <th class="border py-2 px-4 border-b">Logo</th>
                <th class="border py-2 px-4 border-b">Nama Maskapai</th>
                <th class="border py-2 px-4 border-b">Kapasitas</th> 
                <th class="border py-2 px-4 border-b">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?> 
            <?php foreach($maskapai as $data) : ?>
                <tr>
                    <td class="border py-2 px-4 border-b"><?= $no; ?></td>
                    <td class="border py-2 px-4 border-b flex items-center justify-center"><img src="../../assets/images/<?= $data["logo_maskapai"]; ?>" class="w-20" alt=""></td>
                    <td class="border py-2 px-4 border-b"><?= $data["nama_maskapai"]; ?></td>
                    <td class="border py-2 px-4 border-b"><?= $data["kapasitas"]; ?></td> 
                    <td class="flex py-2 px-2 border-b items-center">
                        <a href="edit.php?id=<?= $data["id_maskapai"]; ?>" class="bg-indigo-500 text-white px-4 py-2 rounded-md mr-2 hover:bg-indigo-600">Edit</a>
                        <form action="hapus.php?id=<?= $data["id_maskapai"]; ?>" class="inline-block" method="post">
                            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php $no++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
