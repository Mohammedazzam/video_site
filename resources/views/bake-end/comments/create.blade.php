<form action="{{route('comment.store')}}" method="post">
    {{csrf_field()}}
    @include('bake-end.comments.forme')
    <button type="submit" class="btn btn-primary pull-right">Add {{$moduleName}}</button>
    <div class="clearfix"></div>
</form>