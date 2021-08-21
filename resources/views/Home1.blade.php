@extends('Layout.app')
@section('content')
    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="hero-banner" data-ride="carousel" data-pause="hover" data-interval="false" >
                    <div class="hero-img image">
                        <img src="img/head.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col col-md-6 col-sm-8">
                                <div class="content">
                                    <h2>Talent?<br> Meet Opportunity.</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-banner" data-ride="carousel" data-pause="hover" data-interval="false" >
                    <div class="hero-img ">
                        <img src="img/1.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col col-md-6 col-sm-8">
                                <div class="content">
                                    <h2>Find the perfect <br>freelance services for your business.</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="hero-banner" data-ride="carousel" data-pause="hover" data-interval="false" >
                    <div class="hero-img">
                        <img src="img/2.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col col-md-6 col-sm-8">
                                <div class="content ">
                                    <h2 >Talent?<br> Meet Opportunity.</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>


    </div>
    <div class="container-fluid gr-dark">
        <div class="row no-gutters">
            <div class="col-lg-12  no-padd ">
                <div class="call-to-act-caption">
                    <h2>Hire the best freelancers for any job, online.</h2>

                </div>
            </div>
            <div class="col-lg-6 ">
                <img src="http://nouthemes.net/html/athena/img/homepage/home-2/connection-people.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <div class="call-to-act-caption">
                    <h2>Make it Real with Freelance.</h2>
                    <h3>Millions of people use freelance to turn their ideas into reality.</h3>
                    <a href="/register" class="  btn bat-call-to-act">Join Us</a>
                </div>
            </div>
        </div>
    </div>

    <div class="contianer-fluid">
        <div class="row">
            <div class="col-lg-12">
                <img src="{{asset('img/footer.png')}}" alt="">
            </div>
        </div>
    </div>

@endsection
