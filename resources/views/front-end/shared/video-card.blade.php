<div class="card" style="width: 20rem;">
    <img class="card-img-top" src="{{url('uploads/'.$video->image)}}" alt="Card image cap" style="max-height: 100px"> <!--هذه خاصة لرفع الصورة-->
    <div class="card-body">
        <p class="card-text">
            {{$video->name}}
        </p>
        <small>{{$video->created_at}}</small>
    </div>
</div>