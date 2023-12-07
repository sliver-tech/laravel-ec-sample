@extends('admin.base')

@section('title', $action . '完了')

@section('body')

<div class="card mt-4">
    <div class="card-body">
        <h1>{{ $action }}完了</h1>
        <p>企業の{{ $action }}に成功しました。</p>

        <a href="{{ route('admin.company.index') }}">
            <button type="button" class="btn btn-primary">企業一覧に戻る</button>
        </a>
    </div>
</div>

@endsection
