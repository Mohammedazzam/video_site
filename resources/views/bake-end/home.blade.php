@extends('bake-end.layout.app')

@section("title")
    Home Page
@endsection


@section("content")

    @component('bake-end.layout.header')

        @slot('nav_title')
            Home Page
        @endslot


    @endcomponent

    <h1>Home Page</h1>

@endsection