<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Str;
use App\Models\Videos;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=Auth::user();
        $data=Course::where('user_id',$user->id)->paginate(21);
        return view('backend_app.admin.courses',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=Category::all();
        return view('backend_app.admin.add_courses',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);
      $user=Auth::user();
      $data=new Course;
      $data->name=$request->name;
      $data->user_id=$user->id;
      $url = $request->name;
            $slug = Str::slug($url, '-'); // Slugify the URL
            $hyphenatedUrl = str_replace(' ', '-', $slug);
            $data->slug = $hyphenatedUrl;

      $data->description=$request->description;
      $data->excerpt=$request->excerpt;
      $data->category_id=$request->category_id;


      if ($request->hasFile('img')) {
        $image=$request->file('img');
        $imgname=$request->file('img')->getClientOriginalName();

        $destinationpath=public_path('assets/courses/');
        $image->move($destinationpath,$imgname);

        $data->img=$imgname;

    }
    if ($request->hasFile('video')) {
        $video=$request->file('video');
        $videoname=$request->file('video')->getClientOriginalName();

        $destinationpath2=public_path('assets/videos/');
        $video->move($destinationpath2,$videoname);

        $data->video=$video;

    }
    $data->save();
    return back()->with('success','Your course has been successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    public function AllVideos($id){
        $data=$id;
        $videos=Videos::all();
        return view('backend_app.admin.all_videos',compact('data','videos'));
    }
    public function AddVideo($id){
        $data=Course::find($id);
        $videos=Videos::where('course_id',$id)->get();
        return view('backend_app.admin.add_video',compact('data','videos'));
    }
    public function DestroyVideo($id){
        Videos::destroy($id);
        return back()->with('success','Video Has been deleted');
    }
    public function SubmitVideo(Request $request,$id){
        $data=new Videos;
        $data->name=$request->name;
        if ($request->hasFile('video')) {
            $image=$request->file('video');
            $imgname=$request->file('video')->getClientOriginalName();

            $destinationpath=public_path('assets/videos/');
            $image->move($destinationpath,$imgname);
            $data->video=$imgname;
        }
        $data->course_id=$id;
        $data->save();
        return back()->with('success','New video has been added');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data= Course::find($id);
        return view('backend_app.admin.edit_course',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
        ]);
        $user=Auth::user();

      $data=Course::find($id);
      $data->name=$request->name;
      $url = $request->name;
            $slug = Str::slug($url, '-'); // Slugify the URL
            $hyphenatedUrl = str_replace(' ', '-', $slug);
            $data->slug = $hyphenatedUrl;

      $data->description=$request->description;
      $data->excerpt=$request->excerpt;
      $data->category_id=$request->category_id;
      $data->user_id=$user->id;


      if ($request->hasFile('img')) {
        $image=$request->file('img');
        $imgname=$request->file('img')->getClientOriginalName();

        $destinationpath=public_path('assets/courses/');
        $image->move($destinationpath,$imgname);

        $data->img=$imgname;

    }
    if ($request->hasFile('video')) {
        $video=$request->file('video');
        $videoname=$request->file('video')->getClientOriginalName();

        $destinationpath2=public_path('assets/videos/');
        $video->move($destinationpath2,$videoname);

        $data->video=$videoname;

    }
    $data->save();
    return redirect(route('all-courses'))->with('success','Your course has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $data= Course::destroy($id);
        return back()->with('success','Course has been successfully deleted');
    }
}
