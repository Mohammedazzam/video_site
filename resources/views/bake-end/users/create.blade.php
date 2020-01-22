@extends('bake-end.layout.app')


@php
    $moduleName = "User";
    $pageTitle =  " Create " . $moduleName;
    $pageDes = "You Can create " . $moduleName
@endphp


@section("title")
    {{$pageTitle}}
@endsection


@section("content")

    @component('bake-end.layout.header')

        @slot('nav_title')
            {{$pageTitle}}
        @endslot


    @endcomponent

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{$pageTitle}}</h4>
                        <p class="card-category">{{$pageDes}}</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('users.store')}}" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Username</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Email address</label>
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-primary pull-right">Add {{$moduleName}}</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>


@endsection


