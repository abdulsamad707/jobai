<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\FriendList;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Post;
use App\Models\UserSkill;
use Illuminate\Support\Facades\Hash;
class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(){
        $data = User::where('role', '!=', 'admin')->get();

        return view('backend_app.admin.all_users',compact('data'));
    }
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    public function editProfile($id){
        $data=User::where('id',$id)->first();
        return view('backend_app.edit_profile',compact('data'));
    }
    public function UpdatePassword(Request $request,$id){
        try {
        $request->validate([
            "password"=>"required | confirmed",
            "password_confirmation"=>"required",
        ]);

            $user=User::find($id);
            $user->password=hash::make($request->password);
            return back()->with('success','Password has been updated successfully');

           //code...
        } catch (\Throwable $th) {
         return back()->with('error',$th->getMessage());
        }
    }
    public function UpdateProfile(Request $request,$id){

        try {

            $data=User::find($id);

            if ($request->hasFile('img')) {

                $image=$request->file('img');
                $imgname=$request->file('img')->getClientOriginalName();
                $destinationpath=public_path('assets/user/');
                $image->move($destinationpath,$imgname);
                $data->avatar=$imgname;
            }
            $data->name=$request->name;
            $data->email=$request->email;
            $data->designation=$request->designation;
            $data->company=$request->company;
            $data->location=$request->location;
            $data->save();
            return back()->with('success','Profile info has been updated successfully');
        } catch (\Throwable $th) {
            return back()->with('error',$th->getMessage());
        }
    }
    public function Userdashboard(){

        $user=Auth::user();

        $posts=Post::with('user')->where('user_id',$user->id)->get();
        $postcount=Post::where('user_id',$user->id)->get()->count();
        $users = User::where('id', '!=', $user->id)->get();
        $skills=UserSkill::where('user_id',$user->id)->get();
        $reqs=FriendList::with('frnd')->where('friend_id',$user->id)->where('status','pending')->get();
        $friends=FriendList::with('user')->where('user_id',$user->id)->where('status','accepted')->get();
        return view('backend_app.user_profile',compact('user','posts','postcount','skills','users','reqs','friends'));
    }

    public function EditUser(){

        $user=Auth::user();
        $posts=Post::with('user')->where('user_id',$user->id)->get();
        $postcount=Post::where('user_id',$user->id)->get()->count();
        $users = User::where('id', '!=', $user->id)->get();

        return view('backend_app.edit_user',compact('user','posts','postcount'));
    }
}
