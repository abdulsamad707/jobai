@extends('front_app.layouts.template')
@section('content')
<style>
    .active{
  background:white!important;
  color:black!important;
  /* box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.50), 0px 4px 4px 0px rgba(0, 0, 0, 0.30) inset; */
}
.tabs li{
    cursor: pointer;
}

.avatar-upload {
    position: relative;
    max-width: 205px;
    margin: 50px auto;
    .avatar-edit {
        position: absolute;
        right: 12px;
        z-index: 1;
        top: 10px;
        input {
            display: none;
            + label {
                display: inline-block;
                width: 34px;
                height: 34px;
                margin-bottom: 0;
                border-radius: 100%;
                background: #FFFFFF;
                border: 1px solid transparent;
                box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
                cursor: pointer;
                font-weight: normal;
                transition: all .2s ease-in-out;
                &:hover {
                    background: #f1f1f1;
                    border-color: #d6d6d6;
                }
                &:after {
                    content: "\f040";
                    font-family: 'FontAwesome';
                    color: #757575;
                    position: absolute;
                    top: 10px;
                    left: 0;
                    right: 0;
                    text-align: center;
                    margin: auto;
                }
            }
        }
    }
    .avatar-preview {
        width: 192px;
        height: 192px;
        position: relative;
        border-radius: 100%;
        border: 6px solid #F8F8F8;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
        > div {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    }
}
</style>
<div class="container-fluid px-5 mob-pad bg-white" style="padding-top: 10%;">
    <div class="row">

    <div class="col-lg-3 col-md-3 col-sm-12 ">
        <h2 class="fw-medium">My Profile</h2>

        <div class="border border-dark border-3 bg-white p-3 rounded-3">
            @if ($user->avatar===null)
            <img src="https://play-lh.googleusercontent.com/7Ak4Ye7wNUtheIvSKnVgGL_OIZWjGPZNV6TP_3XLxHC-sDHLSE45aDg41dFNmL5COA" class="rounded-circle w-75 m-auto d-block"  alt="">

            @else
            <img src="{{asset('assets/user/'.$user->avatar)}}" class="rounded-circle  m-auto d-block" style="height: 200px;width:200px;object-fit:cover;"  alt="">
            @endif

        <h6 class="fw-bold text-center fs-4 mt-3"> <span class="text-uppercase">{{$user->name}}</span></h6>
        <small class="fw-bold text-center d-block mt-3"> <span class="text-uppercase">{{$user->designation}}</span></small>

        <div class="row mt-2  ">
            <div class="d-flex flex-row justify-content-center">
                <small class="fw-bold text-center me-2">PEERS</small>
                <div style="border:3px solid black;width:100px;padding:0px;height:1px;margin-top:8px;"></div>
                <small class="ms-2" class=" border-3 fw-bold">406k</small>

            </div>
            <div class="d-flex flex-row justify-content-center mt-2">
                <small class="fw-bold text-center me-2">POSTS</small>
                <div style="border:3px solid black;width:100px;padding:0px;height:1px;margin-top:8px;"></div>
              <small class="ms-2" class=" border-3 fw-bold">{{$postcount}}00K</small>


            </div>



        </div>
        <div class="row pb-5 pt-3">
            <button class="btn btn-success w-75 py-2 m-auto d-block">Edit Profile</button>
            <button class="btn btn-primary w-75 py-2 m-auto d-block mt-2">View my courses</button>
        </div>
    </div>
    </div>
    <div class="col-lg-9 col-sm-9 col-sm-12 mt-3">

        <div class="container-fluid mb-4">
            <div class="row">

            <div class="col-md-12 col-lg-12" >

                <div class="row py-1 rounded-2 bg-light mx-2 shadow p-4">
                    <h2 class="mb-2 fw-medium py-3 text-center">Edit Profile</h2>

                    <div class="col-12">
                        <form action="{{route('update-profile-info',['id'=>$user->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf

                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' id="imageUpload" name="img" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                @if ($user->avatar===null)


                                <div id="imagePreview" style="background-image: url(https://img.freepik.com/free-psd/3d-illustration-person-with-sunglasses_23-2149436188.jpg);">
                                </div>
                                @else
                                <div id="imagePreview" style="background-image: url({{asset('assets/user/'.$user->avatar)}});">
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="" class="fw-medium fs-6">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$user->name}}">
                    </div>
                    <div class="col-6">
                        <label for="" class="fw-medium fs-6">Email</label>
                        <input type="text" class="form-control" name="email" value="{{$user->email}}">
                    </div>

                    <div class="col-6 mt-3">
                        <label for="" class="fw-medium fs-6">Designation</label>
                        <input type="text" class="form-control" name="designation" value="{{$user->designation}}">
                    </div>

                    <div class="col-6 mt-3">
                        <label for="" class="fw-medium fs-6">Location</label>
                        <input type="text" class="form-control" name="location" value="{{$user->location}}">
                    </div>
                    <div class="col-6 mt-3">
                        <label for="" class="fw-medium fs-6">Company</label>
                        <input type="text" class="form-control" name="location" value="{{$user->location}}">
                    </div>
                    <div class="col-12 mt-3">
                        <button class="btn btn-success mt-3 mb-5 px-5">Update</button>
                    </form>
                    </div>

                </div>

                <div class="row py-1 rounded-2 bg-light mx-2 shadow p-4 mt-4">
                    <h2 class="mb-2 fw-medium py-3 text-center mb-3">Security</h2>

                    <div class="col-6">
                        <form action="{{route('update-security',['id'=>$user->id])}}" method="post">
                        @csrf
                        <label for="" class="fw-medium fs-6">New Password</label>
                        <input type="password" class="form-control" name="password" >
                        @error('password')
                        <span class="text-danger">{{$message}}</span>
                @enderror
                    </div>
                    <div class="col-6">
                        <label for="" class="fw-medium fs-6">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                        @error('password_confirmation')
                                <span class="text-danger">{{$message}}</span>
                        @enderror

                    </div>


                    <div class="col-12 mt-3">
                        <button class="btn btn-success mt-3 mb-5 px-5">Update</button>
                    </form>
                    </div>

                </div>



            </div>
        </div>
        </div>




    </div>

</div>

</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
    $(".status_form select").change(function() {
            $(this).closest(".status_form").submit();
        });
    $(document).ready(function() {

        $(".tab-link").click(function() {
            $(".tab-link").removeClass("active"); // Remove active class from all tabs
            $(this).addClass("active"); // Add active class to the clicked tab

            var tab = $(this).data("tab");
            $(".tab-content").hide();
            $("#" + tab).show();
        });

        // Handle tab switching
    });
</script>
@endsection
