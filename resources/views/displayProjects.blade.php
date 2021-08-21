@extends('Layout.app')
@section('clients')
    <!-- Header Title Start -->
    <section class="inner-header-title blank">
        <div class="container">
            <h1>Jobs</h1>
        </div>
    </section>
    <div class="clearfix mrg-bot-5"></div>
    <!-- Header Title End -->
    <div class="container">
        <h2 class="text-center panel-heading">Recently Posted Projects</h2>
        <div class="row">
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
                                    <a href="/detailproject/{{$list['id']}}" class="btn btn-success">Bid Now</a>
                                </div>
                            </div>
                        </div>

                    </article>
                </div>

            @endforeach

        </div>
    </div>
@endsection
