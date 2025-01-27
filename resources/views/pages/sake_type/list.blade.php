@extends('layouts.app')
@section('title', '顧客情報一覧')

@push('css')
<link rel="stylesheet" href="{{ asset('css/formhelper.css') }}">
@endpush

@section('content')
<!-- コンテンツ -->
<div class="container">
    @if (session('flashMsg'))
        <div class="alert alert-success mt-3 w-100 mx-auto" role="alert">
            {{session('flashMsg')}}
        </div>
    @endif
    <div class="w-100 mx-auto mt-5 text-end">
        <a href="" class="btn btn-dark"><i class="fas fa-folder-plus"></i> 新規日報登録</a>
    </div>
    <table class="table table-striped w-100 mx-auto mt-3 table-bordered">
        <tr class="table-dark">
            <th class="col-2 align-middle text-center">id</th>
            <th class="col-10 align-middle text-center">タイプ</th>
        </tr>
        @foreach($sakeTypes as $sakeType)
            <tr>
                <td class="col-2 align-middle text-center">{{ $sakeType->SKT_id }}</td>
                <td class="col-10 align-middle text-center">{{ $sakeType->SKT_name }}</td>
            </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center mt-5">
        {{ $sakeTypes->appends(request()->query())->links('components.pagenate.bottom') }}
    </div>
</div>
<!-- /コンテンツ -->
@endsection

@push('js')
    <script src="{{ asset('js/formhelper.js') }}"></script>
    <script src="{{ asset('js/report/edit.js') }}"></script>
@endpush