@extends('Layout.app')
@section('project')
    <!-- Header Title Start -->
    <section class="inner-header-title blank">
        <div class="container">
            <h1>Create Job Project</h1>
        </div>
    </section>
    <div class="clearfix mrg-bot-5"></div>
    <!-- Header Title End -->
    <section class="full-detail">
        <div class="container">

            <div class="row bottom-mrg extra-mrg">
                <form method="post"   action="/createJob" >
                    @csrf
                    <div class="row bottom-mrg extra-mrg">
                        <h2 class="detail-title">Profile Information</h2>
                        <div class="col-md-6 col-sm-6">
                            <div class="input-group">
                                <input type="text" class="form-control" readonly  placeholder="Name" name="name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="input-group">
                                <input type="text" name="email" readonly class="form-control" placeholder="Your Email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="input-group">
                                <input type="text" name="type" class="form-control" readonly value="{{\Illuminate\Support\Facades\Auth::user()->type}}">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="input-group">
                                <input type="text" readonly class="form-control" name="address" placeholder="Location,e.g. London Quel Mark" value="{{\Illuminate\Support\Facades\Auth::user()->address}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="number" readonly class="form-control" name="phone" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}">
                        </div>

                    </div>
                    <div class="row bottom-mrg extra-mrg">
                        <h2 class="detail-title">Project Information</h2>

                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Project title" name="title" required>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Project budget" name="price" required>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="">Project Description</label>
                                <textarea name="description" class="form-control" id=""  rows="20" required></textarea>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-12 text-center">
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Post Project Information">
                        </div>
                    </div>
                </form>
            </div>




        </div>
    </section>
@endsection
