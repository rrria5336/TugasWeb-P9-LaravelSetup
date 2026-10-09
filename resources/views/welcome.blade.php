<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-white shadow p-4">
        <div class="container mx-auto flex gap-6">
            <a href="/" class="text-blue-600 font-bold">Home</a>
            <a href="/about" class="text-gray-600 hover:text-blue-600">About</a>
            <a href="/contact" class="text-gray-600 hover:text-blue-600">Contact</a>
            <a href="/artikels" class="text-gray-600 hover:text-blue-600">Artikels</a>
        </div>
    </nav>

    <div class="container mx-auto p-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">{{ $data['judul'] }}</h1>
        <p class="text-gray-600 mb-6">{{ $data['deskripsi'] }}</p>

        <h2 class="text-2xl font-semibold text-gray-700 mb-3">Fitur:</h2>
        <ul class="list-disc list-inside text-gray-600 space-y-1">
            @foreach($data['fitur'] as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>

        <div class="mt-8">
            <a href="/hello/Budi" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Coba Route Parameter
            </a>
        </div>
    </div>
</body>
</html>