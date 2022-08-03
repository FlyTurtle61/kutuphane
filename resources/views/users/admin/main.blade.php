@extends("layouts.master-page")

@section("title")
    {{$title}}
@endsection

@section("sidebar")
    @include("users.admin.sidebar")
@endsection

@section("page_title")
    {{$page_title}}
@endsection

@section("content")
    {!! $content !!}
@endsection