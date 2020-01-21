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
                    <div class="row">

                        <div class="col-md-8">
                            <h4 class="card-title ">{{$pageTitle}}</h4>
                            <p class="card-category"> {{$pageDes}} </p>
                        </div>

                         <div class="col-md-4 text-right" >
                             <a href="#pablo" class="btn btn-white btn-round">
                                 Add {{$moduleName}}
                             </a>
                         </div>
                    </div>


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
                                <th class="text-right">
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
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit {{$moduleName}}" aria-describedby="tooltip814720">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove {{$moduleName}}">
                                                <i class="material-icons">close</i>
                                            </button>
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


