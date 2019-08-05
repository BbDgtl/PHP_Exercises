<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <div class="header_content">
            @yield('content')
        </div>
    </header>
    <div class="content">
        @yield('content')
    </div>
    <footer>
        <div class="footer_content">
            @yield('content')
        </div>
    </footer>
</body>

</html>

