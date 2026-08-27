@extends('layouts.app')

@section('title', 'Kontak XI RPL')

@section('content')

<style>
    .contact-page {
        position: relative;
        overflow: hidden;
        background: #ffffff;
        border-radius: 20px;
        padding: 50px;
        min-height: 650px;
        box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
    }

    /* Judul */
    .contact-title {
        position: relative;
        z-index: 2;
    }

    .contact-title > p:first-child {
        color: #d4af37;
        font-weight: bold;
        letter-spacing: 2px;
        margin-bottom: 8px;
    }

    .contact-title h2 {
        color: #0b2d5c;
        font-size: 42px;
        margin-bottom: 10px;
    }

    .contact-title h2 span {
        color: #d4af37;
    }

    .contact-title p {
        color: #555;
        font-size: 17px;
        line-height: 1.7;
    }

    /* Garis emas */
    .gold-line {
        width: 80px;
        height: 5px;
        background: #d4af37;
        margin: 15px 0 30px;
        border-radius: 10px;
    }

    /* Kontak */
    .contact-content {
        position: relative;
        z-index: 2;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
        margin-top: 40px;
    }

    .contact-card {
        background: rgba(255, 255, 255, 0.96);
        border-left: 5px solid #d4af37;
        border-radius: 12px;
        padding: 30px 25px;
        box-shadow: 0 5px 20px rgba(11, 45, 92, 0.08);
        transition: 0.3s ease;
    }

    .contact-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 10px 25px rgba(11, 45, 92, 0.15);
    }

    .contact-icon {
        width: 55px;
        height: 55px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #0b2d5c;
        color: #d4af37;
        border-radius: 50%;
        font-size: 24px;
        margin-bottom: 20px;
    }

    .contact-card h3 {
        color: #0b2d5c;
        margin-bottom: 12px;
        font-size: 21px;
    }

    .contact-card p {
        color: #555;
        line-height: 1.7;
        margin: 0;
    }

    .contact-card a {
        color: #555;
        text-decoration: none;
        word-break: break-word;
    }

    .contact-card a:hover {
        color: #0b2d5c;
    }

    /* Pola emas */
    .gold-pattern {
        position: absolute;
        top: 25px;
        right: 25px;
        width: 120px;
        height: 120px;
        border: 3px solid #d4af37;
        border-radius: 50%;
        opacity: 0.5;
    }

    .gold-pattern::before,
    .gold-pattern::after {
        content: "";
        position: absolute;
        border: 2px solid #d4af37;
        border-radius: 50%;
    }

    .gold-pattern::before {
        width: 80px;
        height: 80px;
        top: 17px;
        left: 17px;
    }

    .gold-pattern::after {
        width: 40px;
        height: 40px;
        top: 37px;
        left: 37px;
    }

    /* Ombak biru */
    .wave {
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 100%;
        height: 170px;
        background: #0b2d5c;
        clip-path: ellipse(75% 55% at 50% 100%);
        opacity: 0.95;
    }

    .wave::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100px;
        top: -35px;
        left: 0;
        background: #d4af37;
        clip-path: ellipse(65% 50% at 50% 100%);
        opacity: 0.8;
    }

    /* Responsive */
    @media (max-width: 900px) {
        .contact-content {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .contact-page {
            padding: 30px 20px;
        }

        .contact-title h2 {
            font-size: 32px;
        }

        .gold-pattern {
            display: none;
        }

        .contact-content {
            margin-top: 30px;
        }
    }
</style>

<div class="contact-page">

    <div class="gold-pattern"></div>

    <!-- Judul -->
    <div class="contact-title">
        <p>HUBUNGI KAMI</p>

        <h2>
            Kontak <span>XI RPL</span>
        </h2>

        <div class="gold-line"></div>

        <p>
            Silakan hubungi kami melalui informasi kontak
            di bawah ini untuk mendapatkan informasi lebih
            lanjut mengenai kelas XI Rekayasa Perangkat Lunak.
        </p>
    </div>

    <!-- Kontak -->
    <div class="contact-content">

        <!-- Email -->
        <div class="contact-card">
            <div class="contact-icon">
                ✉
            </div>

            <h3>Email</h3>

            <p>
                <a href="mailto:email@sekolah.sch.id">
                    email@sekolah.sch.id
                </a>
            </p>
        </div>

        <!-- Instagram -->
        <div class="contact-card">
            <div class="contact-icon">
                ◎
            </div>

            <h3>Instagram</h3>

            <p>
                <a
                    href="https://www.instagram.com/"
                    target="_blank"
                    rel="noopener noreferrer"
                >
                    @instagramsekolah
                </a>
            </p>
        </div>

        <!-- Alamat -->
        <div class="contact-card">
            <div class="contact-icon">
                📍
            </div>

            <h3>Alamat Sekolah</h3>

            <p>
                SMKN 1 Garut<br>
                Jl. Cimanuk No. 309,<br>
                Garut, Jawa Barat
            </p>
        </div>

    </div>

    <div class="wave"></div>

</div>

@endsection