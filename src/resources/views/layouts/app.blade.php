<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coachtech</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>
    <header class="app">
        <div class="toppage-header">
            <h1 class="toppage-header__icon">
                <a class="header__logo" href="/">
                    <img src="{{ asset('img/logo.svg') }}" alt="coachtech">
                </a>
            </h1>
            <div class="toppage-header__search">
                    <input class="search-bar" type="text" placeholder="なにをお探しですか？">
            </div>
            <div class="toppage-header-nav">
                <nav>
                    <a href="{{ route('login') }}" class="btn-login-link">ログイン</a>
                    <a href="{{ route('mypage') }}" class="btn-mypage-link">マイページ</a>
                    <a href="{{ route('items.create') }}" class="btn-sell-link">出品</a>
                </nav>
            </div>
            @yield('link')
        </div>
    </header>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>