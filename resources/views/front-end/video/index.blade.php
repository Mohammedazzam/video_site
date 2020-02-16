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


            <p>
                <a href="{{route('front.category', ['id' => $video->cat->id ])}}">
                    {{$video->cat->name}}
                </a>
            </p>


            <p>
            @foreach($video->tags as $tag)
                  <a href="{{route('front.skill' ,['id'=>$tag->id])}}">
                    <span class="badge badge-pill badge-primary">{{ $tag->name }}</span>
                  </a>
            @endforeach
            </p>

            <p>
            @foreach($video->skills as $skill)
                 <a href="{{route('front.skill' ,['id'=>$skill->id])}}">
                    <span class="badge badge-pill badge-info">{{ $skill->name }}</span>
                 </a>
                @endforeach
            </p>

        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            @foreach($video->comments as $comment)
                {{$comment->comment}} <br>
            @endforeach
        </div>
    </div>
        </div>
    </div>
@endsection