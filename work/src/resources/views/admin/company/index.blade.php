@extends('admin.base')

@section('title', '企業管理')

@section('body')
<h1 class="mt-4">企業管理</h1>
<div class="card mb-4">
    <div class="card-body">
        このページは、企業の情報を確認したり、新規登録・編集・削除することができるページです。
    </div>
</div>

<div class="mb-4">
    <a href="{{ route('admin.company.edit') }}">
        <button type="button" class="btn btn-primary">企業を新規作成</button>
    </a>
</div>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        企業一覧
    </div>
    <div class="card-body">
        <table id="datatablesSimple" class="table table-striped">
            <thead>
                <tr>
                    <th>企業名</th>
                    <th>企業概要</th>
                </tr>
            </thead>

            <tbody class="table-group-divider">
                @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->description }}</td>
                    <td><a href="{{ route('admin.company.edit', ['company_id' => $company->id]) }}">
                        <button type="button" class="btn btn-success">編集</button>
                    </a></td>
                    <td><a href="{{ route('admin.company.delete', ['company_id' => $company->id]) }}">
                        <button type="button" class="btn btn-danger">削除</button>
                    </a></td>
                </tr>
                @endforeach
            </tbody>

            <tfoot class="table-group-divider">
                <tr>
                    <th>企業名</th>
                    <th>企業概要</th>
                </tr>
            </tfoot>

        </table>
    </div>
</div>
@endsection

