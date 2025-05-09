<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coachtech</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    @yield('css')
</head>
<body>
    <header class="app">
        <div class="header">
            <h1 class="header__heading">
                <a class="header__logo" href="/">
                    <img src="img/logo.svg" alt="coachtech">
                </a>
                @yield('link')
            </h1>
        </div>
    </header>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>