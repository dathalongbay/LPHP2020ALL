@extends('codebase.layouts.main')

@section('title', 'Demo title codbase')

@section('content')
    <p>Nội dung chính của trang web 1.</p>
    <p>Nội dung chính của trang web 2.</p>
    <p>Nội dung chính của trang web 3.</p>
@endsection


@section('sidebar')
    @parent

    <p>Đây là nội dung thêm vào sau section sidebar của layout</p>
@endsection
