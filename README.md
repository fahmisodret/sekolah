# Ellen May
Ellen May Institute
=======

## Tentang Ellen May

Aplikasi sederhana untuk upload produk dan jual produk.

## Resourche
- Framework : Laravel
- Database : MySQL
- CSS = bootstrap 4.4.1 (include datatables)
- Jquery = bootstrap 3.4.1 (include datatables)

## Konsep
- DRY
- SOLID design principle
- OOP
- Service Pattern

## Note
- sesuai dengan permintaan
- Gunakan Migration untuk membuat struktur database
- Gunakan Eloquent untuk mengakses database
- Gunakan Soft Delete
- Gunakan database Transaction untuk menjaga entitas data ketika ada kesalahan
- Routing: gunakan nama route
- Gunakan Laravel Authentication using Middleware
- Validation: Untuk validasi, dibuat terpisah di folder Requests
- Gunakan Yajra Datatable untuk list produk dan penjualan

## Instalation

- Silahkan clone dari link diatas
- install pakkagenya dahulu "composer install"
- Setup database(env)
- migrate database dan jangan lupa untuk seeding data "php artisan migrate and db:seed"
- dan anda bisa menjalankan project nya seperti biasa "php artisan serve"
