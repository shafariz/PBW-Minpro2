# 📌 Mini Project 2 - Pemrograman Berbasis Web

Shafa Rizqi Nur Wahidah (2409116041)

## 📖 Deskripsi

Mini Project 2 ini merupakan pengembangan dari Mini Project 1, yaitu mengubah website portfolio yang sebelumnya bersifat statis (HTML) menjadi dinamis menggunakan PHP dan MySQL.

Data yang ditampilkan pada website tidak lagi ditulis langsung di dalam kode, tetapi diambil dari database sehingga dapat diubah tanpa mengedit file program.

---

## 🎯 Tujuan

* Mengimplementasikan database ke dalam website
* Mengubah file HTML menjadi PHP
* Menampilkan data secara dinamis dari database
* Memahami konsep koneksi database menggunakan PHP

---

## 🛠️ Teknologi yang Digunakan

* HTML
* CSS
* Bootstrap
* PHP (Native)
* MySQL
* Laragon (Local Server)
* phpMyAdmin

---

## 📂 Struktur Folder

```
minpro2_pbw/
│── index.php
│── koneksi.php
│── style.css
│── portofolio_db.sql
└── images/
    ├── profile.jpg
    ├── certificate1.jpg
    ├── certificate2.jpg
    └── certificate3.jpg
```

---

## 🗄️ Database

Nama database yang digunakan:

```
portofolio_db
```

Tabel yang dibuat:

* profile
* skills
* experiences
* certificates

---

## ⚙️ Cara Menjalankan Project

### 1. Jalankan Laragon

Klik:

```
Start All
```

---

### 2. Import Database

1. Buka:

```
http://localhost/phpmyadmin
```

2. Buat database:

```
portofolio_db
```

3. Import file:

```
portofolio_db.sql
```

---

### 3. Jalankan Website

Buka browser:

```
http://localhost/minpro2_pbw/
```

---

## 🔌 Koneksi Database

File `koneksi.php` digunakan untuk menghubungkan PHP dengan database MySQL menggunakan fungsi:

```
mysqli_connect()
```

---

## 🔄 Implementasi Dinamis

Data yang diambil dari database:

* Nama dan profil
* About Me
* Skills
* Experiences
* Certificates

Pengambilan data menggunakan:

* `mysqli_query()`
* `mysqli_fetch_assoc()`
* Perulangan `while`

---

## 🐞 Debugging

Selama pengembangan, digunakan:

```
error_reporting(E_ALL);
ini_set('display_errors', 1);
```

Tujuannya untuk menampilkan error agar memudahkan proses debugging.

---

## ✅ Hasil

Website berhasil diubah dari statis menjadi dinamis dengan:

* Tampilan tetap sama seperti Mini Project 1
* Data diambil dari database
* Perubahan data dapat dilakukan melalui phpMyAdmin

---

## 📌 Kesimpulan

Website yang sebelumnya statis kini telah menjadi dinamis menggunakan PHP dan MySQL. Hal ini memungkinkan data dapat dikelola dengan lebih fleksibel tanpa harus mengubah kode secara langsung.

---
