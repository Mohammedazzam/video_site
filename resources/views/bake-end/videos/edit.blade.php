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
        <form action="{{route($routeName.'.update',['id' =>$row])}}" method="POST" enctype="multipart/form-data">
            {{method_field('put')}}
            @include('bake-end.'.$folderName.'.forme')

            <button type="submit" class="btn btn-primary pull-right">Update {{$moduleName}}</button>
            <div class="clearfix"></div>
        </form>

        @slot('md4')
            @php $url =getYoutubeId($row->youtube) @endphp

            @if($url)
                <iframe width="250"  src="https://www.youtube.com/embed/{{$url}}" frameborder="0"  allowfullscreen></iframe>
            @endif

        @endslot

    @endcomponent
@endsection


