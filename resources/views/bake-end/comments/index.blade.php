<table class="table">

    <tbody>

    @foreach($comments as $comment)
        <tr>
            <td>
                <small>{{$comment->user->name}}</small>
                <p>{{$comment->comment}}</p>
                <small>{{$comment->created_at}}</small>
            </td>
            <td class="td-actions text-right">
                <button type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit Task">
                    <i class="material-icons">edit</i>
                </button>
                <a href="{{route('comment.delete' , ['id' =>$comment->id])}}" rel="tooltip" class="btn btn-white btn-link btn-sm" data-original-title="Remove">
                    <i class="material-icons">close</i>
                </a>
            </td>
        </tr>
    @endforeach

    </tbody>

</table>