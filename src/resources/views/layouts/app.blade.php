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
                    <img src="{{ asset('img/logo.svg') }}" alt="coachtech">
                </a>
                <div class="header-input">
                    <input class="search-bar" type="text" placeholder="なにをお探しですか？">
                </div>
                <div class="header-nav">
                    <a href="#">ログイン</a>
                    <a href="#">マイページ</a>
                    <a href="#">出品</a>
                </div>
                @yield('link')
            </h1>
        </div>
    </header>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>