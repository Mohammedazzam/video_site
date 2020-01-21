@extends('bake-end.layout.app')


@php
    $moduleName = "Users";
    $pageTitle = $moduleName . "Control";
    $pageDes = "You Can add / edit / delete " . $moduleName
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">{{$pageTitle}}</h4>
                    <p class="card-category"> {{$pageDes}} </p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <tr><th>
                                    ID
                                </th>
                                <th>
                                    Name
                                </th>
                                
                                <th>
                                    email
                                </th>
                                <th>
                                    control
                                </th>
                            </tr></thead>
                            <tbody>

                                @foreach($rows as $row)
                                    <tr>
                                        <td>
                                            {{$row->id}}
                                        </td>
                                        <td>
                                            {{$row->name}}
                                        </td>
                                        <td>
                                            {{$row->email}}
                                        </td>
                                        <td>
                                            <a href="">Add</a>
                                            <a href="">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


