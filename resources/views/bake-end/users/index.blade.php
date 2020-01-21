@extends('bake-end.layout.app')


@php
    $pageTitle = "Users Control"
@endphp


@section("title")
    {{$pageTitle}}
@endsection


@section("content")

    @component('bake-end.layout.header')

        @slot('nav_title')
            {{$pageTitle}}
        @endslot


    @endcomponent

    <h1>Home Page</h1>

@endsection


