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
                <li class="nav-item w-25 border-end">
                    <a class="nav-link" href="{{ route('shop.top') }}">トップ</a>
                </li>
                <li class="nav-item w-25 border-end">
                    <a class="nav-link" href="{{ route('shop.products') }}">商品一覧</a>
                </li>
                <li class="nav-item w-25 border-end">
                    <a class="nav-link" href="{{ route('shop.companies') }}">企業一覧</a>
                </li>
                <li class="nav-item w-25">
                    <a class="nav-link" href="{{ route('shop.events') }}">イベント一覧</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row" style="min-height: 90%;">
        <h1 class="text-center my-3">利用規約</h1>
        <div class="col-4"></div>
        <section class="col-8">

            <article>
                <h2>第1条（適用）</h2>
                <ol>
                    <li>本規約は、架空のECサイト（以下、「当サイト」という）の提供するサービス（以下、「本サービス」という）の利用条件を定めるものです。</li>
                    <li>本サービスを利用するすべてのユーザー（以下、「ユーザー」という）は、本規約の規定に同意したものとみなされます。</li>
                </ol>
            </article>

            <article>
                <h2>第2条（定義）</h2>
                <ol>
                    <li>「ユーザー」とは、本サービスを利用するすべての個人または法人を指します。</li>
                    <li>「コンテンツ」とは、テキスト、画像、動画、音声、ソフトウェア、プログラム、コードその他の情報を指します。</li>
                </ol>
            </article>

            <article>
                <h2>第3条（サービス内容）</h2>
                <ol>
                    <li>当サイトは、ユーザーに対して、商品の販売、情報の提供、その他ECサービスを提供します。</li>
                    <li>当サイトは、サービス内容を予告なく変更または終了することができます。</li>
                </ol>
            </article>

            <article>
                <h2>第4条（利用登録）</h2>
                <ol>
                    <li>ユーザーは、当サイト所定の手続きにより、本サービスの利用登録を行うものとします。</li>
                    <li>当サイトは、利用登録の申請者に対し、利用登録を承認することがあります。</li>
                </ol>
            </article>

            <article>
                <h2>第5条（利用料金及び支払方法）</h2>
                <ol>
                    <li>本サービスの利用に関する料金及び支払方法は、当サイトが別途定めるものとします。</li>
                </ol>
            </article>

            <article>
                <h2>第6条（禁止事項）</h2>
                <ol>
                    <li>ユーザーは、以下の行為をしてはならないものとします。</li>
                    <ol>
                        <li>法令または公序良俗に違反する行為。</li>
                        <li>犯罪行為に関連する行為。</li>
                        <li>当サイト、他のユーザー、または第三者の知的財産権、プライバシー権、名誉またはその他の権利または利益を侵害する行為。</li>
                        <li>他のユーザーに成りすます行為。</li>
                        <li>当サイトの運営を妨害する行為。</li>
                    </ol>
                </ol>
            </article>

            <article>
                <h2>第7条（免責事項）</h2>
                <ol>
                    <li>当サイトは、本サービスの内容について、その完全性、正確性、安全性、合法性、最新性を保証するものではありません。</li>
                    <li>当サイトは、ユーザーが本サービスを利用して生じた損害について、一切の責任を負わないものとします。</li>
                </ol>
            </article>

            <article>
                <h2>第8条（契約の解除）</h2>
                <ol>
                    <li>当サイトは、ユーザーが本規約のいずれかの条項に違反した場合、事前の通告なくして本サービスの提供を中止することができます。</li>
                    <li>前項に基づき当サイトが行った措置によりユーザーに損害が生じたとしても、当サイトは一切の責任を負わないものとします。</li>
                </ol>
            </article>

            <article>
                <h2>第9条（規約の変更）</h2>
                <ol>
                    <li>当サイトは、必要と判断した場合には、ユーザーに通知することなく本規約を変更することができます。</li>
                    <li>本規約の変更後、本サービスの利用を継続することで、ユーザーは変更に同意したものとみなされます。</li>
                </ol>
            </article>

            <article>
                <h2>第10条（準拠法及び管轄裁判所）</h2>
                <ol>
                    <li>本規約の解釈にあたっては、日本国法を準拠法とします。</li>
                    <li>本サービスに関連して発生した紛争については、東京地方裁判所を第一審の専属的管轄裁判所とします。</li>
                </ol>
            </article>
        </section>
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
