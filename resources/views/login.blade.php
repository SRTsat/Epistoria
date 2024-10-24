<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    <title>Masuk</title>
</head>

<body class="flex justify-center items-center h-screen bg-gray-100">
    <div class="bg-white p-10 rounded-xl shadow-md text-center max-w-md w-full">
        <h1 class="text-4xl font-bold text-teal-700 mb-5">Masuk</h1>
        <!-- Form starts here -->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" class="w-full p-4 mb-4 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-teal-500 text-gray-700" required>
            <input type="password" name="password" placeholder="Password" class="w-full p-4 mb-4 border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-teal-500 text-gray-700" required>
            <div class="mb-4 text-sm">
                Tidak punya Akun? <a href="{{ route('daftar') }}" class="text-teal-700 hover:underline">Daftar</a>
            </div>
            <button type="submit" class="w-full p-4 bg-teal-700 text-white rounded-full hover:bg-teal-800 transition">Masuk</button>
        </form>
        <!-- Form ends here -->
    </div>
</body>
</html>
