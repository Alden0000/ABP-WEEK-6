# Laporan Praktikum 6 - Implementasi AJAX pada Laravel 12

**Nama:** Alden Audy Akbar  
**NIM:** 2311102309  
**Kelas:** IF-11-07  

---

## 1. Deskripsi Tugas
Praktikum ini bertujuan untuk mengimplementasikan teknik **AJAX (Asynchronous JavaScript and XML)** untuk mengambil data dari server secara *asynchronous*. Dengan metode ini, data mahasiswa dapat ditampilkan ke halaman web tanpa perlu melakukan *refresh* halaman.

## 2. Dokumentasi Tampilan
Berikut adalah tampilan hasil implementasi fitur AJAX dalam project ini:

### Tampilan Halaman Web
![Daftar Mahasiswa](Screenshot%20Daftar%20Mahasiswa.png)

*Keterangan: Gambar di atas menunjukkan data mahasiswa yang ditarik dari Controller menggunakan AJAX dan ditampilkan dalam bentuk Bootstrap Cards.*

---

## 3. Penjelasan Kodingan

### A. Route (`routes/web.php`)
Mendefinisikan rute utama `/` untuk tampilan dan `/get-mahasiswa` sebagai endpoint data JSON yang akan dipanggil oleh fungsi AJAX.

### B. Controller (`app/Http/Controllers/MahasiswaController.php`)
Menggunakan fungsi `getData()` yang mengembalikan data mahasiswa dalam format JSON. Data didefinisikan langsung (hardcoded) di Controller untuk memastikan stabilitas respon.

### C. Frontend & AJAX (`resources/views/welcome.blade.php`)
Menggunakan library **jQuery** untuk melakukan `GET` request. Setelah data diterima, JavaScript melakukan manipulasi DOM untuk memasukkan data ke dalam elemen HTML secara dinamis menggunakan *template literals* (backtick).

---

## 4. Cara Menggunakan
1. Pastikan server lokal (seperti Laragon atau XAMPP) aktif.
2. Clone repository ini ke direktori kerja Anda.
3. Jalankan perintah berikut di terminal:
   ```bash
   php artisan serve