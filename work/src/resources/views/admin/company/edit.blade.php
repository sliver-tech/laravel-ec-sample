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

{{-- デバッグ用のバリデーションメッセージ表示 --}}

{{-- @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach --}}

<div class="card">
    <form class="card-body" method="POST" action="{{ route('admin.company.store', ['company_id' => $company->id ?? null]) }}">
        @csrf

        <div class="mb-3 col-md-3">
            <label for="company-name" class="form-label">企業名</label>
            <input
                type="text"
                id="company-name"
                name="company-name"
                class="form-control @error('company-name') is-invalid @enderror"
                value="{{ old('company-name', $company->name ?? null) }}"
            >

            @error('company-name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="company-description" class="form-label">企業概要</label>
            <textarea
                rows="3"
                id="company-description"
                name="company-description"
                class="form-control @error('company-description') is-invalid @enderror"
            >{{ old('company-description', $company->description ?? null) }}</textarea>

            @error('company-description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 col-md-3">
            <label for="company-status" class="form-label">企業ステータス(上場・非上場)</label>
            <select id="company-status" name="company-status" class="form-select @error('company-status') is-invalid @enderror" required="">
                <option value="上場" @if($company->status === '上場') selected @endif>上場</option>
                <option value="非上場" @if($company->status === '非上場') selected @endif>非上場</option>
            </select>

            @error('company-status')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
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
