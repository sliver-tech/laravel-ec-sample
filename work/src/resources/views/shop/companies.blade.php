@extends('shop.base')

@section('title', '企業一覧')

@section('body')

    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            @foreach ($companies as $company)
            <div class="card my-5">
                <div class="card-header">
                    <p class="h2">{{ $company->name }}</p>
                </div>
                <div class="card-body">
                    <p class="h6">{{ $company->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
