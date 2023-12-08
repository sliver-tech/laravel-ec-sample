@extends('shop.base')

@section('title', 'トップ')

@section('body')

<div class="card mt-4">
    <div class="card-body text-center">
        <h1>{{ env('APP_NAME') }}へようこそ！お得な商品がてんこもりです！</h1>

    </div>
</div>

<div class="row">
    <div class="col-2"></div>
    <div class="col-8">

        <div class="card mt-4 px-4 bg-warning">
            <div class="card-body">
                <h1>【まもなく開催されるイベント】</h1>
            </div>

            <div class="card my-5">
                <div class="card-header">
                    <p class="h2">{{ $event->name }}</p>
                </div>
                <div class="card-body">
                    <p class="h6">{{ $event->description }}</p>
                </div>
            </div>
        </div>


        <div class="card mt-4 px-4 bg-danger">
            <div class="card-body text-light">
                <h1>【現在のイチオシ商品！】</h1>
            </div>

            @foreach ($products as $product)
            <div class="card my-5">
                <div class="card-header">
                    <p class="h2">商品名: {{ $product->name }}</p>
                    <p class="h5">販売者: {{ $product->company->name }}</p>
                </div>
                <div class="card-body">
                    <p class="h4">{{ $product->price }} 円</p>
                    <p class="h6">{{ $product->description }}</p>

                    <a href="{{ route('shop.purchase', ['product_id' => $product->id]) }}">
                        <button class="mt-2 btn btn-success btn-lg">購入する</button>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="card my-4  px-4 bg-info">
            <div class="card-body">
                <h1>【ピックアップ企業】</h1>
            </div>

            <div class="card my-5">
                <div class="card-header">
                    <p class="h2">{{ $company->name }}</p>
                </div>
                <div class="card-body">
                    <p class="h6">{{ $company->description }}</p>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
