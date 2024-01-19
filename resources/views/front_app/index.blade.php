@extends('front_app.layouts.template')
@section('content')
<style>
    @media(max-width:768px){
.mob-mt{
    margin-top: 8%!important;
}
.category-thumb img{
    object-fit: cover;
    height: 130px!important;
    width: 135px!important;
}
.mob-100{
    width: 100%!important;
}
    }
</style>
<section class="py-5 w-100 bg-primary"  >

 <section class="container-fluid desktop-header">
    <div class="w-100" style="position: fixed;
    top: -80px;" class="first-section" >
        <h1 class="fw-bold m-auto text-center mt-5 py-3 overflow-hidden" style="color:#A8AAA7;font-size:300px;z-index:-5; font-family: 'Futra', sans-serif!important;">TEZHLY</h1>
    </div></section>
    <section class="container-fluid mob-header">
        <div class="w-100"
       class="first-section" >
            <h1 class="fw-bold m-auto text-center mt-5 overflow-hidden display-1" style="color:#7f807e;font-family: 'Futra', sans-serif!important;">TEZHLY</h1>
        </div></section>




    </section>

<section class="position-relative bg-primary">
    <div class="container-fluid position-relative  bg-primary pt-4" style="margin-top:25%;z-index:10;">
        <div class="w-75 mob-100 m-auto d-block pb-4"  >
            <form action="{{route('tezhly-chat')}}" method="post" class="w-100">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" style="background:#A8AAA7!important;border:0px;border-radius:20px 0px 0px 20px;" name="value" class="form-control py-3 bg-transparent fw-bold text-dark fs-5" placeholder="Hi I'm TEZHLY How can i help you ?" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button style="background:#A8AAA7;border-radius:0px 20px 20px 0px;" type="submit" id="button-addon2"><img class="p-2 rounded-3" src="{{asset('assets/up-arrow (1).png')}}" style="width: 40px;Background:#FEFAEF;" alt=""></button>
                  </div>
            </form>
        <h5 class="fw-bold my-3">Try These</h5>
                          <p class="fw-bold p-3 text-dark mx-5"  style="background:#A8AAA7;border-radius:20px 20px 20px 20px;">I want to become project manager in 6 months</p>
                          <p class="fw-bold p-3  text-dark mx-5" style="background:#A8AAA7;border-radius:20px 20px 20px 20px;">I want to get promotion at my job</p>




                        </div>

                </div>

    <section class="container-fluid  py-5 position-relative" style="background:#FEFAEF;">
        <div class="row">
            <div class="col-lg-2 col-sm-6 col-xs-6 col-md-4">
                <img src="{{asset('assets/images/sponsor/01.png')}}" class="m-auto d-block mob-mt" alt="sponsor">
            </div>
            <div class="col-lg-2 col-sm-6  col-xs-6 col-md-4">
                <img src="{{asset('assets/images/sponsor/02.png')}}" class="m-auto d-block mob-mt" alt="sponsor">
            </div>
            <div class="col-lg-2 col-sm-6  col-xs-6 col-md-4">
                <img src="{{asset('assets/images/sponsor/03.png')}}" class="m-auto d-block mob-mt" alt="sponsor">
            </div>
            <div class="col-lg-2 col-sm-6  col-xs-6 col-md-4">
                <img src="{{asset('assets/images/sponsor/04.png')}}" class="m-auto d-block mob-mt" alt="sponsor">
            </div>
            <div class="col-lg-2 col-sm-6  col-xs-6 col-md-4">
                <img src="{{asset('assets/images/sponsor/05.png')}}" class="m-auto d-block mob-mt" alt="sponsor">

            </div>
            <div class="col-lg-2 col-sm-6 col-md-4">
                <img src="{{asset('assets/images/sponsor/06.png')}}" class="m-auto d-block mob-mt" alt="sponsor">
            </div>
        </div>
    </section>
    <section class="container px-5 mt-5 py-5 position-relative" >
        <div class="row pt-5">
            <div class="col-md-6 col-lg-6 col-sm-12">
                <h4 class="fw-bold">WHY TEZHLY</h4>
                <h2 class="fw-bold display-5">We Care About Your Career Journey</h2>
            </div>


        </div>
        <div class="row " >
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="container-fluid">
                <div class="row mt-5 bg-light p-4 rounded-3">
                    <div class="col-3">
                        <img src="{{asset('assets/images/Vector (2).svg')}}" class="w-100" alt="">
                    </div>
                    <div class="col-9">
                        <h3>Personalized Career Crash</h3>
                        <p>Let our Ai Coach assist with your path</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="container-fluid">
                <div class="row mt-5 bg-light p-4 rounded-3 shadow">
                    <div class="col-3">
                        <img src="{{asset('assets/images/Vector (3).svg')}}" class="w-100" alt="">
                    </div>
                    <div class="col-9">
                        <h3>Community Hub</h3>
                        <p>Network & share insight for cover growth.</p>
                    </div>

                </div>
            </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="container-fluid">
                <div class="row mt-5 bg-light p-4 rounded-3 shadow">
                    <div class="col-3">
                        <img src="{{asset('assets/images/Vector (3).svg')}}" class="w-100" alt="">

                    </div>
                    <div class="col-9">
                        <h3>Career Development EcoSystem</h3>
                        <p>Company matching for job opportunities.</p>
                    </div>

                </div>
            </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12">
                <div class="container-fluid">
                <div class="row mt-5 bg-light p-4 rounded-3 shadow">
                    <div class="col-3">
                        <img src="{{asset('assets/images/description_FILL0_wght400_GRAD0_opsz24 (1).svg')}}" class="w-100" alt="">
                    </div>
                    <div class="col-9">
                        <h4>Career Advancement Toolkit</h4>
                        <p>Resume Building & mock interview training</p>
                    </div>

                </div>
            </div>
            </div>

        </div>
    </section>
