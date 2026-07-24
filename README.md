# Tukang Print Dadakan

Sistem Pemesanan dan Pengelolaan Layanan Cetak Mahasiswa Berbasis Web.

## Tentang Project
Tukang Print Dadakan adalah sistem pemesanan dan pengelolaan layanan cetak mahasiswa berbasis web. Sistem ini dikembangkan untuk membantu pelanggan melakukan pemesanan layanan cetak secara lebih terstruktur serta membantu pemilik usaha mengelola pesanan, file, pembayaran, antrean pengerjaan, dan laporan operasional dalam satu aplikasi.

Project ini dikembangkan sebagai tugas akhir mata kuliah Pemrograman Web pada Program Studi Teknik Informatika, Fakultas Ilmu Komputer, Universitas Esa Unggul.

## Informasi Project
- Nama project: Tukang Print Dadakan
- Jenis project: Capstone Project Pemrograman Web
- Pengembang: Ilham Firmansyah
- NIM: 20240801102
- Program Studi: Teknik Informatika
- Fakultas: Fakultas Ilmu Komputer
- Universitas: Universitas Esa Unggul
- Semester: Genap 2025–2026
- Dosen Pembimbing: Jefry Sunupurwa Asri, S.Kom., M.Kom.
- Jalur Capstone: Web
- Repository: https://github.com/ilhammf/tukangprintdadakan-2026
- Website: https://print.ilhamfirmansyah.store

## Latar Belakang
Tukang Print Dadakan merupakan usaha jasa cetak yang melayani kebutuhan mahasiswa, seperti pencetakan tugas, laporan, proposal, makalah, skripsi, dan dokumen akademik lainnya.

Sebelum sistem dikembangkan, proses pemesanan dilakukan melalui WhatsApp. Pelanggan mengirimkan file, menjelaskan spesifikasi cetak, menanyakan harga, melakukan pembayaran, dan menanyakan perkembangan pesanan melalui percakapan langsung dengan admin.

Proses tersebut menjadi kurang efektif ketika jumlah pesanan meningkat karena data pelanggan, file, detail pesanan, pembayaran, dan status pengerjaan tersebar dalam banyak percakapan. Admin juga mengalami kesulitan dalam mencari file lama, mengelola antrean, menghitung biaya, dan memberikan informasi status kepada pelanggan.

## Permasalahan yang Diselesaikan
- Data pesanan dan file pelanggan tersebar dalam percakapan WhatsApp.
- Admin kesulitan mencari kembali data dan file pesanan lama.
- Pelanggan harus menghubungi admin untuk mengetahui harga dan status pesanan.
- Perhitungan biaya berisiko mengalami kesalahan pencatatan.
- Konfirmasi pembayaran dilakukan secara manual.
- Status pembayaran dan pengerjaan belum tercatat secara terpusat.
- Pengelolaan antrean kurang efektif ketika jumlah pesanan meningkat.
- Pemilik usaha kesulitan memantau transaksi dan pendapatan.
- Informasi layanan dan harga belum tersedia dalam satu media terpusat.

## Tujuan Pengembangan
- Menyediakan sistem pemesanan layanan cetak yang dapat diakses secara online.
- Memusatkan data pelanggan, layanan, pesanan, file, pembayaran, dan riwayat status.
- Mempermudah pelanggan dalam membuat dan memantau pesanan.
- Menyediakan perhitungan estimasi biaya secara otomatis.
- Mendukung pembayaran online melalui Midtrans.
- Membantu admin mengelola pesanan dan antrean pengerjaan.
- Membantu pemilik usaha memantau transaksi dan pendapatan.
- Mengurangi ketergantungan pada proses pemesanan melalui WhatsApp.
- Meningkatkan ketertiban, efisiensi, dan kualitas pelayanan usaha.

## Pengguna Sistem
### Pelanggan
Pelanggan menggunakan sistem untuk melihat layanan, membuat pesanan, mengunggah file, melakukan pembayaran, dan memantau status pengerjaan.

### Admin / Pemilik Usaha
Admin mengelola pelanggan, layanan, pesanan, file, pembayaran, antrean pengerjaan, informasi website, dan laporan operasional.

### Midtrans
Midtrans digunakan sebagai layanan eksternal untuk memproses pembayaran dan mengirimkan pembaruan status transaksi.

