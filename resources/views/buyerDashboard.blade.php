@extends('Layout.app')
@section('detail')
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

          <div class="col-md-4 col-sm-4">

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
                    <a href="/orders/{{\Illuminate\Support\Facades\Auth::user()->email}}" class="btn btn-success mrg-bot-5">Your Orders</a>
                </div>




            </div>
            <!-- End Sidebar -->

        </div>
    </section>
@endsection
