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

    @component('bake-end.shared.edit', ['pageTitle' => $pageTitle, 'pageDes' => $pageDes])
        <div class="card-body">
        <form action="{{route($routeName.'.update',['id' =>$row])}}" method="POST">
            {{method_field('put')}}
            @include('bake-end.'.$folderName.'.forme')

            <button type="submit" class="btn btn-primary pull-right">Update {{$moduleName}}</button>
            <div class="clearfix"></div>
        </form>
        </div>
    @endcomponent
@endsection


