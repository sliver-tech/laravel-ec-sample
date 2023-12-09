@extends('admin.base')

@section('title', 'ユーザ一覧')

@section('body')
<h1 class="mt-4">ユーザー一覧</h1>
<div class="card mb-4">
    <div class="card-body">
        このページは、ユーザーを確認したり、削除することができるページです。
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        ユーザー一覧
    </div>
    <div class="card-body">
        <table id="datatablesSimple" class="table table-striped">
            <thead>
                <tr>
                    <th>ユーザー名</th>
                    <th>メールアドレス</th>
                </tr>
            </thead>

            <tbody class="table-group-divider">
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    @if ($user->id != Auth::user()->id)
                    <td><a href="{{ route('admin.user.delete', ['user_id' => $user->id]) }}"><button type="button" class="btn btn-danger">削除</button></a></td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

