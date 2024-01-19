<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume;
use Illuminate\Support\Facades\Auth;

class ResumeController extends Controller
{
    public function storeResume(Request $request){

        if($request->type==="type2"){
            dd("Comming Soon");
        }
        else{
            $user=Auth::user();
            $data=new Resume;
            $data->full_name=$request->full_name;
            $data->designation=$request->designation;
            $data->email_address=$request->email_address;
            $data->phone_no=$request->phone_no;
            $data->linkdien=$request->linkdien;
            $data->personal_website=$request->personal_website;
            $data->country=$request->country;

            $data->city=$request->city;
            $data->experiences=json_encode($request->experiences);
            $data->projects=json_encode($request->projects);
            $data->educations=json_encode($request->educations);
            $data->courses=json_encode($request->courses);
            $data->skills=json_encode($request->skills);
            $data->description=json_encode($request->description);
            $data->type=$request->type;
            $data->user_id=$user->id;
            $data->save();
            return view('front_app.resume_layouts.type1',compact('data'));
        }
    }
}
