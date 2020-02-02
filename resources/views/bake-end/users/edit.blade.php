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
        <form action="{{route('users.update',['id' =>$row->id])}}" method="POST">
            {{method_field('put')}}
            @include('bake-end.users.forme')

            <button type="submit" class="btn btn-primary pull-right">Update {{$moduleName}}</button>
            <div class="clearfix"></div>
        </form>
        </div>
    @endcomponent
@endsection


