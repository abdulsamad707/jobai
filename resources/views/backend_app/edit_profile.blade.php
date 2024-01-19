@extends('backend_app.admin.layouts.template')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>Profile</h2>
                    <ul class="breadcrumb padding-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Profile</a></li>
                        <li class="breadcrumb-item active">Edit Profile</li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="input-group m-b-0">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-search"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vertical Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Edit</strong> Profile</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
									<li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <form action="{{route('update-profile-info',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                @if ($data->avatar === null)
                                <img src="https://img.freepik.com/free-psd/3d-illustration-person-with-sunglasses_23-2149436188.jpg?size=626&ext=jpg" style="height: 150px;" class=" rounded-circle shadow mb-3" alt="">
                                @else
                                <img src="{{asset('assets/user/'.$data->avatar)}}" style="height: 150px;object-fit:cover;" class=" rounded-circle shadow" alt="">
                                @endif
                                <label for="email_address" class="mx-2">Profile Image</label>
                                <input type="file" id="text" name="img" class="form-control w-25">


                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="email_address">Name</label>
                                    <div class="form-group">
                                        <input type="text" id="text" name="name" class="form-control" placeholder="Enter Email" name="email" value="{{$data->name}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="email_address">Email</label>
                                    <div class="form-group">
                                        <input type="text" id="text" name="email" class="form-control" placeholder="Enter Email" name="email" value="{{$data->email}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="email_address">Designation</label>
                                    <div class="form-group">
                                        <input type="text" id="text" name="designation" class="form-control" placeholder="Enter Designation" value="{{$data->designation}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-6">
                                    <label for="email_address">Location</label>
                                    <div class="form-group">
                                        <input type="text" id="text" name="location" class="form-control" placeholder="Enter Location" value="{{$data->location}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="email_address">Company</label>
                                    <div class="form-group">
                                        <input type="text" id="text" name="company" class="form-control" placeholder="Enter Company Name" value="{{$data->company}}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Submit</button>
                        </form>
                                </div>
                            </div>
                            <div class="row">
                               <div class="col-12">
                                <h4>Security</h4>
                               </div>
                            </div>
                            <div class="row">

                                <div class="col-12">
                                    <form action="">
                                    <label for="email_address">Old Password</label>
                                    <div class="form-group">
                                        <input type="text" id="text" name="email" class="form-control" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="email_address">New Password</label>
                                    <div class="form-group">
                                        <input type="text" id="text" name="designation" class="form-control" placeholder="Enter Designation">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="email_address">Confirm Password</label>
                                    <div class="form-group">
                                        <input type="text" id="text" name="designation" class="form-control" placeholder="Enter Designation">
                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Vertical Layout -->
        <!-- Horizontal Layout -->


    </div>
</section>
@endsection

