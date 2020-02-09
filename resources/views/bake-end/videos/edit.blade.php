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
                <iframe width="250"  src="https://www.youtube.com/embed/{{$url}}" style="margin-bottom: 20px" frameborder="0"  allowfullscreen></iframe>

            @endif

            <img src="{{url('uploads/'.$row->image)}}" width="250"> <!--لإظهار الصورة عند التعديل-->

        @endslot

    @endcomponent


    @component('bake-end.shared.edit', ['pageTitle' => "Comments", 'pageDes' => "Hear We Can Control Comments"])

        @include('bake-end.comments.index')
        @slot('md4')
            @include('bake-end.comments.create')
        @endslot

    @endcomponent


@endsection


