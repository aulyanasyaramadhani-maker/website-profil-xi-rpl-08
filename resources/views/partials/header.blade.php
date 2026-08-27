<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Website Profil XI RPL')</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            color: #222;
        }

        header {
            background: #222;
            color: white;
            padding: 20px;
        }

        header h1 {
            margin-bottom: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
            min-height: 500px;
        }
    </style>
</head>

<body>

<header>
    <h1>Website Profil XI RPL</h1>

    <nav>
        <a href="/">Home</a>
        <a href="/profil">Profil</a>
    </nav>
</header>

<main>