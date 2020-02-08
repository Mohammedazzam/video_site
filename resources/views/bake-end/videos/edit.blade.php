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
        <form action="{{route($routeName.'.update',['id' =>$row])}}" method="POST">
            {{method_field('put')}}
            @include('bake-end.'.$folderName.'.forme')

            <button type="submit" class="btn btn-primary pull-right">Update {{$moduleName}}</button>
            <div class="clearfix"></div>
        </form>
        </div>
    @endcomponent
    <iframe width="560" height="315" src="https://www.youtube.com/embed/FkUr2hBlkVQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
@endsection


