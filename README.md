# SQL PRACTICE TOOL WEB
Sebuah Tool SQL Practice yang berjalan di halaman antar muka website lokal / server lokal guna untuk membantu dalam pemahaman syntax - syntax SQL.

Database Connection yang dipakai pada tool aplikasi ini masih menggunakan mysqli.

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

## Fitur
1. Menulis Syntax SQL dan menjalankannya.
2. Terdapat panduan dalam menulis dan menggunakan syntax bahasa PHP untuk melakukan komunikasi dengan database.
3. Terdapat menu mereset database jika diperlukan.
4. Mendukung Library terkenal [FakerPHP](https://fakerphp.github.io/) untuk membuat data-data dummy (palsu).


## Daftar Tabel Database
1. Posts
2. Students
3. Persons

## Thanks to
1. [FakerPHP](https://fakerphp.github.io/)

