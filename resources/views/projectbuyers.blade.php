@extends('Layout.app')
@section('buyer')
    <!-- Header Title Start -->
    <section class="inner-header-title blank">
        <div class="container">
            <h1>Jobs</h1>
        </div>
    </section>
    <div class="clearfix mrg-bot-5"></div>
    <!-- Header Title End -->
    <div class="container">
        <h4 class="text-left panel-heading">Posted by You</h4>
        <div class="row">
            <div class="col-md-8">
                @foreach($projectArray as $list)
                    <div class="item-click">
                        <article>
                            <div class="brows-job-list">
                                <div class="col-md-6 col-sm-6">
                                    <div class="item-fl-box">
                                        <div class="brows-job-company-img">
                                            <a href="job-detail.html"><img src="userimage/{{$list->userimage}}" class="img-responsive" alt="" /></a>
                                        </div>
                                        <div class="brows-job-position">
                                            <h3><a href="job-apply-detail.html">{{$list['title']}}</a></h3>
                                            <p>
                                                <span>{{$list['name']}}</span><span class="brows-job-sallery">
                                                <i class="fa fa-money"></i>${{$list['price']}}</span>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="brows-job-location">
                                        <p><i class="fa fa-map-marker"></i>{{$list['address']}}</p>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <div class="brows-job-link">
                                        <a href="/projectbuyer/{{$list['id']}}" class="btn btn-success">View</a>
                                    </div>
                                </div>
                            </div>

                        </article>
                    </div>

                @endforeach
            </div>
            <div class="col-md-4">
                <div class="sidebar-container">
                    <div class="sidebar-box">
                        <span class="sidebar-status">Available</span>

                        <div class="sidebar-inner-box">
                            <div class="sidebar-box-thumb">
                                <img src="{{ asset('userimage')}}/{{\Illuminate\Support\Facades\Auth::user()->image}}" class="img-responsive img-circle" alt="" />
                            </div>
                            <div class="sidebar-box-detail">
                                <h4>{{\Illuminate\Support\Facades\Auth::user()->name}}</h4>
                                <span class="desination">{{\Illuminate\Support\Facades\Auth::user()->type}}</span>
                            </div>
                        </div>
                        <div class="sidebar-box-extra">
                            <ul>
                                <li>Phone {{\Illuminate\Support\Facades\Auth::user()->phone}}</li>
                                <li>email {{\Illuminate\Support\Facades\Auth::user()->email}}</li>
                            </ul>

                        </div>
                    </div>
                    <a href="/orders/{{\Illuminate\Support\Facades\Auth::user()->email}}" class="btn btn-success mrg-bot-5">Your Orders</a>
                </div>
            </div>
        </div>
    </div>
@endsection
