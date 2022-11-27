# Tugas Akhir Prak 5 - Pharmanote

##Deskripsi Umum
Pharmanote merupakan sistem pencatatan untuk suatu apotek yang mencakup pencatatan obat, suplier serta transaksi yang dijalankan menggunakan laravel


## Alat dan Bahan
 1. Composer
 2. PHP 8+
 3. MySQL / XAMPP
 4. Text Editor
 5. Terminal / GitBash
 

## Cara menjalankan
Setelah menginstall composer dan laravel, serta membuat sebuah database baru pada PHPMyAdmin, bisa mengikuti langkah berikut ini:

1. ```composer update```
2. ```cp .env.example .env``` atau copy file .env.example dan rename menjadi .env
3. ```php artisan key:generate```
4. setting database pada .env
5. ```php artisan migrate```
6. ```php artisan db:seed```
4. ```jalankan XAMPP serta mengaktifkan apache dan mysql```
7. ```php artisan serve```
8. buka http://localhost:8000
9. buat akun baru
10. login menggunakan akun yang sudah dibuat
