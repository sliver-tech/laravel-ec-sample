@extends('shop.base')

@section('title', 'イベント一覧')

@section('body')

    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            @foreach ($events as $event)
            <div class="card my-5">
                <div class="card-header">
                    <p class="h2">{{ $event->name }}</p>
                </div>
                <div class="card-body">
                    <p class="h4">開催日: {{ $event->date }}</p>
                    <p class="h6">{{ $event->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
