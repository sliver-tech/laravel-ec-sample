<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&amp;display=swap" rel="stylesheet">

    <!-- Scripts -->
    <link rel="preload" as="style" href="http://localhost/builded/assets/app-932214ad.css">
    <link rel="modulepreload" href="http://localhost/builded/assets/app-23e3ce8a.js">
    <link rel="stylesheet" href="http://localhost/builded/assets/app-932214ad.css">
    <script type="module" src="http://localhost/builded/assets/app-23e3ce8a.js"></script>
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <a href="/">
                <img src="http://localhost/asset/shopping-icon.png" class="w-20 h-20 fill-current text-gray-500">
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <label class="block font-medium text-sm text-gray-700" for="email">
                    メールアドレス
                    </label>
                    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="email" type="email" name="email" required="required" autofocus="autofocus" autocomplete="username">
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="password">
                        パスワード
                    </label>
                    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="password" type="password" name="password" required="required" autocomplete="current-password">

                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600">ログイン状態を維持</span>
                    </label>
                </div>

                <div class="block mt-4">
                    <br>
                    <h5>【テスト用アカウントのログイン情報】</h5>
                    <br>
                    <p><span>メールアドレス</span>: test1@example.com</p>
                    <p><span>パスワード</span>: 8CzKNEvsiyU78Eb</p>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-3">
                        ログインする
                    </button>
                </div>
            </form>
        </div>
    </div>

    <deepl-input-controller></deepl-input-controller>
</body>
</html>