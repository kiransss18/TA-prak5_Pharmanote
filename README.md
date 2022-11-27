# Tugas Akhir Prak 5 - Pharmanote

## Deskripsi Umum
Pharmanote merupakan sistem pencatatan untuk suatu apotek yang mencakup pencatatan obat, suplier serta transaksi yang dijalankan menggunakan laravel


## Alat dan Bahan
 1. Composer
 2. PHP 8+
 3. MySQL / XAMPP
 4. Text Editor
 5. Terminal / GitBash
 

## Cara menjalankan
Setelah menginstall composer dan laravel, serta membuat sebuah database baru pada PHPMyAdmin, bisa mengikuti langkah berikut ini:

1. taruh file pada directory htdocs
2. buka cmd dan pindah ke directory file
3. ```composer update```
4. ```cp .env.example .env``` atau copy file .env.example dan rename menjadi .env
5. ```php artisan key:generate```
6. setting database pada .env
7. ```php artisan migrate```
8. ```php artisan db:seed```
9. jalankan XAMPP serta mengaktifkan apache dan mysql
10. ```php artisan serve```
11. buka http://localhost:8000
12. buat akun baru
13. login menggunakan akun yang sudah dibuat
