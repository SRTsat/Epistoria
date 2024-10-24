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
    <title>Daftar</title>
</head>

<body class="flex justify-center items-center h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md text-center">
        <h2 class="text-3xl font-bold text-teal-700 mb-5">Daftar</h2>
        <!-- Form starts here -->
        <form method="POST" action="{{ route('daftar.submit') }}">
            @csrf
            <input type="text" name="name" placeholder="Username" class="w-full p-4 mb-4 border border-gray-300 rounded-full" required>
            <input type="email" name="email" placeholder="Email" class="w-full p-4 mb-4 border border-gray-300 rounded-full" required>
            <input type="password" name="password" placeholder="Password" class="w-full p-4 mb-4 border border-gray-300 rounded-full" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" class="w-full p-4 mb-4 border border-gray-300 rounded-full" required>
            <button type="submit" class="w-full p-4 bg-teal-700 text-white rounded-full">Daftar</button>
        </form>

        <!-- Form ends here -->
    </div>
</body>

</html>