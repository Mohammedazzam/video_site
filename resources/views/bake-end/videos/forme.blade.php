@csrf()
{{--{{csrf_field()}}--}}

@php $input= "name"; @endphp   <!--هيك لما بغير في الفورم بغير فقط هنا في هذا ال name -->


<div class="row">
    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Category Name</label>
            <input type="text" name="{{$input}}" value="{{isset($row)? $row->{$input}: ''}}" class="form-control @error($input) is-invalid @enderror">

            @error($input)
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
             </span>
            @enderror

        </div>
    </div>


    @php $input= "meta_keywords"; @endphp

    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Meta Keywords</label>
            <input type="text" name="{{$input}}"  value="{{isset($row)? $row->{$input}: ''}}" class="form-control @error($input) is-invalid @enderror">

            @error($input)
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
             </span>
            @enderror

        </div>
    </div>


    @php $input= "youtube"; @endphp

    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating"> Youtube url </label>
            <input type="url" name="{{$input}}"  value="{{isset($row)? $row->{$input}: ''}}" class="form-control @error($input) is-invalid @enderror">

            @error($input)
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
             </span>
            @enderror

        </div>
    </div>


    @php $input= "published"; @endphp

    <div class="col-md-6">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating"> Video Status </label>

            <select name="{{$input}}"  class="form-control @error($input) is-invalid @enderror">
                <option value="1" {{isset($row)&& $row->{$input} == 1 ? 'selected' : ''}}>published</option>
                <option value="0" {{isset($row)&& $row->{$input} == 0 ? 'selected' : ''}}>hidden</option>
            </select>

            @error($input)
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
             </span>
            @enderror

        </div>
    </div>


    @php $input= "des"; @endphp

    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Page Description</label>
            <textarea name="{{$input}}" cols="30" rows="5" class="form-control @error($input) is-invalid @enderror">{{isset($row)? $row->{$input}: ''}}</textarea>

            @error($input)
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
             </span>
            @enderror

        </div>
    </div>




    @php $input= "meta_des"; @endphp

    <div class="col-md-12">
        <div class="form-group bmd-form-group">
            <label class="bmd-label-floating">Meta Description</label>
            <textarea name="{{$input}}" cols="30" rows="2" class="form-control @error($input) is-invalid @enderror">{{isset($row)? $row->{$input}: ''}}</textarea>

            @error($input)
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
             </span>
            @enderror

        </div>
    </div>

</div>