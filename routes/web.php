<?php

use App\Http\Controllers\{AssessmentController
    ,CategoryController,
    CourseController,
    InstructorRegister,
    MainController,
    ProfileController,
    ResumeController};
/*use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InstructorRegister;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResumeController;*/
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Route::middleware('auth')->group(function () {

    Route::controller(ProfileController::class)->group(function(){
        Route::get('/profile','edit')->name('profile.edit');
        Route::patch('/profile','update')->name('profile.update');
        Route::delete('/profile','destroy')->name('profile.destroy');

    });
  
});

Route::controller(MainController::class)->group(function(){
    Route::get('/','Index')->name('home');
    Route::get('courses','CoursesData')->name('courses');
    Route::get('course-detail/{slug}','CourseDetail')->name('course-detail');
});


Route::view('about','front_app.about')->name('about');
Route::view('blog','front_app.blog')->name('blogs');
Route::view('contact','front_app.contact')->name('contact');
Route::view('faqs','front_app.faqs')->name('faqs');
Route::view('goal-plan','front_app.goal-plan')->name('goal-plan');
Route::view('my-matches','front_app.my-matches')->name('my-matches');
Route::view('pricing','front_app.pricing')->name('pricing');



Route::controller(AssessmentController::class)->group(function(){
    Route::get('skillassement','Assessment')->name('skillassement');
    Route::post('Tezhly-chat','chatval')->name('tezhly-chat');
    Route::post('result-assessment','result')->name('result-assessment');
});



//User
Route::controller(MainController::class)->group(function(){
    Route::get('user-dashboard','CustomerDashboard')->name('customer-dashboard');
    Route::post('store-post','storePost')->name('post');
    Route::get('community','community')->name('community');
    Route::get('edit-userprofile','EditUser')->name('edit-userprofile');
    Route::get('add-friend/{id}','AddFrnd')->name('add-frnd');
    Route::get('un-friend/{id}','Unfrnd')->name('un-frnd');
    Route::get('accept-friend/{id}','acceptReq')->name('accept-frnd');
    Route::get('decline-friend/{id}','declineReq')->name('decline-frnd');
    
    
    Route::get('all-users','Allusers')->name('all-users');
});

Route::view('admin-dashboard','backend_app.admin.dashboard')->name('admin-dashboard');



//courses
Route::controller(CourseController::class)->group(function(){
    Route::get('all-courses','index')->name('all-courses');
    Route::get('add-course','create')->name('add-course');
    Route::post('store-course','store')->name('store-course');
    Route::get('edit-course/{id}','edit')->name('edit-course');
    Route::post('update-course/{id}','update')->name('update-course');
    Route::get('destroy-course/{id}','destroy')->name('destroy-course');
    Route::get('add-video/{id}','AddVideo')->name('add-video');
    Route::get('all-videos/{id}','AllVideos')->name('all-videos');
    Route::POST('store-videos/{id}','SubmitVideo')->name('store-videos');
    Route::get('delete-videos/{id}','DestroyVideo')->name('Destroy-videos');
});





//users
Route::controller(ProfileController::class)->group(function(){
    Route::get('all-users','index')->name('all-users');
    Route::get('destroy-user/{id}','destroy')->name('destroy-user');
    Route::get('edit-profile/{id}','editProfile')->name('edit-profile');
    Route::post('update-profile-info/{id}','UpdateProfile')->name('update-profile-info');
    Route::post('update-security/{id}','UpdatePassword')->name('update-security');
    Route::get('user-profile','Userdashboard')->name('user-dashboard');
    Route::get('edit-user','EditUser')->name('edit-user');
});



//Category
    Route::controller(CategoryController::class)->group(function(){
        Route::get('all-categories','index')->name('all-categories');
        Route::get('add-category','create')->name('add-category');
        Route::post('store-category','store')->name('store-category');
        Route::get('edit-category/{id}','edit')->name('edit-category');
        Route::post('update-category/{id}','update')->name('update-category');
        Route::get('destroy-category/{id}','destroy')->name('destroy-category');
    });

Route::view('add-category','backend_app.admin.add_category')->name('add-category');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard');
    //Resume AI Builder
    Route::view('resume-ai-builder','front_app.Resume_ai_builder')->name('resume-ai-builder');
});
//Route::get('/dashboard', function () {
  //  return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Resume AI Builder
//Route::view('resume-ai-builder','front_app.Resume_ai_builder')->middleware(['auth', 'verified'])->name('resume-ai-builder');
Route::post('store-resume',[ResumeController::class,'storeResume'])->name('store-resume');


//Intructor
Route::view('instructor-register','front_app.instructor_register')->name("instructor-register");

//AI Chat
Route::post('ai-chat',[MainController::class,'chat'])->name('ai-chat');


require __DIR__.'/auth.php';
