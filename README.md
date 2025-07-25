# sistem-manajemen-laundry-php
Aplikasi web manajemen laundry untuk mengelola data transaksi, pelanggan, dan paket layanan. Proyek ini dibangun menggunakan PHP, MySQL, dan antarmuka Bootstrap untuk kemudahan penggunaan.

## ✨ Fitur Utama
-   **Autentikasi Pengguna**: Sistem dilengkapi halaman login untuk membatasi akses.
-   **Manajemen Pelanggan**: CRUD (*Create, Read, Update, Delete*) untuk data pelanggan laundry.
-   **Manajemen Paket**: CRUD untuk jenis-jenis paket layanan yang ditawarkan (misalnya cuci kering, cuci setrika).
-   **Manajemen Transaksi**: Mencatat transaksi baru, mengubah status laundry, dan melihat riwayat transaksi.
-   **Dasbor Informatif**: Halaman utama menampilkan ringkasan data penting seperti jumlah pelanggan dan total transaksi.

## 🚀 Teknologi yang Digunakan
-   **Backend**: PHP
-   **Database**: MySQL / MariaDB
-   **Frontend**: HTML, CSS, Bootstrap

## 🗄️ Struktur Database
Aplikasi ini menggunakan database `app_laundry` dengan 4 tabel utama.

| Tabel         | Fungsi Utama                                  |
| ------------- | --------------------------------------------- |
| `users`       | Menyimpan data login pengguna (admin).        |
| `konsumen`    | Menyimpan data pelanggan.                     |
| `paket`       | Menyimpan daftar paket layanan dan harganya.  |
| `transaksi`   | Mencatat semua transaksi yang terjadi.        |

---

**luqmanaru**
