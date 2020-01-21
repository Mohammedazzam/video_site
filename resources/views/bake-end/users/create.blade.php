@extends('bake-end.layout.app')


@php
    $moduleName = "User";
    $pageTitle =  " Create " . $moduleName;
    $pageDes = "You Can create " . $moduleName
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


@endsection


