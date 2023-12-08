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
        <p style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 80px; color: rgb(255, 255, 255); background-color: rgba(0, 0, 0, 0.5); padding-left: 10px; padding-right: 10px;">商品の購入</p>
    </div>

    <div class="card mt-4">
        <div class="card-body text-center">
            <h1>商品を購入します。以下の情報を入力して、購入を確定してください。</h1>
        </div>
    </div>

    <div style="min-height: 90%;">

        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card mt-4 px-4">
                    <div class="card-body">
                        <h2>商品名: {{ $product->name }}</h2>
                        <h3>値段(1個あたり): {{ $product->price }} 円</h3>
                        <h6>商品概要: {{ $product->description }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="exampleSelect" class="form-label">注文数</label>
                            <select class="form-select" id="exampleSelect">
                                <option selected="">商品の数を選択</option>
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">お名前</label>
                            <input type="text" class="form-control" id="name" aria-describedby="nameHelp">
                        </div>

                        <div class="mb-3">
                            <label for="nameKana" class="form-label">お名前(ふりがな)</label>
                            <input type="text" class="form-control" id="nameKana" aria-describedby="nameKanaHelp">
                            <div id="nameKanaHelp" class="form-text">住所は、県名から入力してください。</div>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">お届け先住所</label>
                            <input type="text" class="form-control" id="address" aria-describedby="addressHelp">
                            <div id="addressHelp" class="form-text">住所は、県名から入力してください。</div>
                        </div>

                        <div class="mb-3">
                            <label for="request" class="form-label">ご要望</label>
                            <input type="text" class="form-control" id="request" aria-describedby="requestHelp">
                            <div id="requestHelp" class="form-text">住所は、県名から入力してください。</div>
                        </div>

                        <h4>「購入を確定する」ボタンを押すことで、<a href="{{ route('shop.service') }}">利用規約</a>に同意したとみなされます。</h4>

                        <div>
                            <button onclick="history.back()" class="btn btn-large btn-secondary btn-lg">戻る</button>

                            <a href="{{ route('shop.purchase.complete') }}">
                                <button class="btn btn-danger btn-lg">購入を確定する</button>
                            </a>
                        </div>

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