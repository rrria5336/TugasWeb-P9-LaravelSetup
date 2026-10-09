<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md text-center max-w-md">
        <h1 class="text-3xl font-bold text-purple-600 mb-4">Halo, {{ $nama }}!</h1>
        <p class="text-gray-700 mb-4">Selamat datang di website Laravel saya.</p>
        <a href="/" class="mt-4 inline-block text-purple-500 hover:underline">Kembali ke Home</a>
    </div>
</body>
</html>