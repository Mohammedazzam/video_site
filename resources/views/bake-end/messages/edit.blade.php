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
            @include('bake-end.'.$folderName.'.forme')
            <button type="submit" class="btn btn-primary pull-right">Update {{$moduleName}}</button>
            <div class="clearfix"></div>
    @endcomponent
@endsection


