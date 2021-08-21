@extends('Layout.app')
@section('detailprofile')
    @foreach($obj as $list)
    <section class="inner-header-page">
        <div class="container">

            <div class="col-md-8">
                <div class="left-side-container">
                    <div class="freelance-image"><a href="#"><img src="/images/{{$list->image}}" class="img-responsive img-circle" alt=""></a></div>
                    <div class="header-details">
                        <h4>{{$list->name}}<span class="pull-right">${{$list->price}}/hr</span></h4>
                        <p>{{$list->skill1}}  {{$list->skill2}}</p>
                        <ul>
                            <li><a href="single-company-profile.html"><i class="fa fa-building"></i> Mack Star</a></li>
                            <li>
                                <div class="star-rating" data-rating="4.2">
                                    <span class="fa fa-star fill"></span>
                                    <span class="fa fa-star fill"></span>
                                    <span class="fa fa-star fill"></span>
                                    <span class="fa fa-star fill"></span>
                                    <span class="fa fa-star-half fill"></span>
                                </div>
                            </li>
                            <li><img class="flag" src="assets/img/gb.svg" alt="">{{$list->location}}</li>
                            <li><div class="verified-action">Verified</div></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 bl-1 br-gary">
                <div class="right-side-detail">
                    <ul>
                        <li><span class="detail-info">Availability</span>Full Time<span class="available-status">{{$list->availability}}</span></li>
                        <li><span class="detail-info">Location</span>{{$list->location}}</li>
                        <li><span class="detail-info">Experience</span> {{$list->experience}}</li>
                        <li><span class="detail-info">Age</span>{{$list->age}}</li>
                    </ul>

                </div>
            </div>

        </div>
    </section>
    <div class="clearfix"></div>
    <!-- Title Header End -->

    <!-- Freelancer Detail Start -->
    <section>
        <div class="container">

            <div class="col-md-8 col-sm-8">
                <div class="container-detail-box">

                    <div class="apply-job-header">
                        <h4>{{$list->name}}</h4>
                        <a href="company-detail.html" class="cl-success"><span><i class="fa fa-building"></i>{{$list->type}}</span></a>
                        <span><i class="fa fa-map-marker"></i>{{$list->location}}</span>
                    </div>

                    <div class="apply-job-detail">
                        {{$list->history}}}
                              </div>

                    <div class="apply-job-detail">
                        <h5>Skills</h5>
                        <ul class="skills">
                            <li>{{$list->skill1}}</li>
                            <li>{{$list->skill2}}</li>
                            <li>{{$list->skill3}}</li>
                            <li>{{$list->skill4}}</li>
                            <li>{{$list->skill5}}</li>
                            <li>{{$list->skill6}}</li>
                        </ul>
                    </div>

                    <div class="apply-job-detail">
                        <h5>Language</h5>
                        <ul class="language">
                            <li><img class="flag" src="assets/img/gb.svg" alt="">{{$list->language}}</li>

                        </ul>
                    </div>

                    <a href="/hire/{{$list->email}}" class="btn btn-success">Hire me</a>

                </div>


            </div>

            <!-- Sidebar Start-->
            <div class="col-md-4 col-sm-4">

                <!-- Make An Offer -->
                <div class="sidebar-container">
                    <div class="sidebar-box">
                        <span class="sidebar-status">{{$list->availabiliy}}</span>
                        <h4 class="flc-rate">${{$list->price}}/hr</h4>
                        <div class="sidebar-inner-box">
                            <div class="sidebar-box-thumb">
                                <img src="/images/{{$list->image}}" class="img-responsive img-circle" alt="" />
                            </div>
                            <div class="sidebar-box-detail">
                                <h4>{{$list->name}}</h4>
                                <span class="desination">{{$list->type}}</span>
                            </div>
                        </div>
                        <div class="sidebar-box-extra">
                            <ul>
                                <li>{{$list->skill1}}</li>
                                <li>{{$list->skill2}}</li>
                                <li>{{$list->skill3}}</li>
                                <li>{{$list->skill4}}</li>
                                <li>{{$list->skill5}}</li>
                                <li>{{$list->skill6}}</li>

                            </ul>

                        </div>
                    </div>
                    <a href="/hire/{{$list->email}}" class="btn btn-sidebar bt-1 bg-success">Hire me</a>
                </div>





                <!-- Share This Job -->
                <div class="sidebar-wrapper">
                    <div class="sidebar-box-header bb-1">
                        <h4>Social Media Links</h4>
                    </div>

                    <ul class="social-share">
                        <li><a href="{{$list->facebook}}" class="fb-share">
                                <img src="{{asset('img/face.png')}}" alt="">
                            </a></li>
                        <li><a href="{{$list->twitter}}" class="tw-share">
                                <img src="{{asset('img/t.png')}}" alt="">
                            </a></li>

                        <li><a href="{{$list->instagram}}" class="in-share">
                                <img src="{{asset('img/i.png')}}" alt="">
                            </a></li>


                    </ul>
                </div>

            </div>
            <!-- End Sidebar -->

        </div>
    </section>
    @endforeach
@endsection
