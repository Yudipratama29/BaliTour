<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BaliTour</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #f8f9fa;
            padding: 10px;
        }

        .navbar a {
            color: #6c757d;
            margin-right: 10px;
            text-decoration: none;
        }

        .navbar a:hover {
            color: #007bff;
        }

        .float-left {
            float: left;
            margin-right: 15px;
        }

        .hero {
            background: ;
            background-repeat: no-repeat;
            background-size: 100%;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section {
            margin-bottom: 50px;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    @include('layout.header')

    @yield('content')

    <div class="footer">
        <img src="https://github.com/Yudipratama29/BaliTour/blob/main/Img/Logo/Logo%20PNG.png?raw=true" alt="Logo" class="float-left" style="width: 50px; height: auto;">
        <p>&copy; 2023 BaliTour. All rights reserved.</p>
    </div>
</body>
</html>