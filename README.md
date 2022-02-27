# SQL EXECUTE TOOL
Sebuah Tool SQL Execute yang berjalan di halaman antar muka website lokal / server lokal guna untuk menjalankan syntax atau query-query SQL.

## Konfigurasi
1. Lakukan konfigurasi database didalam file `core/Config/config.php`;
    ```php
    define('DB_HOST', 'localhost');
    define('DB_PORT', 3306);
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'sql_practice_tool');
    ```
2. Buat Database pada server kalian dengan nama `sql_practice_tool`.
    ```sql
    CREATE DATABASE `sql_practice_tool`;
    ```
3. Lakukan Import file `sql_practice_tool.sql` kedalam database kalian.
4. Jalankan server dan mulai berlatih.

## Update 27/02/2022
1. Dummy Database sudah dilakukan oleh class-class Factory.
2. Penyesuaian Execute untuk Perintah DDL (Data Definition Language).
3. Perbaikan BUG Error yang tidak muncul.
4. Penambahan Tabel-Tabel baru kedalam database.
5. Penyesuaian Isi Database untuk menjejalah lebih jauh menggunakan Perintah DML (Data Manipulation Language).

## Fitur
1. Menulis Syntax SQL dan menjalankannya.
2. Terdapat panduan dalam menulis dan menggunakan syntax bahasa PHP untuk melakukan komunikasi dengan database.
3. Terdapat menu mereset database jika diperlukan.
4. Mendukung Library terkenal [FakerPHP](https://fakerphp.github.io/) untuk membuat data-data dummy (palsu).


## Daftar Tabel Database
1. Companies
2. Persons
3. Posts
4. Students
4. Users

## Thanks to
1. [FakerPHP](https://fakerphp.github.io/)

