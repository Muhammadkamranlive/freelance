<?php

namespace App\Http\Controllers;

use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe;
use Session;
class StripeControlller extends Controller
{
    //
    public function stripePyament(Request $req)
    {
        //print_r($req->all()); die();
        $this->validate($req, [
            'price'    =>  'required',


        ]);

        if (Auth::user()->type=="buyer"){
            //storing payment infromation in sql
            $obj= new payment();
            $obj['customerName']=$req->input('customer');
            $obj['customerEmail']=$req->input('email');
            $obj['customerType']=$req->input('type');
            $obj['freelancerName']=$req->input('freelancer');
            $obj['freelancerType']=$req->input('freelancertype');
            $obj['freelancerEmail']=$req->input('freelanceremail');
            $obj['amount']=$req->input('price')*$req->input('fprice');
            $obj['title']=$req->input('title');
            $obj['description']=$req->input('description');

            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $data = Stripe\Charge::create([
                "amount"=>$req->get('price')*$req->input('fprice')*100,
                "currency"=>"usd",
                "source"=>$req->stripeToken,
                "description"=>$req->get('customer'),
                "metadata"=>[
                    "Customeremail"=>$req->get('email'),
                    "freelanceremail"=>$req->get('freelanceremail'),
                    "freelancername"=>$req->get('freelancer'),
                ]

            ]);
            $obj->save();
            // echo "<pre>"; print_r($data); die();

            Session::flash("success","Payment successfully!");

            return back();
        }
        return  redirect("/");
    }
}
