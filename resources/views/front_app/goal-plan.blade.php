@extends('front_app.layouts.template')
@section('content')
<div class="course-section  " style="background: #073724;">
    <div class="container">
        <div class="section-header text-center" style="padding-top:10%;">
            <span class="subtitle">Goals</span>
            <h2 class="title fw-bold display-4 text-white">Your Goal Plan</h2>
        </div>
       <div class="container-fluid">
        <div class="process-wrap py-5">
            <div class="process-main">
              <div class="col-3 ">
                <div class="process-step-cont">
                  <div class="process-step step-1"></div>
                  <span class="process-label">Start Course</span>

                </div>
              </div>
              <div class="col-3 ">
                <div class="process-step-cont">
                  <div class="process-step step-2"></div>
                  <span class="process-label">Finish Course</span>
                </div>
              </div>
              <div class="col-3">
                <div class="process-step-cont">
                  <div class="process-step step-3"></div>
                  <span class="process-label">Resume Revision</span>
                </div>
              </div>
              <div class="col-3">
                <div class="process-step-cont">
                  <div class="process-step step-4"></div>
                  <span class="process-label">Interview</span>
                </div>
              </div>
               <div class="col-3">
                <div class="process-step-cont">
                  <div class="process-step step-5"></div>
                  <span class="process-label">Project Manager</span>
                </div>
              </div>
            </div>
          </div>
       </div>
    </div>
</div>
<div class="course-section  py-5">
    <div class="container">
        <div class="section-header">
            <span class="subtitle">Courses</span>
            <h2 class="title fw-bold display-4">Your Course</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12"><img src="https://skillforge.com/wp-content/uploads/2020/12/live-instructor-led-online-training.jpg" class="border rounded-3" alt=""></div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="row">
                    <div class="col-12 mt-5">
                        <button class="btn btn-success px-5 fs-3 py-2 ms-auto d-block w-75 py-3">Start Your Course</button></div>

                    </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <button class="btn btn-success px-5 fs-3 py-2 ms-auto d-block w-75 py-3">Chat with instructor</button>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
