# CRUD Data Game (PHP Procedural + MySQL)

Aplikasi CRUD sederhana untuk data game. Semua data diinput lewat form (tidak hardcode).

## Struktur File
- koneksi.php -> koneksi ke database
- index.php   -> tampil data (Read)
- tambah.php  -> tambah data (Create)
- edit.php    -> edit data (Update)
- hapus.php   -> hapus data (Delete)
- database.sql -> script buat database & tabel

## Cara Menjalankan
1. Copy folder ini ke htdocs (XAMPP) / www (Laragon)
2. Aktifkan Apache & MySQL
3. Buka phpMyAdmin, tab Import, pilih database.sql, klik Go
4. Buka http://localhost/crud-game-simple/index.php
5. Klik "Tambah Data" untuk mulai input data lewat form

## Upload ke GitHub
```
git init
git add .
git commit -m "CRUD Data Game"
git branch -M main
git remote add origin https://github.com/USERNAME/REPO.git
git push -u origin main
```
