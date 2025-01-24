# Aplikasi PHP CRUD

Ini adalah aplikasi PHP CRUD (Create, Read, Update, Delete) sederhana yang menunjukkan operasi dasar database menggunakan PHP dan MySQL.

## Struktur Proyek

```
php-crud-app
├── src
│   ├── create.php       # Menangani pembuatan data baru
│   ├── read.php         # Mengambil dan menampilkan data
│   ├── update.php       # Memungkinkan pembaruan data yang ada
│   ├── delete.php       # Menangani penghapusan data
│   └── db
│       └── connection.php # Membuat koneksi database
├── index.php            # Titik masuk untuk aplikasi
├── styles.css           # File CSS untuk styling aplikasi
├── composer.json        # File konfigurasi Composer
└── README.md            # Dokumentasi proyek
```

## Persyaratan

- PHP 7.0 atau lebih tinggi
- Database MySQL
- Composer untuk manajemen dependensi

## Petunjuk Setup

1. Clone repository:
   ```
   git clone https://github.com/microsoft/vscode-remote-try-php.git
   ```

2. Masuk ke direktori proyek:
   ```
   cd php-crud-app
   ```

3. Instal dependensi menggunakan Composer:
   ```
   composer install
   ```

4. Konfigurasi koneksi database:
   - Buka `src/db/connection.php` dan perbarui kredensial database.

5. Buat database dan tabel yang diperlukan:
   - Gunakan skrip SQL yang disediakan (jika ada) atau buat tabel secara manual berdasarkan kebutuhan aplikasi.

6. Jalankan aplikasi:
   - Mulai server lokal dan navigasikan ke `index.php` untuk mengakses operasi CRUD.

## Penggunaan

- Gunakan tautan navigasi di `index.php` untuk membuat, membaca, memperbarui, atau menghapus data.
- Ikuti petunjuk di setiap halaman untuk melakukan operasi yang diinginkan.

## Pembaruan

### Versi Awal
- Implementasi operasi CRUD dasar (Create, Read, Update, Delete) menggunakan PHP dan MySQL.
- Formulir HTML sederhana untuk input pengguna.
- Styling dasar menggunakan CSS inline.

### Pembaruan 1
- Memindahkan CSS ke file eksternal `styles.css` untuk pemeliharaan yang lebih baik.
- Meningkatkan styling dan tata letak formulir.

### Pembaruan 2
- Menambahkan alert JavaScript untuk operasi create, update, dan delete.
- Menggunakan pustaka SweetAlert untuk pesan alert yang lebih menarik.
  - Sumber: [SweetAlert2](https://sweetalert2.github.io/)

### Pembaruan 3
- Menerjemahkan aplikasi ke dalam bahasa Indonesia.
- Menambahkan deskripsi dan tutorial yang detail untuk pemula di `index.php`.
- Menyelaraskan menu navigasi dan elemen lainnya untuk UI yang lebih baik.

### Pembaruan 4
- Menambahkan komentar dan penjelasan yang detail untuk variabel dan fungsi yang digunakan dalam aplikasi.
- Meningkatkan penanganan kesalahan dan umpan balik pengguna.

## Sumber

- [SweetAlert2](https://sweetalert2.github.io/)
- [Dokumentasi PHP](https://www.php.net/docs.php)
- [Dokumentasi MySQL](https://dev.mysql.com/doc/)
- [Tutorial PHP W3Schools](https://www.w3schools.com/php/)
- [MDN Web Docs](https://developer.mozilla.org/)

## Lisensi

Proyek ini bersifat open-source dan tersedia di bawah Lisensi MIT. Anda bebas untuk menggunakan, memodifikasi, dan mendistribusikan proyek ini. Proyek ini juga dapat digunakan sebagai bahan penelitian oleh mahasiswa atau siapa saja yang ingin mempelajari lebih lanjut tentang operasi CRUD menggunakan PHP dan MySQL.