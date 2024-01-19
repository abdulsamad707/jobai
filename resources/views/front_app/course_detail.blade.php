@extends('front_app.layouts.template')
@section('content')

    <div class="py-5 style-2">
        <div class="container " style="padding-top:10%;">
            <div class="row justify-content-center justify-content-lg-between align-items-center flex-row-reverse">
                <div class="col-lg-7 col-12">
                    <div class="pageheader-thumb">
                        <img src="{{asset('assets/courses/'.$data->img)}}" style="object-fit: cover;height:450px;"  class="w-100">
                        <a href="{{asset('assets/videos/'.$data->video)}}" class="video-button" data-rel="lightcase"><i
                                class="icofont-ui-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="pageheader-content">
                        <div class="course-category">
                            <a href="#" class="course-cate">Adobe XD</a>
                            <a href="#" class="course-offer">30% Off</a>
                        </div>
                        <h2 class="phs-title">{{$data->name}}</h2>
                        <p class="phs-desc">{{$data->excerpt}}</p>
                        <div class="phs-thumb">


                            {{-- <div class="course-reiew">
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
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->


    <!-- course section start here -->
    <div class="course-single-section padding-tb ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="main-part">
                        <div class="course-item">
                            <div class="course-inner">
                                <div class="course-content">

                                    <p>@php echo $data->description @endphp</p>


                                </div>
                            </div>
                        </div>

                        <div class="course-video">
                            <div class="course-video-title">
                                <h4>Course Content</h4>
                            </div>
                            <div class="course-video-content">
                                <div class="accordion" id="accordionExample">

                                      <div class="accordion-item">
                                        <div class="accordion-header" id="accordion01">
                                            <button class="d-flex flex-wrap justify-content-between" style="background: #073724!important;"
                                                data-bs-toggle="collapse" data-bs-target="#videolist1"
                                                aria-expanded="true"
                                                aria-controls="videolist1"><span>Lessons</span> <span>
                                                  </span> </button>
                                        </div>
                                        <div id="videolist1" class="accordion-collapse collapse show"
                                            aria-labelledby="accordion01" data-bs-parent="#accordionExample">
                                            <ul class="lab-ul video-item-list">
                                                @foreach ($videos as $key=>$item)
                                                <li class=" d-flex flex-wrap justify-content-between bg-white border-bottom">
                                                    <div class="video-item-title">{{$key}} {{$item->name}}</div>
                                                    <div class="video-item-icon"><a
                                                            href="{{asset('assets/videos/'.$item->video)}}"
                                                            data-rel="lightcase"><i class="icofont-play-alt-2"></i></a>
                                                    </div>
                                                </li>




                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>

                        <div class="authors">
                            <div class="author-thumb">
                                <img src="https://img.freepik.com/free-psd/3d-illustration-person-with-sunglasses_23-2149436188.jpg?size=626&ext=jpg" alt="rajibraj91">
                            </div>
                            <div class="author-content">
                                <h5 class="text-capitalize">{{$data->user->name}}</h5>
                                <span class="text-capitalize">{{$data->user->designation}}</span>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <a href="/chatify/{{$data->user_id}}" class="btn btn-primary my-3">Chat With Instructor</a>
                                <ul class="lab-ul social-icons">
                                    <li>
                                        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="pinterest"><i class="icofont-pinterest"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        {{-- <div id="comments" class="comments">
                            <h4 class="title-border">02 Comment</h4>
                            <ul class="comment-list">
                                <li class="comment">
                                    <div class="com-thumb">
                                        <img alt="rajibraj91" src="assets/images/author/02.jpg">
                                    </div>
                                    <div class="com-content">
                                        <div class="com-title">
                                            <div class="com-title-meta">
                                                <h6>Linsa Faith</h6>
                                                <span> October 5, 2018 at 12:41 pm </span>
                                            </div>
                                            <span class="ratting">
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                            </span>
                                        </div>
                                        <p>The inner sanctuary, I throw myself down among the tall grass bye the trckli
                                            stream and, as I lie close to the earth</p>
                                    </div>
                                    <ul class="comment-list">
                                        <li class="comment">
                                            <div class="com-thumb">
                                                <img alt="rajibraj91" src="assets/images/author/03.jpg">
                                            </div>
                                            <div class="com-content">
                                                <div class="com-title">
                                                    <div class="com-title-meta">
                                                        <h6>James Jusse</h6>
                                                        <span> October 5, 2018 at 12:41 pm </span>
                                                    </div>
                                                    <span class="ratting">
                                                        <i class="icofont-ui-rating"></i>
                                                        <i class="icofont-ui-rating"></i>
                                                        <i class="icofont-ui-rating"></i>
                                                        <i class="icofont-ui-rating"></i>
                                                        <i class="icofont-ui-rating"></i>
                                                    </span>
                                                </div>
                                                <p>A wonderful serenity has taken possession of my entire soul, like
                                                    these sweet mornings spring which I enjoy with my whole heart</p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div> --}}

                        <div id="respond" class="comment-respond mb-lg-0">
                            <h4 class="title-border">Leave a Comment</h4>
                            <div class="add-comment">
                                <form action="#" method="post" id="commentform" class="comment-form">
                                    <input type="text" placeholder="review title">
                                    <input type="text" placeholder="reviewer name">
                                    <input type="email" placeholder="reviewer email">
                                    <textarea rows="5" placeholder="review summary"></textarea>
                                    <button type="submit" class="lab-btn"><span>Submit Review</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-part">
                        <div class="course-side-detail">
                            <div class="csd-title">
                                <div class="csdt-left">
                                    <h4 class="mb-0"><sup>$</sup>38</h4>
                                </div>
                                <div class="csdt-right">
                                    <p class="mb-0"><i class="icofont-clock-time"></i>Limited time offer</p>
                                </div>
                            </div>
                            <div class="csd-content">
                                <div class="csdc-lists">
                                    <ul class="lab-ul">
                                        <li>
                                            <div class="csdc-left"><i class="icofont-ui-alarm"></i>Course level</div>
                                            <div class="csdc-right">Beginner</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><i class="icofont-book-alt"></i>Course Duration</div>
                                            <div class="csdc-right">10 week</div>
                                        </li>

                                        <li>
                                            <div class="csdc-left"><i class="icofont-video-alt"></i>Lessions</div>
                                            <div class="csdc-right">{{$videoscount}}x</div>
                                        </li>

                                        <li>
                                            <div class="csdc-left"><i class="icofont-hour-glass"></i>Pass parcentages
                                            </div>
                                            <div class="csdc-right">80</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><i class="icofont-certificate"></i>Certificate</div>
                                            <div class="csdc-right">Yes</div>
                                        </li>
                                        <li>
                                            <div class="csdc-left"><i class="icofont-globe"></i>Language</div>
                                            <div class="csdc-right">English</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sidebar-payment">
                                    <div class="sp-title">
                                        <h6>Secure Payment:</h6>
                                    </div>
                                    <div class="sp-thumb">
                                        <img src="assets/images/pyment/01.jpg" alt="Stripe">
                                    </div>
                                </div>
                                <div class="sidebar-social">
                                    <div class="ss-title">
                                        <h6>Share This Course:</h6>
                                    </div>
                                    <div class="ss-content">
                                        <ul class="lab-ul">
                                            <li><a href="#" class="twitter"><i class="icofont-twitter"></i></a></li>
                                            <li><a href="#" class="vimeo"><i class="icofont-vimeo"></i></a></li>
                                            <li><a href="#" class="rss"><i class="icofont-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="course-enroll">
                                    <a href="#" class="lab-btn"><span>Enrolled Now</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="course-side-cetagory">
                            <div class="csc-title">
                                <h5 class="mb-0">Course Categories</h5>
                            </div>
                            <div class="csc-content">
                                <div class="csdc-lists">
                                    <ul class="lab-ul">
                                        @foreach ($category as $item)
                                        <li>
                                            <div class="csdc-left"><a href="#">{{$item->name}}</a></div>
                                            <div class="csdc-right"></div>
                                        </li>
                                        @endforeach


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
