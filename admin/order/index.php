<?php

$page = "Pemesanan Tiket";

require 'functions.php';
session_start();

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu, ya!');
        window.location = '/e-ticketing airplane/auth/login/login.php';
    </script>
    ";
}

$id_order = query("SELECT * FROM order_tiket")

?>

<?php require '../../layouts/sidebar_admin.php'; ?>


<div class="flex-auto overflow-x-hidden bg-blue-100">
    <div class="p-6 overflow-auto">
        <div>
            <h1 class="text-2xl font-semibold text-blue-950 mb-4">Halo, <?= $_SESSION["nama_lengkap"]; ?></h1>
        </div>
        <table class="min-w-full border-collapse bg-white border border-gray-300 rounded-lg mt-6">
            <thead>
                <tr>
                    <th class="border py-2 px-4 border-b">Nomor Order.</th>
                    <th class="border py-2 px-4 border-b">Struk</th>
                    <th class="border py-2 px-4 border-b">Status</th>
                    <th class="border py-2 px-4 border-b">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($id_order as $data) : ?>
                    <tr>
                        <td class="border py-2 px-4 border-b"><?= $data["id_order"]; ?></td>
                        <td class="border py-2 px-4 border-b"><?= $data["struk"]; ?></td>
                        <td class="border py-2 px-4 border-b">
                            <div class="flex justify-around">
                                <?php if($data["status"] == "Proses"): ?>
                                    <span class="text-gray-700 bg-gray-200 py-2 px-4 rounded-md">Proses</span>
                                <?php elseif($data["status"] == "Berhasil"): ?>
                                    <p class="text-green-700 bg-green-200 py-2 px-4 rounded-md">Berhasil</p>
                                <?php elseif($data["status"] == "Gagal"): ?>
                                    <span class="text-red-700 bg-red-200 py-2 px-6 rounded-md">Gagal</span>
                                <?php endif; ?>
                                <a href="detail.php?id=<?= $data["id_order"]; ?>" class="text-blue-700 bg-blue-200 py-2 px-4 rounded-md">Detail</a>
                            </div>
                        </td>
                        <td class="border py-2 px-4 border-b flex justify-center items-center">
                            <?php if ($data["status"] == "Proses"): ?>
                                <div class="">
                                    <button class="text-blue-700 bg-blue-200 py-2 px-4 rounded-md"><a href="verif.php?id=<?= $data["id_order"]; ?>">Verifikasi</a></button>
                                    <a href="reject.php?id=<?= $data["id_order"]; ?>" class="text-yellow-700 bg-yellow-200 py-2 px-4 rounded-md">Reject</a>
                                </div>
                            <?php elseif($data["status"] == "Berhasil" || $data["status"] == "Gagal"): ?>
                                <a href="hapus.php?id=<?= $data["id_order"]; ?>" class="text-red-700 bg-red-200 py-2 px-4 rounded-md">Hapus</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
