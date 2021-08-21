<?php

namespace App\Http\Controllers;

use App\Models\gig;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class gigController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function creategig(Request $request){

      if(Auth::user()->type=="seller"){
          $imageName = time().'.'.$request->image->extension();
          $request->image->move(public_path('images'), $imageName);
          //making object of gigs
          $objectGig=new gig();
          $objectGig['name']=$request->input('name');
          $objectGig['email']=$request->input('email');
          $objectGig['phone']=$request->input('phone');
          $objectGig['address']=$request->input('address');
          $objectGig['type']=$request->input('type');
          $objectGig['location']=$request->input('location');
          $objectGig['age']=$request->input('age');
          $objectGig['availability']=$request->input('availability');
          $objectGig['experience']=$request->input('experience');
          $objectGig['language']=$request->input('language');
          $objectGig['history']=$request->input('history');
          $objectGig['skill1']=$request->input('skill1');
          $objectGig['skill2']=$request->input('skill2');
          $objectGig['skill3']=$request->input('skill3');
          $objectGig['skill4']=$request->input('skill4');
          $objectGig['skill5']=$request->input('skill5');
          $objectGig['skill6']=$request->input('skill6');
          $objectGig['price']=$request->input('price');
          $objectGig['company']=$request->input('company');
          $objectGig['instagram']=$request->input('instagram');
          $objectGig['facebook']=$request->input('facebook');
          $objectGig['twitter']=$request->input('twitter');
          $objectGig['image']=$imageName;
          $objectGig->save();
          return redirect('/cprofile');
      }
      return  redirect("/");
    }


    public  function index(){
        $obj=gig::all();
        return view ("createprofile",compact('obj',$obj));
    }
}
