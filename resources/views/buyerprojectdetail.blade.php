@extends('Layout.app')
@section('projectdetailbuyer')
    <!-- Header Title Start -->
    <section class="inner-header-title blank">
        <div class="container">
            <h1>Buyer Project Detail</h1>
        </div>
    </section>
    <div class="clearfix mrg-bot-5"></div>
    <!-- Header Title End -->
    <section class="inner-header-page">
        <div class="container">
            <div class="col-md-8">
                <div class="left-side-container">
                    <div class="freelance-image">
                        <a href="company-detail.html">
                            <img src="{{ asset('userimage')}}/{{$data[0]->image}}" class="img-responsive img-circle" alt=""></a></div>
                    <div class="header-details">
                        <h4>{{$post->name}}<span class="pull-right">budget ${{$post->price}}</span></h4>
                        <p>{{$post->type}}</p>
                        <ul>
                            <li><img class="flag" src="assets/img/gb.svg" alt="">{{$post->address}}</li>
                            <li><div class=" verified-action">Verified</div></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 bl-1 br-gary">
                <div class="right-side-detail">
                    <ul>
                        <li><span class="detail-info">Availability</span>Full Time<span class="available-status">Available</span></li>
                        <li><span class="detail-info">Location</span>{{$post->address}}</li>
                    </ul>

                </div>
            </div>

        </div>
    </section>
    <div class="clearfix"></div>
    <!-- Title Header End -->

    <!-- buyer Detail Start -->
    <section>
        <div class="container">

            <div class="col-md-8 col-sm-8">
                <div class="container-detail-box">

                    <div class="apply-job-header">
                        <h4>{{$post->title}}</h4>
                        <a href="#" class="cl-success"><span><i class="fa fa-building"></i>{{$post->type}}</span></a>

                    </div>

                    <div class="apply-job-detail">
                        <p>
                            {{$post->description}}
                        </p>
                    </div>




                </div>

                <!-- proposal writing -->
                <div class="container-detail-box">

                    <div class="row">
                        <div class="col-md-12">
                            <h4>Already Written Proposals</h4>
                        </div>
                    </div>

                    <div class="row">

                        <!-- prosal  -->
                        @foreach($prop as $proplist)
                            <div class="review-list">
                                <div class="review-thumb">
                                    <img src="/userimage/{{$proplist->userimage}}" class="img-responsive img-circle" alt="" />
                                </div>
                                <div class="review-detail">
                                    <h4>{{$proplist->username}}<span>{{$proplist->created_at}} ago</span></h4>
                                    <span class="re-designation">{{$proplist->usertype}}</span>
                                    <p>
                                        {{$proplist->proposal}}
                                    </p>
                                    <a href="/hire/{{$proplist->useremail}}" class="btn btn-success">
                                        Hire Him
                                    </a>
                                </div>
                            </div>

                        @endforeach






                    </div>

                </div>
            </div>

            <!-- Sidebar Start-->
            <div class="col-md-4 col-sm-4">

                <!-- Make An Offer -->
                <div class="sidebar-container">
                    <div class="sidebar-box">
                        <span class="sidebar-status">Available</span>

                        <div class="sidebar-inner-box">
                            <div class="sidebar-box-thumb">
                                <img src="{{ asset('userimage')}}/{{$data[0]->image}}" class="img-responsive img-circle" alt="" />
                            </div>
                            <div class="sidebar-box-detail">
                                <h4>{{$post->name}}</h4>
                                <span class="desination">{{$post->type}}</span>
                            </div>
                        </div>
                        <div class="sidebar-box-extra">
                            <ul>
                                <li>Phone {{$post->phone}}</li>
                                <li>email {{$post->email}}</li>
                            </ul>

                        </div>
                    </div>
                    <a href="/chatify" class="btn btn-success mrg-bot-5">Contact</a>
                    <a href="/orders/{{\Illuminate\Support\Facades\Auth::user()->email}}" class="btn btn-success mrg-bot-5">Your Orders</a>
                </div>




            </div>
            <!-- End Sidebar -->

        </div>
    </section>
@endsection
