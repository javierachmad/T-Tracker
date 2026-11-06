<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T Tracker</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            color: #333;
            /* Trik Flexbox agar Footer otomatis di paling bawah */
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .main-content {
            flex: 1;
            max-width: 1100px;
            width: 100%;
            margin: 0 auto;
            padding: 30px 20px;
        }
    </style>
</head>
<body>

    <x-navbar :username="$username ?? 'Guest'" />

    <div class="main-content">
        @yield('content')
    </div>

    <x-footer />

</body>
</html>