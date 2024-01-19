<?php

use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InstructorRegister;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResumeController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/',[MainController::class,'Index'])->name('home');
Route::get('courses',[MainController::class,'CoursesData'])->name('courses');
Route::get('course-detail/{slug}',[MainController::class,'CourseDetail'])->name('course-detail');
Route::view('about','front_app.about')->name('about');
Route::view('blog','front_app.blog')->name('blogs');
Route::view('contact','front_app.contact')->name('contact');
Route::view('faqs','front_app.faqs')->name('faqs');
Route::view('goal-plan','front_app.goal-plan')->name('goal-plan');
Route::view('my-matches','front_app.my-matches')->name('my-matches');
Route::view('pricing','front_app.pricing')->name('pricing');
Route::get('skillassement',[AssessmentController::class,'Assessment'])->name('skillassement');
Route::post('Tezhly-chat',[AssessmentController::class,'chatval'])->name('tezhly-chat');
Route::post('result-assessment',[AssessmentController::class,'result'])->name('result-assessment');


//User
Route::get('user-dashboard',[MainController::class,'CustomerDashboard'])->name('customer-dashboard');
Route::post('store-post',[MainController::class,'storePost'])->name('post');
Route::get('community',[MainController::class,'community'])->name('community');
Route::get('edit-userprofile',[MainController::class,'EditUser'])->name('edit-userprofile');
Route::get('add-friend/{id}',[MainController::class,'AddFrnd'])->name('add-frnd');
Route::get('un-friend/{id}',[MainController::class,'Unfrnd'])->name('un-frnd');
Route::get('accept-friend/{id}',[MainController::class,'acceptReq'])->name('accept-frnd');
Route::get('decline-friend/{id}',[MainController::class,'declineReq'])->name('decline-frnd');


Route::get('all-users',[MainController::class,'Allusers'])->name('all-users');
Route::view('admin-dashboard','backend_app.admin.dashboard')->name('admin-dashboard');



//courses
Route::get('all-courses',[CourseController::class,'index'])->name('all-courses');
Route::get('add-course',[CourseController::class,'create'])->name('add-course');
Route::post('store-course',[CourseController::class,'store'])->name('store-course');
Route::get('edit-course/{id}',[CourseController::class,'edit'])->name('edit-course');
Route::post('update-course/{id}',[CourseController::class,'update'])->name('update-course');
Route::get('destroy-course/{id}',[CourseController::class,'destroy'])->name('destroy-course');
Route::get('add-video/{id}',[CourseController::class,'AddVideo'])->name('add-video');
Route::get('all-videos/{id}',[CourseController::class,'AllVideos'])->name('all-videos');
Route::POST('store-videos/{id}',[CourseController::class,'SubmitVideo'])->name('store-videos');
Route::get('delete-videos/{id}',[CourseController::class,'DestroyVideo'])->name('Destroy-videos');



//users
Route::get('all-users',[ProfileController::class,'index'])->name('all-users');
Route::get('destroy-user/{id}',[ProfileController::class,'destroy'])->name('destroy-user');
Route::get('edit-profile/{id}',[ProfileController::class,'editProfile'])->name('edit-profile');
Route::post('update-profile-info/{id}',[ProfileController::class,'UpdateProfile'])->name('update-profile-info');
Route::post('update-security/{id}',[ProfileController::class,'UpdatePassword'])->name('update-security');
Route::get('user-profile',[ProfileController::class,'Userdashboard'])->name('user-dashboard');
Route::get('edit-user',[ProfileController::class,'EditUser'])->name('edit-user');


//Category

Route::get('all-categories',[CategoryController::class,'index'])->name('all-categories');
Route::get('add-category',[CategoryController::class,'create'])->name('add-category');
Route::post('store-category',[CategoryController::class,'store'])->name('store-category');
Route::get('edit-category/{id}',[CategoryController::class,'edit'])->name('edit-category');
Route::post('update-category/{id}',[CategoryController::class,'update'])->name('update-category');
Route::get('destroy-category/{id}',[CategoryController::class,'destroy'])->name('destroy-category');
Route::view('add-category','backend_app.admin.add_category')->name('add-category');



//Resume AI Builder
Route::view('resume-ai-builder','front_app.Resume_ai_builder')->middleware(['auth', 'verified'])->name('resume-ai-builder');
Route::post('store-resume',[ResumeController::class,'storeResume'])->name('store-resume');


//Intructor
Route::view('instructor-register','front_app.instructor_register')->name("instructor-register");

//AI Chat
Route::post('ai-chat',[MainController::class,'chat'])->name('ai-chat');


require __DIR__.'/auth.php';
