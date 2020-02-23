<div class="row">

    <form action="{{route('profile.update')}}" method="post">
        {{csrf_field()}}

    @php $input= "name"; @endphp   <!--هيك لما بغير في الفورم بغير فقط هنا في هذا ال name -->
        <div class="col-md-6">
            <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Username</label>
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
                <label class="bmd-label-floating">Email address</label>
                <input type="email" name="{{$input}}"  value="{{isset($row)? $row->{$input}: ''}}" class="form-control @error($input) is-invalid @enderror">

                @error('email')
                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                @enderror

            </div>
        </div>

        @php $input= "password"; @endphp

        <div class="col-md-6">
            <div class="form-group bmd-form-group">
                <label class="bmd-label-floating">Password</label>
                <input type="password" name="{{$input}}" class="form-control @error($input) is-invalid @enderror">

                @error($input)
                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                @enderror

            </div>
        </div>
    </form>
</div>
