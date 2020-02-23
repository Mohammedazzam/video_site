@extends('layouts.app')


@section('title' ,$user->name)


@section('content')

    <div class="section profile-content" style="margin-top: 190px">
        <div class="container">
            <div class="owner">
                <div class="avatar">
                    <img src="/frontend/img/faces/joe-gardner-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                </div>
                <div class="name">
                    <h4 class="title">{{$user->name}}
                        <br>
                    </h4>
                    <h6 class="description">
                        {{$user->email}}
                    </h6>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6 ml-auto mr-auto text-center">
                    <btn class="btn btn-outline-default btn-round"><i class="fa fa-cog"></i> Settings</btn>
                </div>
            </div>

            <div class="row">
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
            </div>

        </div>
    </div>



@endsection
