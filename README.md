<p align="center"><img src="https://laravel.com/img/logotype.min.svg" width="400"></p>

# Aplikasi Laundry

## Install

1. Copy dan rename .env.example menjadi .env
2. Konfigurasi .env sesuai kebutuhan
3. Buat app key:

```
php artisan key:generate
```

4. Jalankan migrasi dan seed:

```
php artisan migrate:fresh --seed
```

## Informasi ++

Aplikasi ini juga menerapkan queue database untuk menghapus foto profil ketika diganti, kalian bisa mengganti environment variable `QUEUE_CONNECTION` menjadi database.
