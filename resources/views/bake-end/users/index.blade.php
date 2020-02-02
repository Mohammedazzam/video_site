@extends('bake-end.layout.app')


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
                             <a href="{{route('users.create')}}" class="btn btn-white btn-round">
                                 Add {{$sModuleName}}
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
                                            <a href="{{route('users.edit', ['id'=> $row])}}" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit {{$sModuleName}}" aria-describedby="tooltip814720">
                                                <i class="material-icons">edit</i>
                                            </a>

                                            <form action="{{route('users.destroy',['id'=> $row])}}" method="post">
                                                {{csrf_field()}}
                                                    {{method_field('delete')}}
                                                <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove {{$sModuleName}}">
                                                    <i class="material-icons">close</i>
                                                </button>

                                            </form>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {!! $rows->links() !!} <!--هذه خاصة لل pagination -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


