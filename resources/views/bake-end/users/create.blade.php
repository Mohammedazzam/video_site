@extends('bake-end.layout.app')



@section("title")
    {{$pageTitle}}
@endsection


@section("content")

    @component('bake-end.layout.header')

        @slot('nav_title')
            {{$pageTitle}}
        @endslot


    @endcomponent


    @component('bake-end.shared.create',['pageTitle' => $pageTitle, 'pageDes' => $pageDes])

        <form action="{{route($routeName.'.store')}}" method="POST">

            @include('bake-end.'.$folderName.'.forme')

            <button type="submit" class="btn btn-primary pull-right">Add {{$moduleName}}</button>
            <div class="clearfix"></div>
        </form>

    @endcomponent

@endsection


