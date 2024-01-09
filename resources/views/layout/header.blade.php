<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bali Tour</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #ababab;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            position: relative;
        }

        .navbar img {
            width: 50px;
            height: 50px;
        }

        .navbar a {
            margin-left: 10px;
            text-decoration: none;
            color: black;
        }

        .nav-underline {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-item {
            margin-right: 15px;
        }

        .search-box {
            position: absolute;
            top: 0;
            right: 0;
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .search-box input {
            margin-right: 5px;
        }

        .search-box button,
        .logout-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
        }

        .logout-button {
            margin-left: 10px;
        }
    </style>
</head>
<body>

    <header class="navbar navbar-expand-lg bg-body-tertiary py-1 mb-5 border-bottom">
        <a class="" href="/">
            <img src="https://github.com/Yudipratama29/BaliTour/blob/main/Img/Logo/Logo%20PNG.png?raw=true" alt="Logo">
        </a>
        <a>
            BaliTour
        </a>
        <ul class="nav nav-underline ml-auto">
            <li class="nav-item">
                @php
                    $menu = [['url' => '/home', 'name' => 'Home'], ['url' => 'tour', 'name' => 'Tour'], ['url' => 'aktivitas', 'name' => 'Aktivitas'],['url' => 'villa', 'name' => 'Villa'], ['url' => 'book', 'name' => 'Book']];
                @endphp

                @foreach ($menu as $m)
                    @include('layout.nav-item', ['menu' => $m])
                @endforeach
            </li>
        </ul>
        <div class="search-box">
            <input type="text" placeholder="Cari...">
            <button type="button">Cari</button>
            <button class="logout-button" type="button">Logout</button>
        </div>
    </header>

</body>
</html>