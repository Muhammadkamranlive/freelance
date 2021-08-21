@extends('Layout.app')
@section('search')
    <!-- Header Title Start -->
    <section class="inner-header-title blank">
        <div class="container">
            <h1>Search Results</h1>
        </div>
    </section>
    <div class="clearfix mrg-bot-5"></div>
    <!-- Header Title End -->
    <div class="container">

        <div class="row">
            @foreach($obj as $list)
                <div class="col-lg-4 mb-4">
                    <div class="grid-slide-box">
                        <div class="top-candidate-wrap style-2">
                            <div class="top-candidate-box">
                                <span class="tpc-status">{{$list->availability}}</span>
                                <h4 class="flc-rate">${{$list['price']}}/hr</h4>
                                <div class="tp-candidate-inner-box">
                                    <div class="top-candidate-box-thumb">
                                        <img src="/images/{{$list->image}}" class="img-responsive img-circle" alt="" />
                                    </div>
                                    <div class="top-candidate-box-detail">
                                        <h4>{{$list->name}}</h4>
                                        <span class="location">{{$list->location}}</span>
                                    </div>
                                    <div class="rattings">
                                        <i class="fa fa-star fill"></i>
                                        <i class="fa fa-star fill"></i>
                                        <i class="fa fa-star fill"></i>
                                        <i class="fa fa-star-half fill"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="top-candidate-box-extra">

                                    <ul>
                                        <li>{{$list->skill1}}</li>
                                        <li>{{$list->skill2}}</li>
                                        <li>{{$list->skill3}}</li>
                                        <li>{{$list->skill4}}</li>
                                        <li>{{$list->skill5}}</li>
                                        <li>{{$list->skill6}}</li>
                                        <li class="more-skill bg-primary">+3</li>
                                    </ul>
                                </div>
                                <a href="/delete/{{$list->id}}" class="btn btn-candidate-two bg-default">Delete</a>
                                <a href="/update/{{$list->id}}" class="btn btn-candidate-two bg-info">Update</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
