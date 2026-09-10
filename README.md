<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

HEAD
U.PERTANYAAN ANALISI
1.Apa fungsi git pull?
Mengambil dan menggabungkan update: Berfungsi untuk mengunduh perubahan terbaru dari repository online (GitHub) dan langsung menggabungkannya (merge) ke dalam branch lokal yang sedang aktif di komputer.
Menyelaraskan kode: Memastikan agar kode yang ada di laptop kita tetap sinkron dengan perubahan atau penambahan kode yang mungkin sudah dikirim oleh anggota tim lain.

2.Apa yang terjadi jika programmer tidak melakukan git pull?
Risiko konflik kode: Jika anggota tim lain sudah mengubah file yang sama di GitHub, programmer berisiko mengalami konflik saat nanti akan mengirim (push) kodenya.
Penolakan dari sistem: Git biasanya akan menolak perintah push dan memunculkan pesan error (rejected / fetch first) karena versi kode di laptop tertinggal dibandingkan dengan yang ada di server online.

3.Mengapa main harus dijaga agar tetap stabil?
Pusat integrasi utama: Branch main adalah wadah utama tempat semua fitur dari setiap anggota kelompok digabungkan secara akhir.
Kesiapan rilis/produksi: Jika branch main tidak stabil atau error, maka aplikasi atau website secara keseluruhan akan ikut rusak dan gagal saat dijalankan atau dibagikan.

X. PERTANYAAN CONFLICT
1.Mengapa conflict terjadi?
Terjadi ketika ada dua atau lebih programmer mengubah baris kode yang sama pada file yang sama, atau ketika seseorang mengubah file yang telah dihapus oleh orang lain.
Git tidak bisa memutuskan secara otomatis bagian kode mana yang harus dipilih atau dibuang, sehingga proses penggabungan (merge/rebase) dihentikan sementara.

2.Apakah conflict berarti Git rusak?
Tidak sama sekali. Conflict adalah hal yang sangat normal dan lumrah terjadi dalam kerja kelompok atau kolaborasi pemrograman.
Hal itu bukan tanda error atau kerusakan pada aplikasi Git, melainkan fitur pengaman agar tidak ada kode milik anggota tim yang tertimpa atau terhapus secara tidak sengaja.

3.Siapa yang harus menentukan versi kode yang benar?
Programmer itu sendiri (manusia). Tim pengembang atau anggota kelompok yang bersangkutan harus berdiskusi dan memeriksa kodenya secara manual untuk memilih baris mana yang akan dipertahankan.

4.Mengapa komunikasi antar programmer penting?
Untuk menghindari conflict yang tidak perlu dengan cara membagi tugas secara jelas (misalnya siapa yang mengerjakan file A dan siapa yang mengerjakan file B).
Memudahkan proses penyelesaian masalah (debugging) serta pengambilan keputusan bersama ketika terjadi conflict kode agar tidak salah menghapus pekerjaan teman.

AC. REFLEKSI INDIVIDU
1.Apa perbedaan bekerja sendiri dengan bekerja menggunakan Git dan GitHub?
Bekerja sendiri: Semua file disimpan secara lokal di satu komputer, tidak perlu khawatir terjadi bentrok kode (conflict), dan perubahan kode dapat dilakukan bebas tanpa koordinasi.
Menggunakan Git dan GitHub: Bisa berkolaborasi secara bersama-sama dalam satu proyek dari komputer yang berbeda, riwayat perubahan kode tercatat rapi, dan ada wadah untuk menggabungkan kode secara terstruktur.

2.Apa manfaat branch?
Memungkinkan setiap anggota kelompok untuk membuat fitur baru secara terisolasi tanpa mengganggu atau merusak kode utama (main) yang sedang dikerjakan oleh teman lain.

3.Mengapa Pull Request diperlukan?
Sebagai jembatan pengajuan kode agar perubahan yang kita buat bisa ditinjau, didiskusikan, dan diuji terlebih dahulu oleh tim sebelum resmi digabungkan (merge) ke branch utama.

4.Apa manfaat Code Review?
Membantu menemukan potensi error atau kesalahan penulisan kode lebih awal, serta menjadi sarana belajar bersama untuk melihat cara kerja atau logika kode yang ditulis oleh anggota kelompok lain.

5.Error apa yang paling sulit kalian selesaikan?
Error merge conflict pada file (README.md) serta perbedaan riwayat commit (entirely different commit histories) saat hendak melakukan sinkronisasi dengan branch main.

6.Bagaimana kalian menemukan solusinya?
Melalui proses troubleshooting step-by-step di terminal, seperti menggunakan perintah git rebase --abort, menyelaraskan kembali dengan opsi --allow-unrelated-histories atau reset paksa, serta bantuan panduan penyelesaian.

7.Apa kontribusi terbesar kalian dalam kelompok?
Berhasil menyelesaikan dan mengirimkan kode fitur halaman khusus (seperti profil/anggota) serta ikut serta aktif mengatasi kendala teknis saat proses penggabungan kode kelompok.

8.Jika menjadi programmer profesional, kebiasaan apa dari kegiatan ini yang akan kalian pertahankan?
Membiasakan diri menggunakan branch terpisah untuk setiap fitur baru, rutin melakukan commit dengan pesan yang jelas, serta menjaga komunikasi yang baik dengan tim sebelum melakukan merge kode untuk menghindari konflik.

AE. REFLEKSI AKHIR
Sebelum belajar GitHub, saya berpikir bahwa membuat sebuah website atau aplikasi secara bersama-sama dalam satu kelompok itu cukup dilakukan dengan cara mengirim file mentah lewat WhatsApp atau Flashdisk saja.

Setelah melakukan kolaborasi dengan GitHub, saya memahami bahwa ada cara yang jauh lebih profesional dan aman untuk bekerja secara tim menggunakan sistem version control, branch, dan pull request tanpa takut file teman tertimpa.

Kesalahan/error yang saya alami mengajarkan saya bahwa error di Git/GitHub adalah hal yang lumrah dan melatih saya untuk lebih teliti membaca pesan log di terminal serta memahami alur kerja kolaborasi kode dengan benar.

Jika saya bekerja sebagai programmer dalam sebuah tim, saya akan selalu berkomunikasi secara aktif dengan rekan setim mengenai pembagian tugas, rutin melakukan sinkronisasi kode, serta selalu membuat branch baru yang rapi untuk setiap fitur yang dikerjakan.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
fitur-profil
ssss
