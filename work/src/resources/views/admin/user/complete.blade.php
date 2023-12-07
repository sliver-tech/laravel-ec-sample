@extends('admin.base')

@section('title', '削除完了')

@section('body')

<div class="card mt-4">
    <div class="card-body">
        <h1>削除完了</h1>
        <p>ユーザーの削除に成功しました。</p>

        <a href="{{ route('admin.user.index') }}">
            <button type="button" class="btn btn-primary">ユーザー一覧に戻る</button>
        </a>
    </div>
</div>

@endsection
