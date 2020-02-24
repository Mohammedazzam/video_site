@extends('bake-end.layout.app')

@section("title")
    Home Page
@endsection

@push('css')
    {{--<Style>--}}
        {{--a{--}}
            {{--color:red !important;--}}
        {{--}--}}
    {{--</Style>--}}
@endpush

@section("content")

    @component('bake-end.layout.header')

        @slot('nav_title')
            Home Page
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">content_copy</i>
                    </div>
                    <p class="card-category">Videos</p>
                    <h3 class="card-title">{{\App\Models\Video::count()}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-warning">warning</i>
                        <a href="{{route('videos.index')}}" class="warning-link">All Videos</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">store</i>
                    </div>
                    <p class="card-category">Skills</p>
                    <h3 class="card-title">{{\App\Models\Skill::count()}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <a href="{{route('skills.index')}}" class="warning-link">All Skills</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">info_outline</i>
                    </div>
                    <p class="card-category">Tags </p>
                    <h3 class="card-title">{{\App\Models\Tag::count()}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <a href="{{route('tags.index')}}" class="warning-link">All Tags</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <p class="card-category">Comments</p>
                    <h3 class="card-title">{{\App\Models\Comments::count()}}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <a href="{{route('videos.index')}}" class="warning-link">Check Videos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('js')
    {{--<script>--}}
        {{--alert("welcome")--}}
    {{--</script>--}}
@endpush