<?php

namespace App\Http\Controllers;

use App\Models\gig;
use App\Models\payment;
use App\Models\project;
use App\Models\proposal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class projectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public  function createProject(Request $request)
    {
        if (Auth::user()->type=="buyer"){
            $objectProject= new project();
            $objectProject['name']=$request->input('name');
            $objectProject['email']=$request->input('email');
            $objectProject['phone']=$request->input('phone');
            $objectProject['address']=$request->input('address');
            $objectProject['type']=$request->input('type');
            $objectProject['price']=$request->input('price');
            $objectProject['title']=$request->input('title');
            $objectProject['description']=$request->input('description');
            $objectProject->save();
            return redirect('/createproject');
        }
        return redirect('/');
    }
    public function writeproposal(Request $request){
        if(Auth::user()->type=="seller"){
            $obj=new proposal();
            $obj['userid']=$request->input('userid');
            $obj['useremail']=$request->input('useremail');
            $obj['proposal']=$request->input('proposal');
            $obj->save();
            return redirect("/projects");
        }
        return redirect("/");
    }
    public function DisplayProjects(){
        $projectArray=project::all();
        foreach ($projectArray as $key=>$value){
            $data = User::where('email','=',$value->email)->get('image') ;
            $projectArray[$key]->userimage = $data[0]->image;
        }
        return view('projectbuyers',compact('projectArray',$projectArray));
    }
    public function BuyerDashboard($id){
        $post = project::find($id);
        //fetching user
        $data = User::where('email','=',$post->email)->get() ;
        //proposal display
        $prop= proposal::where('userid','=',$id)->get() ;
        if ($prop->count()){
            foreach($prop as $key => $value){
                $datauser = User::where('email','=',$value->useremail)->get(['image','name','type']) ;
                $prop[$key]->userimage = $datauser[0]->image;
                $prop[$key]->username = $datauser[0]->name;
                $prop[$key]->usertype=$datauser[0]->type;

            }
        }


        return view('buyerprojectdetail',compact('data',$data,'post',$post,'prop',$prop));

    }

    public function hire($id)
    {
      if (Auth::user()->type=="buyer"){
          $data=gig::where("email",'=',$id)->get();
          return view('hire',compact('data',$data));
      }
      return redirect("/");
    }
    public function ordersDispaly($id)
    {
        $orders=payment::where('customerEmail','=',$id)->get();
        return view('orders',compact('orders',$orders));
    }

    public function profiledelete($id){
        if(Auth::user()->type=="seller"){
            gig::destroy($id);
            return redirect('/');
        }

        return redirect('/');

    }
    public function displayGigs(){
        $obj=gig::all();
        return view('freelancer',compact('obj',$obj));
    }
    public function updateprofile($id){
      if (Auth::user()->type=="seller"){
          $obj=gig::where("id",$id)->get();
          return view('update',compact('obj',$obj));
      }
      return  redirect("/");
    }


    public function updated(Request $request,$id)
    {
        if($request->image){
            $this->validate($request, [
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);
            $imageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('images'), $imageName);

        }


        gig::where('id',$id)->update([
            "name"=>$request->input('name'),
            "email"=>$request->input('email'),
            "phone"=>$request->input('phone'),
            "address"=>$request->input('address'),
            "type"=>$request->input('type'),
            "location"=>$request->input('location'),
            "age"=>$request->input('age'),
            "experience"=>$request->input('experience'),
            "language"=>$request->input('language'),
            "availability"=>$request->input('availability'),
            "history"=>$request->input('history'),
            "skill1"=>$request->input('skill1'),
            "skill2"=>$request->input('skill2'),
            "skill3"=>$request->input('skill3'),
            "skill4"=>$request->input('skill4'),
            "skill5"=>$request->input('skill5'),
            "skill6"=>$request->input('skill6'),
            "price"=>$request->input('price'),
            "company"=>$request->input('company'),
            "facebook"=>$request->input('facebook'),
            "twitter"=>$request->input('twitter'),
            "instagram"=>$request->input('instagram'),
            "image"=>$imageName,
        ]);

        return redirect('/');

      }
      public function detailprofile($id)
      {
           $obj=gig::where('id',$id)->get();
           return view ("detailprofile",compact('obj',$obj));
      }
}
