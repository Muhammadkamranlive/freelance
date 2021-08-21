@extends('Layout.app')
@section('orders')
    <!-- Header Title Start -->
    <section class="inner-header-title blank">
        <div class="container">
            <h1>Your Jobs</h1>
        </div>
    </section>
    <div class="clearfix mrg-bot-5"></div>
    <!-- Header Title End -->
    <div class="container">
        <div class="row">

          @if($orders)
                @foreach($orders as $list)
                    <div class="col-lg-12">
                        <table class="table table-bordered">
                            <h1>Your Orders</h1>
                            <tr>
                                <th>Customer Name</th>
                                <th>Customer Email</th>
                                <th>Freelancer Name</th>
                                <th>Freelancer Email</th>
                                <th>Amount</th>
                                <th>title</th>
                                <th>description</th>
                            </tr>
                            <tr>
                                <td>{{$list['customerName']}}</td>
                                <td>{{$list['customerEmail']}}</td>
                                <td>{{$list['freelancerName']}}</td>
                                <td>{{$list['freelancerEmail']}}</td>
                                <td>${{$list['amount']}}</td>
                                <td>{{$list['title']}}</td>
                                <td>{{$list['description']}}</td>
                            </tr>
                        </table>
                    </div>
                @endforeach
              @endif
        </div>
    </div>

@endsection
