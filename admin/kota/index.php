<?php
$page = "Kota";

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

$kota = query("SELECT * FROM kota");


?>

<?php require '../../layouts/sidebar_admin.php'; ?>

<div class="p-6 overflow-auto w-full">
    <h1 class="text-2xl font-semibold text-blue-950 mb-4">Halo, <?= $_SESSION["nama_lengkap"]; ?></h1>
    <div>
        <a href="tambah.php" class="bg-indigo-500 px-4 py-2 rounded-lg text-white">Tambah Kota</a>
    </div>

    <table class="min-w-full border-collapse bg-white border border-gray-300 rounded-lg mt-6">
        <thead>
            <tr>
                <th class="border py-2 px-4 border-b">NO.</th>
                <th class="border py-2 px-4 border-b">Nama Kota</th>
                <th class="border py-2 px-4 border-b">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?> 
            <?php foreach($kota as $data) : ?>
                <tr class="text-center">
                    <td class="border py-2 px-4 border-b"><?= $no; ?></td>
                    <td class="border py-2 px-4 border-b"><?= $data["nama_kota"]; ?></td>
                    <td class="flex py-2 px-2 border-b items-center text-center items-center justify-center">
                        <a href="edit.php?id=<?= $data["id_kota"]; ?>" class="bg-indigo-500 text-white px-4 py-2 rounded-md mr-2 hover:bg-indigo-600">Edit</a>
                        <form action="hapus.php?id=<?= $data["id_kota"]; ?>" class="inline-block" method="post">
                            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php $no++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
