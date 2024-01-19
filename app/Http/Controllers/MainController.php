<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Videos;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\FriendList;
use App\Models\User;
use OpenAI\Laravel\Facades\OpenAI;
use App\Models\UserSkill;
class MainController extends Controller
{
    public function CoursesData(){
        $data=Course::all();
        return view('front_app.courses',compact('data'));
    }
    public function CourseDetail($slug){
        $category=Category::all();
        $data=Course::with('user')->where('slug',$slug)->first();
        $videos=Videos::where('course_id',$data->id)->get();
        $videoscount=Videos::where('course_id',$data->id)->get()->count();

        return view('front_app.course_detail',compact('data','videos','category','videoscount'));
    }
    public function Index(){
       $courses=Course::latest()->get()->take(6);
       $categories=Category::latest()->get()->take(6);

       return view('front_app.index',compact('courses','categories'));
    }
    public function storePost(Request $request){
        $user=Auth::user();
        $data= new Post;
        $data->user_id=$user->id;
        $data->description=$request->description;
        $data->save();
        return back()->with('success','New Post has been added successfully');
    }
    public function CustomerDashboard(){
        $user=Auth::user();
        $users = User::where('id', '!=', $user->id)->get();
        $skills=UserSkill::where('user_id',$user->id)->get();
        $posts=Post::with('user')->where('user_id',$user->id)->get();
        $postcount=Post::where('user_id',$user->id)->get()->count();
        return view('backend_app.dashboard',compact('user','posts','postcount','users','skills'));
    }
    public function community(){
        $user=Auth::user();
        $posts=Post::all();
        $friends=FriendList::with('user','frnd')->where('user_id',$user->id)->where('status','accepted')->get();
        return view('backend_app.community',compact('user','posts','friends'));
    }
    public function addfrnd($id){
        $user=Auth::user();
        $data=new FriendList;
        $data->user_id=$user->id;
        $data->friend_id=$id;
        $data->status="pending";
        $data->save();
        return back()->with('success','Friend Request has been sent successfully');
    }

    public function Unfrnd($id){
        $user=Auth::user();
        $frnd=FriendList::find($id);
        $data=FriendList::where('user_id',$frnd->friend_id)->where("friend_id",$user->id)->first();

        FriendList::Destroy($data->id);
        FriendList::Destroy($id);


        return back()->with('success','Unfriend succesfully');
    }
    public function acceptReq($id){
        $user=Auth::user();
        $data=FriendList::find($id);
        $data->status="accepted";
        $data->save();
        $frnd=new FriendList;
        $frnd->user_id=$user->id;
        $frnd->friend_id=$data->user_id;
        $frnd->status="accepted";
        $frnd->save();
        return back()->with('success','Friend Request has been accepted successfully');
    }
    public function declineReq($id){
        FriendList::destroy($id);
        return back()->with('success','Request Decline has been successfully');
    }

    public function chat(Request $request){

        $chat1="";
        if($request->step==="1"){

        $result = OpenAI::chat()->create([
            'model' => 'gpt-4',
            'messages' => [
                ['role' => 'system', 'content' => 'First ask first and last name from the user and also take this value in this sentence'],
                ['role' => 'user', 'content' => $request->data],
            ],
            'temperature' => 0.7, // Adjust temperature for diversity in responses
            'max_tokens' => 150, // Set a maximum number of tokens for the response
        ]);
        $msg=$result->choices[0]->message->content;
        return response()->json($msg);
    }
    elseif($request->step === "2"){

       $result="Do you know anything about the ".$request->data;
       $msg=$result;
       return response()->json($msg);
    }
    elseif($request->step === "3"){
        $result="Ok cool, I want to test your knowledge so we can personalized this for you. Take our Skills Test";
        $msg=$result;
        return response()->json($msg);
    }



    }
}