<section class="container-fluid px-5 py-5 shadow " style="background:#B7BDBB;">
<div class="row py-5 px-5 mx-4">
    <div class="col-lg-6 col-sm-6">
        <h4 class="fw-bold">Features</h5>
        <h2 class="fw-bold display-5 pe-5">AI Personalized Mentor to Support Your Career Goal</h2>
    </div>
    <div class="col-lg-6 col-sm-6">
        <h3>Leveraging a unique blend of human insight and technological innovation, TEZHLY is dedicated to nurturing your complete career development or transformation. We aim to identify and recommend personalized growth opportunities that are specifically tailored to your individual needs.</h3>
    </div>
</div>
<div class="row px-5 mx-5 ">
    <div class="col-lg-4 col-md-4">
        <div class="px-5 py-5 bg-white rounded-3">



        <img src="https://static.vecteezy.com/system/resources/previews/011/381/947/non_2x/young-man-studying-for-university-test-3d-character-illustration-png.png" class="w-50 ms-auto d-block" alt="">
        <h3 class="fw-bold">Upskill and Learning </h3>
        <p>TEZHLY  provides resources and support to help you improve your skillset. Whether it's through tutorials, webinars, or community forums, TEZHLY offers opportunities for learning and upskilling.</p>
    </div>

    </div>
    <div class="col-lg-4 col-md-4">
        <div class="px-5 py-5 bg-white rounded-3">


        <img src="https://cdn3d.iconscout.com/3d/premium/thumb/website-coding-4620456-3833103.png?f=webp" class="w-50 ms-auto d-block" alt="">
        <h3 class="fw-bold">Career Mentorship</h3>
        <p>Discuss your career progress and challenges with TEZHLY for personalized, AI-mentor feedback. Gain honest, insightful advice tailored to your specific professional journey.</p>
    </div>

    </div>
    <div class="col-lg-4 col-md-4">
        <div class="px-5 py-5  rounded-3 bg-white" >



        <img src="https://png.pngtree.com/png-vector/20231013/ourmid/pngtree-d-illustration-of-business-workflow-concept-of-workflow-process-project-implementation-png-image_10157141.png" class="w-50 ms-auto d-block" alt="">
        <h3 class="fw-bold">Improved Workflow Efficiency</h3>
        <p> Tehzly can save valuable time and effort, allowing you to focus on more important design and development tasks. This increased efficiency can help you take on more projects, meet deadlines, and showcase your skills and capabilities.</p>
    </div>

    </div>
    {{-- <div class="col-lg-4 col-md-4  ">

            <img src="https://static.vecteezy.com/system/resources/previews/011/650/212/original/test-3d-render-icon-illustration-png.png" class="w-75 ms-auto d-block" alt="">


    </div> --}}

</div>
</section>
        {{-- <div class="category-section padding-tb">
            <div class="container">
                <div class="section-header text-center">
                    <span class="subtitle">Popular Category</span>
                    <h2 class="title fw-bold">Popular Category For Learn</h2>
                </div>
                <div class="section-wrapper">
                    <div class="row g-2 justify-content-center row-cols-xl-6 row-cols-md-3 row-cols-sm-2 row-cols-1">
                       @foreach ($categories as $item)
                       <div class="col">
                        <div class="category-item text-center">
                            <div class="category-inner">
                                <div class="category-thumb">
                                    <img src="{{asset('assets/category/'.$item->img)}}" style="object-fit: cover;
                                    height: 130px;
                                    width: 160px;" alt="category">
                                </div>
                                <div class="category-content">
                                    <a href="demos/sob-education/course.html"><h6>{{$item->name}}</h6></a>
                                    <span>24 Course</span>
                                </div>
                            </div>
                        </div>
                    </div>

                       @endforeach

                    </div>
                    <div class="text-center mt-5">
                        <a href="demos/sob-education/course.html" class="lab-btn"><span>Browse All Categories</span></a>
                    </div>
                </div>
            </div>
        </div> --}}

