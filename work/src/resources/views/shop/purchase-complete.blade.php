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
        <p style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 80px; color: rgb(255, 255, 255); background-color: rgba(0, 0, 0, 0.5); padding-left: 10px; padding-right: 10px;">購入の完了</p>
    </div>

    <div style="min-height: 90%;">

        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card mt-4 px-4">
                    <div class="card-body text-center">
                        <h1>商品の購入が完了しました。お届けまでお待ちください。</h1>
                        <a href="{{ route('shop.top') }}">
                            <button class="btn btn-primary btn-lg mt-4">トップに戻る</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

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