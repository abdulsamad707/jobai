@extends('backend_app.admin.layouts.template')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>Tables Filter</h2>
                    <ul class="breadcrumb padding-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Tables Filter</li>
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
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">

                    <div class="header">
                        <h2><strong>User</strong> Accounts</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-filter table-hover m-b-0">
                               <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Image</th>

                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Bar</th>
                                    <th>Status</th>
                                    <th>Action</th>



                                </tr>
                               </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr data-status="approved">
                                        <td>1</td>
                                        <td><div class="media-object"><img src="https://img.freepik.com/free-psd/3d-illustration-person-with-sunglasses_23-2149436188.jpg?size=626&ext=jpg" alt="" width="35px" class="rounded-circle border p-1"></div></td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td width="250px">
                                            <div class="progress">
                                                <div class="progress-bar l-green" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%;"></div>
                                            </div>
                                        </td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td class="float-left">
                                           <a class="button button-small " href="{{route('destroy-user',['id'=>$item->id])}}" title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
