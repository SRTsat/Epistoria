<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <title>Epistoria</title>
</head>
<body class="bg-gray-100">
    <!-- Navbar Full Width -->
    <div class="w-full bg-white border-b border-gray-200">
        <div class="flex justify-between items-center p-4 max-w-screen-xl mx-auto">
            <div class="text-2xl font-bold text-teal-700"><a href="">Epistoria</a></div>
            <div class="flex items-center bg-gray-100 rounded-full px-4 py-2 shadow-sm w-full max-w-md">
                <input type="text" placeholder="Search" class="border-none outline-none w-full text-base bg-transparent">
                <i class="fas fa-search text-gray-600 ml-2"></i>
            </div>
            <div class="flex gap-6 font-medium text-gray-700">
                <a href="login.blade.php" class="hover:text-teal-700 transition">Masuk</a>
                <a href="daftar.blade.php" class="hover:text-teal-700 transition">Daftar</a>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="flex justify-center items-center h-screen px-4">
        <div class="max-h-lg mr-12">
            <h1 class="text-4xl font-bold text-teal-700 mb-5">Hai, Selamat datang di Epistoria</h1>
            <p class="text-lg text-gray-700 mb-4 max-w-lg">Membaca adalah hal yang bisa membuatmu terkontaminasi virus bahagia.</p>
            <a href="daftar.blade.php"><button class="bg-teal-700 text-white px-5 py-2 rounded-lg hover:bg-teal-800 transition">Start Reading</button></a>
        </div>
        <div class="w-96 h-96">
            <img src="ldgpg.png" alt="Reading Image" class="w-full h-full object-cover rounded-lg">
        </div>
    </div>
    
</body>
</html>
