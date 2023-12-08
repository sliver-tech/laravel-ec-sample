<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body style="margin: 0%;">

    <style>
        .selectedNavLi {
            background-color: rgb(213, 213, 213);
        }
    </style>

    <div style="position: relative;">
        <img src="{{ asset('asset/shopping-header.png') }}" class="img-fluid" style="width: 100%;max-height: 300px;object-fit: cover;" alt="">
        <p style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 80px; color: rgb(255, 255, 255); background-color: rgba(0, 0, 0, 0.5); padding-left: 10px; padding-right: 10px;">{{ env('APP_NAME') }}</p>
    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom w-100">
        <div class="container-fluid  w-100">
            <div class="collapse navbar-collapse  w-100" id="navbarNav">
                <ul class="navbar-nav text-center w-100 h2">
                <li class="nav-item w-25 border-end @if($menu === 'top') selectedNavLi @endif">
                    <a class="nav-link" href="{{ route('shop.top') }}">トップ</a>
                </li>
                <li class="nav-item w-25 border-end @if($menu === 'products') selectedNavLi @endif">
                    <a class="nav-link" href="{{ route('shop.products') }}">商品一覧</a>
                </li>
                <li class="nav-item w-25 border-end @if($menu === 'companies') selectedNavLi @endif">
                    <a class="nav-link" href="{{ route('shop.companies') }}">企業一覧</a>
                </li>
                <li class="nav-item w-25 @if($menu === 'events') selectedNavLi @endif">
                    <a class="nav-link" href="{{ route('shop.events') }}">イベント一覧</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <div style="min-height: 90%;">
        @yield('body')
    </div>

    <div class="w-100 bg-dark">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center text-white">
                    <p class="h4">ECショップちゃん</p>
                    <p class="h6">© 2021 ECショップちゃん <a href="{{ route('shop.service') }}">利用規約</a></p>
                    <a href="{{ route('login') }}" class="text-white">管理者ログイン</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>