<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'XI RPL | Fontaine')</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: #f8fbff;
            color: #102d50;
        }

        /* =========================
           HEADER
        ========================= */

        .site-header {
            position: relative;
            overflow: hidden;
            background: #0b3d6e;
            color: white;
            padding: 22px 7%;
            border-bottom: 4px solid #d4af37;
            box-shadow: 0 5px 20px rgba(11, 61, 110, 0.2);
        }

        .header-content {
            position: relative;
            z-index: 2;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand {
            text-decoration: none;
            color: white;
        }

        .brand-small {
            display: block;
            color: #d4af37;
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 4px;
            margin-bottom: 5px;
        }

        .brand-title {
            font-size: 25px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .brand-title span {
            color: #e6c75a;
        }

        /* =========================
           NAVIGATION
        ========================= */

        .main-nav {
            display: flex;
            gap: 10px;
        }

        .main-nav a {
            position: relative;
            color: white;
            text-decoration: none;
            padding: 10px 18px;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 1px;
            transition: 0.3s;
        }

        .main-nav a::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: 2px;
            width: 0;
            height: 2px;
            background: #d4af37;
            transform: translateX(-50%);
            transition: 0.3s;
        }

        .main-nav a:hover {
            color: #e6c75a;
        }

        .main-nav a:hover::after {
            width: 70%;
        }

        /* =========================
           ORNAMEN AIR
        ========================= */

        .water-decoration {
            position: absolute;
            right: -50px;
            top: -80px;
            width: 250px;
            height: 250px;
            border: 2px solid rgba(212, 175, 55, 0.35);
            border-radius: 50%;
        }

        .water-decoration::before {
            content: "";
            position: absolute;
            inset: 25px;
            border: 1px solid rgba(212, 175, 55, 0.3);
            border-radius: 50%;
        }

        .water-decoration::after {
            content: "";
            position: absolute;
            inset: 55px;
            border: 1px solid rgba(212, 175, 55, 0.25);
            border-radius: 50%;
        }

        /* =========================
           MAIN
        ========================= */

        main {
            max-width: 1200px;
            min-height: 600px;
            margin: 0 auto;
            padding: 50px 25px;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 768px) {

            .header-content {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }

            .main-nav {
                flex-wrap: wrap;
                justify-content: center;
            }

            .brand-title {
                font-size: 21px;
            }

            main {
                padding: 30px 15px;
            }
        }
    </style>
</head>

<body>

<header class="site-header">

    <div class="water-decoration"></div>

    <div class="header-content">

        <a href="/" class="brand">
            <span class="brand-small">FONTAINE • XI RPL</span>

            <div class="brand-title">
                <span>XI</span> REKAYASA PERANGKAT LUNAK
            </div>
        </a>

        <nav class="main-nav">
            <a href="/">HOME</a>
            <a href="/profil">PROFIL</a>
            <a href="/anggota">ANGGOTA</a>
            <a href="/kontak">KONTAK</a>
        </nav>

    </div>

</header>

<main>