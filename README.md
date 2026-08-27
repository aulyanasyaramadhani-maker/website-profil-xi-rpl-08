# Website Profil XI RPL
Website ini merupakan proyek pembelajaran
kolaborasi Git dan GitHub.

## Anggota Tim
1.Nama - Aulya Nasya.R
2.Nama - Rifki Fauzi
3.Nama - Sulthan Hifdzu
4.Nama - Hendra Permana

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

