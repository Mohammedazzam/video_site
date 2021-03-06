@csrf()
{{--{{csrf_field()}}--}}

@php $input= "name"; @endphp   <!--هيك لما بغير في الفورم بغير فقط هنا في هذا ال name -->


<div class="row">
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Name</label>
            <input type="text" name="{{$input}}" value="{{isset($row)? $row->{$input}: ''}}" class="form-control @error($input) is-invalid @enderror">

            @error($input)
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
             </span>
            @enderror

        </div>
    </div>


    @php $input= "email"; @endphp

    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Email</label>
            <input type="email" name="{{$input}}"  value="{{isset($row)? $row->{$input}: ''}}" class="form-control @error($input) is-invalid @enderror">

            @error($input)
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
             </span>
            @enderror

        </div>
    </div>

</div>


    @php $input= "message"; @endphp
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Message</label>
            <textarea name="{{$input}}" cols="30" rows="5" class="form-control @error($input) is-invalid @enderror">{{isset($row)? $row->{$input}: ''}}</textarea>

            @error($input)
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
             </span>
            @enderror

        </div>
    </div>


</hr>

<h4>Replay On Message</h4>
<br>
<form action="{{route('message.replay' ,['id'=>$row->id])}}" method="post">
    {{csrf_field()}}
    @php $input= "message"; @endphp
    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Message</label>
            <textarea name="{{$input}}" cols="30" rows="5" class="form-control @error($input) is-invalid @enderror"></textarea>

            @error($input)
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
             </span>
            @enderror

        </div>
    </div>
    <button type="submit" class="btn btn-primary pull-right">Replay Message</button>
    <div class="clearfix"></div>
</form>
