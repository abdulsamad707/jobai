@extends('backend_app.admin.layouts.template')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>Form Examples</h2>
                    <ul class="breadcrumb padding-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Form Examples</li>
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
                        <h2><strong>Add</strong> Course</h2>
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
                        <form>
                            <label for="email_address">Course Name</label>
                            <div class="form-group">
                                <input type="text" id="text" class="form-control" placeholder="Enter your email address">
                            </div>
                            <label for="email_address">Featured Image</label>
                            <div class="form-group">
                                <input type="file" id="text" class="form-control" placeholder="Enter your email address">
                            </div>
                            <label for="email_address">Featured Video</label>
                            <div class="form-group">
                                <input type="file" id="text" class="form-control" placeholder="Enter link of feature">
                            </div>
                            <label for="email_address">Description</label>
                            <div class="form-group">
                              <textarea name="" class="form-control" id="ckeditor" cols="30" rows="5"></textarea>
                            </div>
                            <label for="email_address">Excerpt</label>
                            <div class="form-group">
                                <textarea name="" class="form-control border rounded-3"  cols="30" rows="3"></textarea>
                            </div>



                            <button type="button" class="btn btn-raised btn-primary btn-round waves-effect">Submit</button>
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
