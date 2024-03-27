<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="">
    <div class="h-screen flex overflow-hidden bg-gray-100">
        <div class="flex flex-col w-64">
            <div class="flex flex-col h-0 flex-1 bg-green-900">
                <div><span class="group flex items-center px-2 py-2 text-3xl font-medium text-green-400 rounded-md my-2 mx-1">E-TICKETING</span></div>
                <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                    <nav class="mt-5 flex-1 px-2 bg-green-900 space-y-1">
                        <a href="/e-ticketing airplane/admin/index.php" class="group flex items-center px-2 py-2 text-xl font-medium text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700 transition duration-150 ease-in-out">
                            Dashboard
                        </a>
                        <a href="/e-ticketing airplane/admin/pelanggan/index.php" class="group flex items-center px-2 py-2 text-xl font-medium text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700 transition duration-150 ease-in-out">
                         User
                        </a>
                        <a href="/e-ticketing airplane/admin/maskapai/index.php" class="group flex items-center px-2 py-2 text-xl font-medium text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700 transition duration-150 ease-in-out">
                         Maskapai
                        </a>
                        <a href="/e-ticketing airplane/admin/kota/index.php" class="group flex items-center px-2 py-2 text-xl font-medium text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700 transition duration-150 ease-in-out">
                         Kota
                        </a>
                        <a href="/e-ticketing airplane/admin/rute/index.php" class="group flex items-center px-2 py-2 text-xl font-medium text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700 transition duration-150 ease-in-out">
                         Rute
                        </a>
                        <a href="/e-ticketing airplane/admin/jadwal/index.php" class="group flex items-center px-2 py-2 text-xl font-medium text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700 transition duration-150 ease-in-out">
                         Jadwal Penerbangan
                        </a>
                        <a href="/e-ticketing airplane/admin/order/index.php" class="group flex items-center px-2 py-2 text-xl font-medium text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700 transition duration-150 ease-in-out">
                            Pemesanan Tiket
                        </a>
                    </nav>
                </div>
                <div class="flex-shrink-0 flex bg-green-700 p-4">
                    <a href="/e-ticketing airplane/logout.php" onclick="return confirm('Apakah anda yakin ingin logout?')" class="flex-shrink-0 w-full group block">
                        <div class="flex items-center">
                            <svg class="h-6 w-6 text-green-400 group-hover:text-green-300 transition ease-in-out duration-150" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                           
                            <span class="ml-3 text-xl font-medium text-white">Logout</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>