<p align="center"><img src="https://laravel.com/img/logotype.min.svg" width="400"></p>

<<<<<<< HEAD
# Aplikasi Laundry 
=======
# Aplikasi Laundry
>>>>>>> 7c990a004f3172eb0c76b604a68e9d88826d6c54

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

<<<<<<< HEAD
## Informasi ++

Aplikasi ini juga menerapkan queue database untuk menghapus foto profil ketika diganti, kalian bisa mengganti environment variable `QUEUE_CONNECTION` menjadi database.

=======
## Informasi++

Aplikasi ini juga menerapkan queue database untuk menghapus foto profil ketika diganti, kalian bisa mengganti environment variable `QUEUE_CONNECTION` menjadi database.

Daftar/Register admin dengan url `/register-admin`. Secret key dapat diubah di env atau default "Secret123".
>>>>>>> 7c990a004f3172eb0c76b604a68e9d88826d6c54