## Fitur Website Publik
- Halaman beranda
- Halaman tentang kami
- Daftar layanan cetak
- Detail layanan dan harga
- Informasi kontak
- Informasi WhatsApp
- Informasi email
- Informasi alamat dan jam operasional
- Formulir pertanyaan pelanggan
- Akses login dan registrasi

## Fitur Pelanggan
- Registrasi akun
- Login dan logout
- Mengelola profil
- Mengubah kata sandi
- Melihat daftar layanan
- Melihat detail dan harga layanan
- Membuat pesanan layanan cetak
- Mengunggah file yang akan dicetak
- Memilih jenis cetak, ukuran kertas, jumlah halaman, salinan, jilid atau laminating
- Menambahkan catatan pesanan
- Menentukan jadwal pengambilan dan lokasi pengambilan
- Melihat estimasi biaya
- Melakukan pembayaran melalui Midtrans
- Melihat status pembayaran dan pengerjaan
- Melihat detail dan riwayat pesanan
- Membatalkan pesanan sesuai ketentuan

## Fitur Admin
- Melihat dashboard operasional
- Mengelola data pelanggan
- Mengelola kategori layanan dan layanan
- Mengatur harga layanan
- Mengaktifkan atau menonaktifkan layanan
- Melihat pesanan pelanggan
- Melihat dan mengunduh file pesanan
- Memverifikasi pesanan dan file
- Mengelola antrean pengerjaan
- Memperbarui status pesanan
- Melihat riwayat perubahan status
- Melihat status dan data pembayaran
- Mengelola pesan masuk
- Mengelola informasi website
- Mengelola hari libur dan jadwal operasional
- Mengatur biaya tambahan
- Mengelola role dan permission
- Melihat riwayat transaksi dan ringkasan pendapatan
- Memantau aktivitas penting dalam sistem

## Status Pesanan
- Menunggu Verifikasi: Pesanan telah dibuat dan menunggu pemeriksaan admin
- Diproses: Pesanan telah diverifikasi dan sedang dikerjakan
- Siap Diambil: Pesanan selesai dicetak dan siap diambil
- Selesai: Pesanan telah diserahkan kepada pelanggan
- Dibatalkan: Pesanan dibatalkan sebelum diproses

## Status Pembayaran
- Belum Bayar: Pelanggan belum menyelesaikan pembayaran
- Menunggu Verifikasi: Pembayaran masih dalam proses atau menunggu konfirmasi
- Lunas: Pembayaran berhasil diterima
- Ditolak: Pembayaran ditolak, dibatalkan, kedaluwarsa, atau gagal

Status transaksi Midtrans seperti pending, settlement, capture, deny, cancel, expire, dan failure dipetakan ke status pembayaran aplikasi.

## Batasan Upload File
- Maksimal 5 file per pesanan
- Maksimal 20 MB per file
- Maksimal total 50 MB
- Format yang didukung: .pdf, .doc, .docx, .ppt, .pptx, .jpg, .jpeg, .png

## Estimasi Biaya
- Subtotal cetak = harga layanan × jumlah halaman × jumlah salinan
- Total pesanan = subtotal cetak + biaya jilid + biaya laminating + biaya prioritas + biaya pengiriman + biaya tambahan lainnya

## Alur Proses Bisnis
1. Pelanggan registrasi atau login
2. Pelanggan melihat dan memilih layanan
3. Pelanggan mengisi detail kebutuhan cetak
4. Pelanggan mengunggah file pesanan
5. Sistem menghitung estimasi biaya
6. Sistem membuat kode pesanan otomatis
7. Pesanan disimpan dengan status Menunggu Verifikasi
8. Pelanggan melakukan pembayaran melalui Midtrans
9. Midtrans memproses pembayaran dan mengirimkan status transaksi
10. Sistem memperbarui status pembayaran
11. Admin memeriksa detail dan file pesanan
12. Admin mengatur antrean pengerjaan
13. Admin memperbarui status pesanan ke Diproses, Siap Diambil, atau Selesai
14. Pelanggan memantau proses melalui website

## Metode Pengembangan
Pengembangan menggunakan metode Agile dengan iterasi:
- Iterasi 1: Autentikasi dan Informasi Layanan
- Iterasi 2: Pemesanan Layanan
- Iterasi 3: Manajemen Pesanan
- Iterasi 4: Manajemen Data dan Komunikasi
- Iterasi 5: Dashboard dan Pelaporan

