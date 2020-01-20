@extends('bake-end.layout.app')

@section("title")
    Home Page
@endsection

@push('css')
    <Style>
        a{
            color:red !important;
        }
    </Style>
@endpush

@section("content")

    @component('bake-end.layout.header')

        @slot('nav_title')
            Home Page
        @endslot


    @endcomponent

    <h1>Home Page</h1>

@endsection


@push('js')
    <script>
        alert("welcome")
    </script>
@endpush