{{--
        <div class="course-section padding-tb section-bg">
            <div class="container">
                <div class="section-header text-center">
                    <span class="subtitle">Featured Courses</span>
                    <h2 class="title fw-bold">Pick A Course To Get Started</h2>
                </div>
                <div class="section-wrapper">

                    <div class="row g-4 justify-content-center row-cols-xl-3 row-cols-md-2 row-cols-1">
                        @foreach ($courses as $items)
                        <div class="col">
                            <div class="course-item">
                                <div class="course-inner">
                                    <div class="course-thumb">
                                        <img src="{{asset('assets/courses/'.$items->img)}}" style="object-fit: cover;height:300px;" alt="course">
                                    </div>
                                    <div class="course-content">
                                        <div class="course-price"></div>
                                        <div class="course-category">
                                            <div class="course-cate">
                                                <a href="#">{{$items->category_id}}</a>
                                            </div>
                                            <div class="course-reiew">
                                                <span class="ratting">
                                                    <i class="icofont-ui-rating"></i>
                                                    <i class="icofont-ui-rating"></i>
                                                    <i class="icofont-ui-rating"></i>
                                                    <i class="icofont-ui-rating"></i>
                                                    <i class="icofont-ui-rating"></i>
                                                </span>
                                                <span class="ratting-count">
                                                    03 reviews
                                                </span>
                                            </div>
                                        </div>
                                        <a href="{{route('course-detail',['slug'=>$items->slug])}}" ><h4>{{$items->name}}</h4></a>
                                        <div class="course-details">
                                            <div class="couse-count"><i class="icofont-video-alt"></i> 18x Lesson</div>
                                            <div class="couse-topic"><i class="icofont-signal"></i> Online Class</div>
                                        </div>
                                        <div class="course-footer">
                                            <div class="course-author">
                                                <img src="assets/images/course/author/03.jpg" alt="course author">
                                                <a href="team-single.html" class="ca-name">Admin</a>
                                            </div>
                                            <div class="course-btn">
                                                <a href="{{route('course-detail',['slug'=>$items->slug])}}" class="lab-btn-text">Read More <i class="icofont-external-link"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div> --}}


        {{-- <div class="bg-success padding-tb">
            <div class="container text-white">
                <div class="section-header text-center">
                    <span class="subtitle">START TO SUCCESS</span>
                    <h2 class="title fw-bold">Achieve Your Goals With Tezhly</h2>
                </div>
                <div class="section-wrapper">
                    <div class="counter-part mb-4">
                        <div class="row g-4 row-cols-lg-4 row-cols-sm-2 row-cols-1 justify-content-center">
                            <div class="col">
                                <div class="count-item">
                                    <div class="count-inner">
                                        <div class="count-content">
                                            <h2><span class="counter count">100</span><span>+</span></h2>
                                            <p class="text-white">Years of Language Education Experience</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="count-item">
                                    <div class="count-inner">
                                        <div class="count-content">
                                            <h2><span class="counter count">3080</span><span>+</span></h2>
                                            <p class="text-white">Learners Enrolled in Edukon Courses</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="count-item">
                                    <div class="count-inner">
                                        <div class="count-content">
                                            <h2><span class="counter count">330</span><span>+</span></h2>
                                            <p class="text-white">Qualified Teachers And Language Experts</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="count-item">
                                    <div class="count-inner">
                                        <div class="count-content">
                                            <h2><span class="counter count">2300</span><span>+</span></h2>
                                            <p class="text-white">Innovative Foreign Language Courses</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="achieve-part">
                        <div class="row g-4 row-cols-1 row-cols-lg-2">
                            <div class="col">
                                <div class="achieve-item">
                                    <div class="achieve-inner">
                                        <div class="achieve-thumb">
                                            <img src="https://static.vecteezy.com/system/resources/previews/011/381/872/original/male-teacher-sitting-in-the-classroom-3d-character-illustration-png.png" style="
                                                display: block;
                                                margin: auto;
                                                height: auto;
                                                max-width: 62%!important;
                                                -webkit-transition: all .3s ease;
                                                -moz-transition: all .3s ease;
                                                transition: all .3s ease;
                                            " alt="achieve thumb">
                                        </div>
                                        <div class="achieve-content">
                                            <h4>Start Teaching Today</h4>
                                            <p>Seamlessly engage technically sound coaborative reintermed goal oriented content rather than ethica</p>
                                            <a href="{{route('instructor-register')}}" class="lab-btn"><span>Become A Instructor</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="achieve-item">
                                    <div class="achieve-inner">
                                        <div class="achieve-thumb">
                                            <img src="https://cdn3d.iconscout.com/3d/premium/thumb/online-training-course-7397222-6043522.png?f=webp" style=" display: block;
                                            margin: auto;
                                            height: auto;
                                            max-width: 80%!important;
                                            -webkit-transition: all .3s ease;
                                            -moz-transition: all .3s ease;
                                            transition: all .3s ease;" />
                                        </div>
                                        <div class="achieve-content">
                                            <h4>If You Join Our Course</h4>
                                            <p>Seamlessly engage technically sound coaborative reintermed goal oriented content rather than ethica</p>
                                            <a href="demos/sob-education/signup.html" class="lab-btn"><span>Register For Free</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    </section>
        @endsection
