@extends('layouts.app')


@section('title' ,$video->name)


@section('content')
    <div class="section section-buttons">
        <div class="container">
            <div class="title">
                <h1>{{$video->name}}</h1>
            </div>


    <div class="row">
        <div class="col-md-12">
            @php $url =getYoutubeId($video->youtube) @endphp
            @if($url)
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/{{$url}}" style="margin-bottom: 20px" frameborder="0"  allowfullscreen></iframe>

            @endif
        </div>

    </div>


    <div class="row">
        <div class="col-md-12">
            <p>
                {{$video->user->name}}
            </p>

            <p>
                {{$video->created_at}}
            </p>

            <p>
                {{$video->des}}
            </p>

            @foreach($video->tags as $tag)
                    <span class="badge badge-pill badge-primary">{{ $tag->name }}</span>
            @endforeach


        </div>
    </div>

        </div>
    </div>
@endsection
