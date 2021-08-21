@extends('Layout.app')
@section('profile')
    <!-- Header Title Start -->
    <section class="inner-header-title blank">
        <div class="container">
            <h1>Create Profile</h1>
        </div>
    </section>
    <div class="clearfix mrg-bot-5"></div>
    <!-- Header Title End -->


    <!-- Basic Full Detail Form Start -->
    @foreach($obj as $list)
    @auth
   @if(\Illuminate\Support\Facades\Auth::user()->email==$list->email || \Illuminate\Support\Facades\Auth::user()->type =="buyer")
       <div class="container padd-l-10">
           <h3 class="text-center">Your profile is Already completed</h3>
       </div>
   @endif
    @if(\Illuminate\Support\Facades\Auth::user()->email!=$list->email && \Illuminate\Support\Facades\Auth::user()->type!="buyer")
        <section class="full-detail">
            <div class="container">
                <div class="row bottom-mrg extra-mrg">
                    <form method="post"  enctype="multipart/form-data" action="/createprofile" >
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
                            <h2 class="detail-title">Personal & Company Information</h2>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Rate Per Hour" name="price" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Country" name="location" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="age" placeholder="your age" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Availability</label>
                                    <select class="form-control" name="availability"  required>
                                        <option value="">choose option</option>
                                        <option value="full time">full time</option>
                                        <option value="part time">part time</option>
                                        <option value="freelance">freelance</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-flag"></i></span>
                                    <input type="text" class="form-control" placeholder="Experience in years" name="experience" required>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                    <input type="text" class="form-control" name="language" placeholder="Languages you Know" required>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="">Your Work History</label>
                                    <textarea name="history" class="form-control" id=""  rows="10" required></textarea>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                    <input type="text" name="company" class="form-control" placeholder="Your company Name" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="">Your Profile</label>
                                    <input type="file" name="image" class="form-control" required>
                                </div>
                            </div>



                        </div>


                        <div class="row bottom-mrg extra-mrg">
                            <h2 class="detail-title">Social Profile</h2>

                            <div class="col-md-6 col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                    <input type="text" class="form-control" name="facebook" placeholder="Profile Link" required>
                                </div>
                            </div>



                            <div class="col-md-6 col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                    <input type="text" class="form-control" name="twitter" placeholder="Profile Link" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                                    <input type="text" class="form-control" name="instagram" placeholder="Profile Link" required>
                                </div>
                            </div>

                        </div>
                        <div class="row bottom-mrg extra-mrg">
                            <h2 class="detail-title">Add Skills</h2>

                            <div class="col-md-6 col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-tasks"></i></span>
                                    <input type="text" class="form-control" name="skill1" placeholder="e.g web designer" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-tasks"></i></span>
                                    <input type="text" class="form-control" name="skill2" placeholder="e.g web designer" required>
                                </div>
                            </div>


                            <div class="col-md-6 col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-tasks"></i></span>
                                    <input type="text" class="form-control" name="skill3" placeholder="e.g web designer" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-tasks"></i></span>
                                    <input type="text" class="form-control" name="skill4" placeholder="e.g web designer" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-tasks"></i></span>
                                    <input type="text" class="form-control" name="skill5" placeholder="e.g web designer" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fas fa-tasks"></i></span>
                                    <input type="text" class="form-control" name="skill6" placeholder="e.g web designer" required>
                                </div>
                            </div>



                        </div>
                        <div class="col-lg-12 text-center">
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Save Gig Information">
                            </div>
                        </div>
                    </form>
                </div>




            </div>
        </section>
        @endif
    @endauth
    @endforeach
@endsection
