
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/santize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>
    <header class="flex">
        <span class="center">
            <h2>FashionablyLate</h2>
        </span>
        <span class="right">
            @yield('header')
        </span>
    </header>

    <main>
        @yield('content')
    </main>

    
</body>
</html>