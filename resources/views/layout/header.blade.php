
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
            background-color: #f8f9fa; /* Sesuaikan warna latar belakang sesuai kebutuhan */
        }

        .navbar {
            border-bottom: 1px solid #ababab; /* Sesuaikan warna garis bawah sesuai kebutuhan */
        }

        .container-fluid {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
        }

        .navbar img {
            width: 50px;
            height: 50px;
        }

        .navbar a {
            margin-left: 10px; /* Sesuaikan margin-left sesuai kebutuhan */
            text-decoration: none;
            color: black; /* Sesuaikan warna teks sesuai kebutuhan */
        }

        .nav-underline {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-item {
            margin-right: 15px; /* Sesuaikan margin-right sesuai kebutuhan */
        }

        .search-box {
            display: flex;
            align-items: center;
        }

        .search-box input {
            margin-right: 5px; /* Sesuaikan margin-right sesuai kebutuhan */
        }

        .search-box button {
            background-color: #007bff; /* Sesuaikan warna latar belakang sesuai kebutuhan */
            color: #fff; /* Sesuaikan warna teks sesuai kebutuhan */
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<header class="navbar navbar-expand-lg bg-body-tertiary py-1 mb-5 border-bottom">
    <nav class="navbar bg-body">
        <div class="container-fluid">
            <a class="" href="/">
                <img src="https://github.com/Yudipratama29/BaliTour/blob/main/Img/Logo/Logo%20PNG.png?raw=true" alt="Logo">
            </a>
            <a>
                Bali Tour
            </a>
            <ul class="nav nav-underline ml-auto">
                <li class="nav-item">
                    @php
                        $menu = [['url' => '/', 'name' => 'Home'], ['url' => 'tour', 'name' => 'Tour'], ['url' => 'aktivitas', 'name' => 'Aktivitas'],['url' => 'villa', 'name' => 'Villa'], ['url' => 'book', 'name' => 'Book']];
                    @endphp
            
                    @foreach ($menu as $m)
                        @include('layout.nav-item', ['menu' => $m])
                    @endforeach
                </li>
            </ul>
            <div class="search-box ml-auto">
                <input type="text" placeholder="Cari...">
                <button type="button">Cari</button>
            </div>
        </div>
    </nav>
</header>

<!-- Isi halaman web lainnya -->

</body>
</html>

