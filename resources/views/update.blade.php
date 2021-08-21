@extends('Layout.app')
@section('update')
    <!-- Header Title Start -->
    <section class="inner-header-title blank">
        <div class="container">
            <h1>Update profile Gig</h1>
        </div>
    </section>
    <div class="clearfix mrg-bot-5"></div>
    <!-- Header Title End -->


    <!-- Basic Full Detail Form Start -->
    <section class="full-detail">
        <div class="container">
            @foreach($obj as $list)
            <div class="row bottom-mrg extra-mrg">
                <form method="post"  enctype="multipart/form-data" action="/updated/{{$list->id}}" >
                    @csrf
                    <div class="row bottom-mrg extra-mrg">
                        <h2 class="detail-title">Profile Information</h2>
                        <div class="col-md-6 col-sm-6">
                            <div class="input-group">
                                <input type="text" class="form-control"  placeholder="Name" name="name" value="{{$list->name}}">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="input-group">
                                <input type="text" name="email" readonly class="form-control" placeholder="Your Email" value="{{$list->email}}">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="input-group">
                                <input type="text" name="type" class="form-control" readonly value="{{$list->type}}">
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="input-group">
                                <input type="text"  class="form-control" name="address" placeholder="Location,e.g. London Quel Mark" value="{{$list->address}}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="number"  class="form-control" name="phone" value="{{$list->phone}}">
                        </div>

                    </div>
                    <div class="row bottom-mrg extra-mrg">
                        <h2 class="detail-title">Personal & Company Information</h2>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <input class="form-control" placeholder="Rate Per Hour" value="{{$list->price}}" name="price" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input class="form-control" placeholder="Country" value="{{$list->location}}" name="location" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" name="age"  value="{{$list->age}}" placeholder="your age" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="">Availability</label>
                                <select class="form-control" name="availability"   required>
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
                                <input type="text" value="{{$list->experience}}" class="form-control" placeholder="Experience in years" name="experience" required>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                <input type="text" class="form-control" name="language" value="{{$list->language}}" placeholder="Languages you Know" required>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="">Your Work History</label>
                                <textarea name="history" class="form-control" id=""   rows="10" required>{{$list->history}}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                <input type="text" name="company" value="{{$list->company}}" class="form-control" placeholder="Your company Name" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="">Your Profile images</label>
                                <input type="file" name="image" class="form-control"   required>
                                <img src="{{asset('images')}}/{{$list->image}}" style="height: 150px; width: 150px">
                            </div>
                        </div>



                    </div>


                    <div class="row bottom-mrg extra-mrg">
                        <h2 class="detail-title">Social Profile</h2>

                        <div class="col-md-6 col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                <input type="text" class="form-control" value="{{$list->facebook}}" name="facebook" placeholder="Profile Link" required>
                            </div>
                        </div>



                        <div class="col-md-6 col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                <input type="text" class="form-control" value="{{$list->twitter}}" name="twitter" placeholder="Profile Link" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                                <input type="text" class="form-control" value="{{$list->instagram}}" name="instagram" placeholder="Profile Link" required>
                            </div>
                        </div>

                    </div>
                    <div class="row bottom-mrg extra-mrg">
                        <h2 class="detail-title">Add Skills</h2>

                        <div class="col-md-6 col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fas fa-tasks"></i></span>
                                <input type="text" class="form-control" value="{{$list->skill1}}" name="skill1" placeholder="e.g web designer" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fas fa-tasks"></i></span>
                                <input type="text" class="form-control" value="{{$list->skill2}}" name="skill2" placeholder="e.g web designer" required>
                            </div>
                        </div>


                        <div class="col-md-6 col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fas fa-tasks"></i></span>
                                <input type="text" class="form-control"  value="{{$list->skill3}}"name="skill3" placeholder="e.g web designer" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fas fa-tasks"></i></span>
                                <input type="text" class="form-control" value="{{$list->skill4}}" name="skill4" placeholder="e.g web designer" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fas fa-tasks"></i></span>
                                <input type="text" class="form-control" value="{{$list->skill5}}" name="skill5" placeholder="e.g web designer" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fas fa-tasks"></i></span>
                                <input type="text" class="form-control" value="{{$list->skill6}}" name="skill6" placeholder="e.g web designer" required>
                            </div>
                        </div>



                    </div>
                    <div class="col-lg-12 text-center">
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Update Gig Information">
                        </div>
                    </div>
                </form>
            </div>

            @endforeach


        </div>
    </section>
@endsection
