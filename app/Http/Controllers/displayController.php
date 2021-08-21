<?php

namespace App\Http\Controllers;

use App\Models\gig;
use App\Models\project;
use App\Models\proposal;
use App\Models\User;
use Illuminate\Http\Request;

class displayController extends Controller
{
    //
    public function DisplayProjects(){
        $projectArray=project::all();
        foreach ($projectArray as $key=>$value){
            $data = User::where('email','=',$value->email)->get('image') ;
            $projectArray[$key]->userimage = $data[0]->image;
        }
        return view('displayProjects',compact('projectArray',$projectArray));
    }
    public function detailProject($id){
        $post = project::find($id);
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


        return view('detailProject',compact('data',$data,'post',$post,'prop',$prop));
    }
    public  function freelancer(){
        $obj=gig::all();
        return view('index',compact('obj',$obj));
    }
    public function search(Request $request){
        $obj = gig::where('skill1','LIKE','%'.$request->input('search').'%')->orwhere('skill2','LIKE','%'.$request->input('search').'%')->orwhere('skill3','LIKE','%'.$request->input('search').'%')->orwhere('skill4','LIKE','%'.$request->input('search').'%')->orwhere('skill5','LIKE','%'.$request->input('search').'%')->orwhere('skill6','LIKE','%'.$request->input('search').'%')->get() ;
        return view('search',compact('obj',$obj));
    }
}
