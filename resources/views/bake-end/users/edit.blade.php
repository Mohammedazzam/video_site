@extends('bake-end.layout.app')


@php
    $moduleName = "User";
    $pageTitle =  " Edit ".$moduleName;
    $pageDes = "You Can edit " . $moduleName
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


