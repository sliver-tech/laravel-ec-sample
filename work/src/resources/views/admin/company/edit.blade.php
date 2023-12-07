@extends('admin.base')

@section('title', '企業の編集')

@section('body')

@if ($company === null)
    <h1 class="mt-4">企業の新規登録</h1>
    <div class="card mb-4">
        <div class="card-body">
            このページは、企業を新規登録するページです。
        </div>
    </div>
@else
    <h1 class="mt-4">企業の編集</h1>
    <div class="card mb-4">
        <div class="card-body">
            このページは、企業の情報を修正するページです。
        </div>
    </div>
@endif


<div class="card">
    <form class="card-body" method="POST" action="{{ route('admin.company.store', ['company_id' => $company->id ?? null]) }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">企業名</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $company->name ?? null) }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">企業概要</label>
            <textarea class="form-control" id="description" name="description" rows="3"
                >{{ old('description', $company->description ?? null) }}</textarea>
        </div>


        <button type="submit" class="btn btn-inherit mr-5">
            <a href="{{ route('admin.company.index') }}">
                一覧に戻る
            </a>
        </button>
        <button type="submit" class="btn btn-primary">確定</button>
    </form>
</div>

@endsection
