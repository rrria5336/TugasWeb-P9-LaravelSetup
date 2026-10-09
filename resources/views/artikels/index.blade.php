<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Artikels</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-8">
    <div class="container mx-auto max-w-4xl">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Daftar Artikel</h1>
        <div class="space-y-4">
            @forelse($artikels as $artikel)
                <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-xl font-semibold text-blue-600">{{ $artikel->judul }}</h2>
                    <p class="text-gray-600 mt-2">{{ $artikel->isi }}</p>
                </div>
            @empty
                <p class="text-gray-500">Belum ada artikel.</p>
            @endforelse
        </div>
        <a href="/" class="mt-6 inline-block text-blue-500 hover:underline">Kembali ke Home</a>
    </div>
</body>
</html>