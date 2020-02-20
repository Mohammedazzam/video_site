@extends('layouts.app')

@section('title','home')

@section('content')
    <div class="page-header section-dark" style="background-image: url('/frontend/img/antoine-barres.jpg')">
        <div class="filter"></div>
        <div class="content-center">
            <div class="container">
                <div class="title-brand">
                    <h1 class="presentation-title">Show YouTobe</h1>
                    <div class="fog-low">
                        <img src="/frontend/img/fog-low.png" alt="">
                    </div>
                    <div class="fog-low right">
                        <img src="/frontend/img/fog-low.png" alt="">
                    </div>
                </div>
                <h2 class="presentation-subtitle text-center">Learn Programing </h2>
            </div>
        </div>
        <div class="moving-clouds" style="background-image: url('/frontend/img/clouds.png'); "></div>

    </div>

    <div class="section landing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="text-center">Keep in touch?</h2>
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="nc-icon nc-single-02"></i>
                      </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="nc-icon nc-email-85"></i>
                      </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <label>Message</label>
                        <textarea class="form-control" rows="4" placeholder="Tell us your thoughts and feelings..."></textarea>
                        <div class="row">
                            <div class="col-md-4 ml-auto mr-auto">
                                <button class="btn btn-danger btn-lg btn-fill">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

