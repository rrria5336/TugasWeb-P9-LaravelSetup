# TugasWeb-P9-LaravelSetup

Tugas Pertemuan 9 - Setup Laravel

## Langkah Install

1. Pastikan Composer dan PHP sudah terinstall.
2. Clone repository ini:
   git clone https://github.com/username/TugasWeb-P9-LaravelSetup.git
3. Masuk ke folder project:
   cd TugasWeb-P9-LaravelSetup
4. Install dependencies:
   composer install
5. Copy file .env:
   cp .env.example .env
6. Generate key aplikasi:
   php artisan key:generate
7. Buat file database SQLite:
   touch database/database.sqlite
8. Jalankan migration:
   php artisan migrate
9. Jalankan server:
   php artisan serve
10. Buka http://127.0.0.1:8000 di browser.

## Penjelasan Struktur Folder

- app/          : Berisi kode utama aplikasi (Controllers, Models, dll)
- bootstrap/    : File bootstrap aplikasi
- config/       : Konfigurasi aplikasi
- database/     : Migration, seeder, dan file database.sqlite
- public/       : File publik (index.php, CSS, JS)
- resources/    : View (Blade), CSS, JS yang belum di-compile
- routes/       : Definisi route aplikasi
- storage/      : File log, cache, dan file yang di-generate
- tests/        : File testing
- vendor/       : Dependencies dari Composer
- .env          : Konfigurasi environment (database, app key, dll)
- composer.json : Daftar dependencies PHP

## Route yang Tersedia

- /             : Home (data dinamis dari array)
- /about        : Halaman About
- /contact      : Halaman Contact
- /hello/{nama} : Route parameter (bonus)
- /artikels     : Menggunakan ArtikelController

## Teknologi

- Laravel 10
- SQLite
- Tailwind CSS (via CDN)
- Blade Template Engine
