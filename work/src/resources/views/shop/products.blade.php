@extends('shop.base')

@section('title', '商品一覧')

@section('body')

<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
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
</div>

@endsection
