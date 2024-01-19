@extends('front_app.layouts.template')
@section('content')
<div class="container-fluid px-5 mob-pad bg-white" style="padding-top: 10%;">
    <div class="row">

    <div class="col-lg-2 col-md-2 col-sm-12 ">
        <div class="border border-dark border-3 bg-white p-3 rounded-3">
            @if ($user->avatar===null)
            <img src="https://play-lh.googleusercontent.com/7Ak4Ye7wNUtheIvSKnVgGL_OIZWjGPZNV6TP_3XLxHC-sDHLSE45aDg41dFNmL5COA" class="rounded-circle w-75 m-auto d-block"  alt="">

            @else
            <img src="{{asset('assets/user/'.$user->avatar)}}" class="rounded-circle  m-auto d-block" style="height: 200px;width:200px;object-fit:cover;"  alt="">
            @endif
        <h6 class="fw-bold"> <span class="text-uppercase">{{$user->name}}</span></h6>
        <div class="row mt-2  ">
            <div class="col-lg-4 col-md-4 mt-1 text-center">
                <small class="fw-bold text-center">406k</small>
                <small class=" border-3 fw-bold">PEERS</small>
            </div>

              <div class="col-lg-4 col-md-4 mt-1 text-center">
                <small class="fw-bold text-center">{{$postcount}}</small>
                <small class=" text-center fw-bold">POSTS</small>
            </div>
        </div>
        <div class="row pb-5 pt-3">
                <div class="col-12">
                    <table >

                        <tr>
                            <td class="fw-bold">Current:</td>
                            <td> {{$user->company}}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">On The:</td>
                            <td>{{$user->designation}}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Duration:</td>
                            <td>12 Months</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Location:</td>
                            <td>{{$user->location}}</td>
                        </tr>
                    </table>
                </div>
        </div>
    </div>
    </div>
    <div class="col-lg-8 col-sm-8 col-sm-12 mt-3">
        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <form action="{{route('post')}}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-transparent border-0 mob-hide" id="basic-addon1"> <img src="https://play-lh.googleusercontent.com/7Ak4Ye7wNUtheIvSKnVgGL_OIZWjGPZNV6TP_3XLxHC-sDHLSE45aDg41dFNmL5COA" class="rounded-circle" height="30" width="50" alt=""></span>
                            <textarea type="text" name="description" class="form-control bg-secondary border-dark border-3 rounded-3 fs-4" placeholder="What's on your mind" aria-label="Username" aria-describedby="basic-addon1" rows="3"></textarea>
                            <button type="submit" style="background: none!important;"><i class="fa-solid fa-paper-plane fs-5 p-3 bg-secondary rounded-circle" ></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    @foreach ($posts as $item)
                    <div class="row mt-4">
                        <div class="col-lg-12 col-sm-12 col-md-12 ">
                            <div class="bg-secondary p-3 rounded-3">
                                <div class="avatar d-flex flex-row gap-3">
                                <img src="https://play-lh.googleusercontent.com/7Ak4Ye7wNUtheIvSKnVgGL_OIZWjGPZNV6TP_3XLxHC-sDHLSE45aDg41dFNmL5COA" class="rounded-circle" height="30" width="50" alt="">
                                <div class="d-block">
                                    <p class="mb-0 fw-bold text-capitalize text-dark">{{$item->user->name}}</p>

                                    <small  class="mb-0 text-dark">{{$item->user->designation}}</small>
                                </div>

                                </div>
                                <p class="mt-3 text-dark">{{$item->description}}</p>
                                <i class="fa-solid fa-heart text-danger fs-4 me-3"></i><i class="fa-regular fa-thumbs-up fs-4 "></i>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>




        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-12 ">
        <div class="border bg-white border-3 border-dark p-2 position-relative rounded-3 mb-4" style="background: #DFDEDA;">
            <h6 class="fw-bold">MY SKILLSET</h6>
            <ul class="fw-bold list-unstyled ps-4" >
                @foreach ($skills as $item)
                <li class="tick">{{$item->name}}</li>
                @endforeach



            </ul>
            <a href="{{route('skillassement')}}" class=" py-2 text-center rounded-3 m-auto d-block fw-bold" style="border:3px solid black!important;"><small>Take Assessment</small></a>
        </div>
        {{--  --}}


            <div class="border border-3 bg-white border-dark p-2 position-relative rounded-3  ms-auto" style="background: #DFDEDA;">
              <h6 class="fw-bold mb-1">Friends List</h6>
              <ul class="fw-bold list-unstyled " >
                  @foreach ($users as $item)
                  <li  class="py-2 border-bottom border-dark">
                      <div class="d-flex flex-row gap-2">
                          <img src="https://static.vecteezy.com/system/resources/previews/002/002/257/non_2x/beautiful-woman-avatar-character-icon-free-vector.jpg" class="avatar_mini" alt="">
                          <div>
                              <small class="text-capitalize" style="font-size: 12px;">{{$item->name}}</small>
                              {{-- @php
                                  $user=Auth::user();
                                  $data=DB::table('friend_lists')->where('user_id',$user->id)->where('friend_id',$item->id)->first();
                              @endphp
                              @if($data)
                              <small class="text-danger d-block" style="font-size: 12px;"><a href="#"><i class="fa-solid fa-user-plus text-danger"></i></a> Request Sent</small>
                              @else
                              <small class="text-info d-block hover " style="font-size: 12px;"><a href="{{route('add-frnd',['id'=>$item->id])}}"><i class="fa-solid fa-user-plus"></i> Add</a></small>
                              @endif --}}

                          </div>

                      </div>
                  </li>

                  @endforeach



              </ul>

          </div>


        {{--  --}}
    </div>
</div>

</div>

@endsection
