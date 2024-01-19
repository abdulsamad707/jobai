<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\Course;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Category::paginate(21);
        return view('backend_app.admin.all_categories',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'required'
        ]);
        $data=new category;
        $data->name=$request->name;
        $url = $request->name;
            $slug = Str::slug($url, '-'); // Slugify the URL
            $hyphenatedUrl = str_replace(' ', '-', $slug);
            $data->slug = $hyphenatedUrl;

        if ($request->hasFile('img')) {
            $image=$request->file('img');
            $imgname=$request->file('img')->getClientOriginalName();

            $destinationpath=public_path('assets/category/');
            $image->move($destinationpath,$imgname);

            $data->img=$imgname;

        }
        $data->description=$request->description;

        $data->save();
        return back()->with('success','New Category has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data=category::find($id);
        return view('backend_app.admin.edit_category',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required'
        ]);
        $data=Category::find($id);
        $data->name=$request->name;
        $url = $request->name;
            $slug = Str::slug($url, '-'); // Slugify the URL
            $hyphenatedUrl = str_replace(' ', '-', $slug);
            $data->slug = $hyphenatedUrl;

        if ($request->hasFile('img')) {
            $image=$request->file('img');
            $imgname=$request->file('img')->getClientOriginalName();

            $destinationpath=public_path('assets/category/');
            $image->move($destinationpath,$imgname);

            $data->img=$imgname;

        }
        $data->description=$request->description;
        $data->save();
        return redirect(route('all-categories'))->with('success','Category has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Course::where('category_id',$id)->delete();
        Category::destroy($id);
        return back()->with('success','Category has been deleted');
    }
}
