@extends('layouts.app')

@section('title', 'Profil XI RPL')

@section('content')

<style>
    .profile-page {
        position: relative;
        overflow: hidden;
        background: #ffffff;
        border-radius: 20px;
        padding: 50px;
        box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
    }

    /* Corak emas */
    .gold-line {
        width: 80px;
        height: 5px;
        background: #d4af37;
        margin: 15px 0 30px;
        border-radius: 10px;
    }

    .profile-title {
        position: relative;
        z-index: 2;
    }

    .profile-title span {
        color: #d4af37;
    }

    .profile-title h2 {
        color: #0b2d5c;
        font-size: 42px;
        margin-bottom: 10px;
    }

    .profile-title p {
        color: #555;
        font-size: 17px;
    }

    .profile-content {
        position: relative;
        z-index: 2;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 25px;
        margin-top: 40px;
    }

    .profile-card {
        background: rgba(255, 255, 255, 0.95);
        border-left: 5px solid #d4af37;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 5px 20px rgba(11, 45, 92, 0.08);
    }

    .profile-card h3 {
        color: #0b2d5c;
        margin-bottom: 12px;
        font-size: 21px;
    }

    .profile-card p {
        color: #555;
        line-height: 1.7;
    }

    /* Ombak biru bagian bawah */
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

    /* Corak emas */
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

    @media (max-width: 768px) {
        .profile-page {
            padding: 30px 20px;
        }

        .profile-title h2 {
            font-size: 32px;
        }

        .profile-content {
            grid-template-columns: 1fr;
        }

        .gold-pattern {
            display: none;
        }
    }
</style>

<div class="profile-page">

    <div class="gold-pattern"></div>

    <div class="profile-title">
        <p>PROFIL KELAS</p>

        <h2>
            XI <span>Rekayasa Perangkat Lunak</span>
        </h2>

        <div class="gold-line"></div>

        <p>
            Mengenal lebih dekat kelas XI RPL,
            program keahlian, serta visi yang menjadi
            pedoman dalam proses pembelajaran.
        </p>
    </div>

    <div class="profile-content">

        <div class="profile-card">
            <h3>Nama Kelas</h3>

            <p>
                XI RPL I
            </p>
        </div>

        <div class="profile-card">
            <h3>Nama Sekolah</h3>

            <p>
                SMKN 1 Garut
            </p>
        </div>

        <div class="profile-card">
            <h3>Program Keahlian</h3>

            <p>
                Rekayasa Perangkat Lunak (RPL)
            </p>
        </div>

        <div class="profile-card">
            <h3>Deskripsi Kelas</h3>

            <p>
                XI RPL merupakan kelas yang mempelajari
                pengembangan perangkat lunak, pemrograman,
                basis data, serta teknologi yang berkaitan
                dengan pengembangan aplikasi.
            </p>
        </div>

        <div class="profile-card">
            <h3>Visi Kelas</h3>

            <p>
                Menjadi kelas yang kompeten, kreatif,
                disiplin, bertanggung jawab, dan mampu
                mengembangkan perangkat lunak sesuai
                dengan perkembangan teknologi.
            </p>
        </div>

    </div>

    <div class="wave"></div>

</div>

@endsection