## Teknologi yang Digunakan
- Backend: Laravel 12
- Bahasa: PHP dan JavaScript
- Frontend: Blade, HTML, CSS, JavaScript
- Styling: Tailwind CSS
- Admin panel: Filament
- Database: MariaDB
- Payment gateway: Midtrans
- Web server: Nginx
- Reverse proxy: Nginx Proxy Manager
- Containerization: Docker
- Version control: Git dan GitHub
- Development environment: WSL Ubuntu dan Visual Studio Code

## Data Utama Sistem
- Data pengguna
- Data role dan permission
- Data kategori layanan
- Data layanan
- Data pesanan dan detail pesanan
- Data file pelanggan
- Data pembayaran
- Data pengiriman atau pengambilan
- Data riwayat status
- Data pesan masuk
- Data pengaturan website
- Data hari libur dan jadwal operasional
- Data aktivitas sistem

## Ruang Lingkup
- Pemesanan layanan cetak melalui website
- Pengunggahan file pelanggan
- Perhitungan estimasi biaya
- Pembayaran online
- Monitoring status pembayaran dan pengerjaan
- Pengelolaan layanan dan pesanan oleh admin
- Pengelolaan antrean
- Dashboard laporan operasional
- Pengaturan informasi website
- Pembatasan akses berdasarkan role dan permission

## Batasan Sistem
- Tidak mencakup aplikasi mobile Android/iOS
- Tidak mencakup integrasi printer otomatis
- Tidak mencakup pelacakan kurir real-time
- Tidak mencakup integrasi jasa pengiriman pihak ketiga otomatis
- Tidak mencakup refund Midtrans otomatis
- Tidak mencakup pembayaran berlangganan atau berulang
- Tidak mencakup sistem akuntansi/pembukuan lengkap
- Tidak mencakup sistem multi-cabang
- Tidak mencakup otomatisasi proses pencetakan
- Pemeriksaan file dan pencetakan tetap manual oleh admin

## Kriteria Keberhasilan
- Pelanggan dapat registrasi dan login
- Pelanggan dapat melihat daftar dan detail layanan
- Pelanggan dapat membuat pesanan
- File pesanan dapat diunggah dan diakses admin
- Kode pesanan terbentuk otomatis
- Estimasi biaya dapat ditampilkan
- Pembayaran Midtrans dapat digunakan
- Status pembayaran dan pesanan dapat diperbarui
- Admin dapat mengelola layanan dan pesanan
- Admin dapat memverifikasi file
- Admin dapat memperbarui status pengerjaan
- Data transaksi dan pendapatan dapat ditampilkan
- Akses pelanggan dan admin dapat dibatasi
- Sistem dapat diakses melalui domain production dengan HTTPS

## Dokumentasi Project
- Business Requirement Document
- Product Requirement Document
- User story
- Product backlog
- Sitemap
- Use case diagram
- Activity diagram
- Entity Relationship Diagram
- Wireframe dan mockup
- Dokumentasi implementasi
- Pengujian black-box
- User Acceptance Testing
- Laporan Capstone Project

## Website
- https://print.ilhamfirmansyah.store

## Repository
- https://github.com/ilhammf/tukangprintdadakan-2026

## Pengembang
- Ilham Firmansyah
- NIM: 20240801102
- Program Studi Teknik Informatika
- Fakultas Ilmu Komputer
- Universitas Esa Unggul
- GitHub: @ilhammf

## Catatan Keamanan
- Jangan menyimpan password database ke repository
- Jangan menyimpan file .env ke repository
- Jangan menyimpan Midtrans Server Key atau GitHub token ke repository
- Jangan menyimpan credential VPS ke repository
- Jangan menyimpan data pribadi pelanggan ke repository
- Jangan menyimpan informasi transaksi rahasia ke repository
- Gunakan data dummy atau data yang telah disamarkan untuk dokumentasi publik

## Penafian
Project ini dikembangkan untuk memenuhi tugas akhir mata kuliah Pemrograman Web pada Program Studi Teknik Informatika, Universitas Esa Unggul.

Sistem Tukang Print Dadakan dikembangkan sebagai implementasi akademik dari proses analisis kebutuhan, perancangan sistem, pengembangan aplikasi web, integrasi basis data, pengujian, dan deployment.

## Lisensi
Repository ini digunakan untuk kebutuhan akademik. Hak penggunaan dan pengembangan source code berada pada pengembang.
