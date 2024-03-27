<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Tambahan CSS */
        body, html {
            height: 100%;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f3f4f6; /* Mengganti warna background */
        }
    </style>
</head>
<body>

<div class="flex justify-items-center place-items-center flex-col px-6 py-10 bg-gray-100">
    <div class="bg-white rounded px-20 py-20">    
        <div class="">
            <h1 class="text-4xl font-bold text-center mb-2">Login</h1>
        </div>

        <hr>

        <form action="proses.php" method="POST">
            <div class="mt-4">
                <label for="username" class="block mt-4 mb-2 text-normal text-gray-500 font-normal">Username</label>
                <div class="mt-2">
                    <input type="text" name="username" required class="bg-grey-200 py-2 w-full border shadow-sm border-solid-gray-500 rounded px-2 width-full ">
                </div>
            </div>
            <div class="mt-4">
                <label for="username" class="block mt-4 mb-2 text-normal text-gray-500 font-normal">Password</label>
                <div class="mt-2">
                    <input type="password" name="password" required class="bg-grey-200 py-2 w-full border shadow-sm border-solid-gray-500 rounded px-2 width-full ">
                </div>
            </div>

            <div>
                <button class="bg-green-400 py-2 px-20 rounded mt-3 text-white text-xl hover:bg-green-600">Login</button>
            </div>
        </form>
    </div>
</div>
    
</body>
</html>
