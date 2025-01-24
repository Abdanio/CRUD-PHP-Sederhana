<?php
// index.php serves as the entry point for the PHP CRUD application

// Include the database connection
require_once 'src/db/connection.php';

// Navigation links for CRUD operations
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD App</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Selamat Datang di Aplikasi PHP CRUD</h1>
    <nav>
        <ul>
            <li><a href="src/create.php">Buat Data</a></li>
            <li><a href="src/read.php">Lihat Data</a></li>
            <li><a href="src/update.php">Ubah Data</a></li>
            <li><a href="src/delete.php">Hapus Data</a></li>
        </ul>
    </nav>
    <div class="description">
        <h2>Tentang Aplikasi Ini</h2>
        <p>Aplikasi PHP CRUD ini memungkinkan Anda untuk membuat, membaca, mengubah, dan menghapus data pengguna dalam database MySQL. Aplikasi ini dirancang untuk membantu pemula memahami konsep dasar operasi CRUD dalam PHP.</p>
        <h2>Tutorial untuk Pemula</h2>
        <p>Ikuti langkah-langkah berikut untuk memahami cara kerja aplikasi ini:</p>
        <ol>
            <li><strong>Setup:</strong> Pastikan Anda memiliki lingkungan server lokal seperti XAMPP atau WAMP yang terinstal. Buat database MySQL bernama <code>crud_php</code> dan tabel bernama <code>users</code> dengan kolom <code>id</code>, <code>name</code>, dan <code>email</code>.</li>
            <li><strong>Koneksi Database:</strong> Koneksi database dibuat di file <code>src/db/connection.php</code>. Perbarui kredensial database sesuai dengan pengaturan Anda.</li>
            <li><strong>Buat Data:</strong> Navigasikan ke halaman <a href="src/create.php">Buat Data</a> untuk menambahkan pengguna baru. Isi formulir dan kirim untuk menambahkan data ke database.</li>
            <li><strong>Lihat Data:</strong> Navigasikan ke halaman <a href="src/read.php">Lihat Data</a> untuk melihat semua data pengguna. Halaman ini mengambil data dari database dan menampilkannya dalam tabel.</li>
            <li><strong>Ubah Data:</strong> Navigasikan ke halaman <a href="src/update.php">Ubah Data</a> untuk mengubah data pengguna yang ada. Pilih pengguna dari dropdown, ubah detailnya, dan kirim untuk memperbarui data.</li>
            <li><strong>Hapus Data:</strong> Navigasikan ke halaman <a href="src/delete.php">Hapus Data</a> untuk menghapus pengguna. Pilih pengguna dari dropdown dan kirim untuk menghapus data dari database.</li>
        </ol>
        <h2>Detail Variabel dan Fungsi</h2>
        <p>Berikut adalah penjelasan tentang variabel dan fungsi yang digunakan dalam aplikasi ini:</p>
        <ul>
            <li><code>$conn</code>: Variabel ini menyimpan koneksi ke database MySQL yang dibuat menggunakan objek <code>mysqli</code>.</li></ul>
            <li><code>$sql</code>: Variabel ini menyimpan pernyataan SQL yang akan dieksekusi untuk operasi CRUD.</li>
            <li><code>$stmt</code>: Variabel ini menyimpan objek pernyataan yang dipersiapkan (<code>mysqli_stmt</code>) yang digunakan untuk menjalankan pernyataan SQL dengan parameter yang diikat.</li>
            <li><code>$result</code>: Variabel ini menyimpan hasil dari eksekusi pernyataan SQL, biasanya berupa objek <code>mysqli_result</code>.</li>
            <li><code>$users</code>: Variabel ini menyimpan array dari semua pengguna yang diambil dari database.</li>
            <li><code>$user</code>: Variabel ini menyimpan data pengguna yang dipilih untuk diubah atau dihapus.</li>
        </ul>
    </div>
</body>
</html>