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
                  <a href="{{route('front.tags' ,['id'=>$tag->id])}}">
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

            <br> <br>

    <div class="row" id="commnets">
        <div class="col-md-12">
           <div class="card text-left">
               <div class="card-header card-header-rose">
                   @php $comments =$video->comments @endphp
                   <h5>Comments {{count($comments)}}</h5>
               </div>
                <div class="card-body">
                    @foreach($comments as $comment)
                     <div class="row">
                        <div class="col-md-8">
                            <i class="nc-icon nc-chat-33"></i> : {{$comment->user->name}} <!--هنا راح يعرضلي الي كتب الكومينت أي اسم اليوزر-->
                        </div>
                        <div class="col-md-4">
                        <span>
                            <i class="nc-icon nc-calendar-60"></i> : {{$comment->created_at}}<!--هنا راح يعرضلي وقت انشاء الكومينت-->
                        </span>
                        </div>
                     </div>
                        <p>{{$comment->comment}}</p>
                        @if(!$loop->last) <!--هذا اللوب بمعنى لو أنني مش في آخر الكومينت أظهر <hr>-->
                            <hr>
                        @endif
                    @endforeach

                </div>
           </div>
        </div>
    </div>

           </div>
    </div>
@endsection
