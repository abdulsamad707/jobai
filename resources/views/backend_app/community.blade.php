@extends('front_app.layouts.template')
@section('content')

<div class="container-fluid px-5 bg-primary " style="padding-top: 15%;">
    <div class="row">
        <div class="col-12">
            <h2 class="display-4 fw-bold mb-5 text-dark ">#YourCommunity</h2>
        </div>
    <div class="col-lg-9 col-md-9 col-sm-12">


        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <form action="{{route('post')}}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text mx-2 bg-transparent border-0" id="basic-addon1">
                                @if($user->avatar !== null)
                                <img src="{{asset('assets/user/'.$user->avatar)}}" class="rounded-3"  width="50" alt="">
                               @else
                               <img src="https://www.pikpng.com/pngl/m/80-805523_default-avatar-svg-png-icon-free-download-264157.png" class="rounded-circle" height="30" width="50" alt="">
                               @endif
                            </span>
                            <input type="text" name="description" class="form-control bg-transparent border-black    text-white border-3 rounded-3 fs-4" placeholder="What's on your mind" aria-label="Username" aria-describedby="basic-addon1">
                            <button type="submit" style="background: none!important;"><i class="fa-solid fa-paper-plane text-dark fs-4 bg-secondary rounded-3 p-3"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            @foreach ($posts as $item)
            <div class="row mt-4">
                <div class="col-lg-12 col-sm-12 col-md-12 ">
                    <div class="bg-white p-3 rounded-3">
                        <div class="avatar d-flex flex-row gap-3">
                            @if($item->avatar !== null)
                        <img src="{{asset('assets/user/'.$item->avatar)}}" class="rounded-circle" height="30" width="50" alt="">
                       @else
                       <img src="https://www.pikpng.com/pngl/m/80-805523_default-avatar-svg-png-icon-free-download-264157.png" class="rounded-circle" height="30" width="50" alt="">
                       @endif
                        <div class="d-block">
                            <p class="mb-0 fw-bold text-capitalize">{{$item->user->name}}</p>

                            <small  class="mb-0">{{$item->user->designation}}</small>
                        </div>

                        </div>
                        <p class="mt-3">{{$item->description}}</p>
                        <i class="fa-solid fa-heart text-danger fs-4 me-3"></i><i class="fa-regular fa-thumbs-up fs-4 "></i>
                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 px-5">
        <div class="border border-3 border-dark p-4 position-relative rounded-3 " style="background: #DFDEDA;">
            <h4 class="fw-bold mb-4">Friends list</h4>
            <ul class="fw-bold list-unstyled " >
                @foreach ($friends as $item)
                <li  class="mb-1">
                    <div class="d-flex flex-row gap-2">
                        @if ($item->frnd->avatar !== null)
                        <img src="{{asset('assets/user/'.$item->avatar)}}" class="avatar_mini" alt="">
                        @else
                        <img src="https://static.vecteezy.com/system/resources/previews/002/002/257/non_2x/beautiful-woman-avatar-character-icon-free-vector.jpg" class="avatar_mini" alt="">
                        @endif


                        <div >
                            <small>{{$item->frnd->name}}</small>
                            <small class="text-success d-block">Online</small>
                        </div>

                    </div>
                </li>
                @endforeach

            </ul>

        </div>
    </div>
</div>

</div>

@endsection

