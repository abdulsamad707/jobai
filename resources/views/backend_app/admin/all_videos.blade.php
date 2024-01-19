@extends('backend_app.admin.layouts.template')
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>All Videos</h2>
                    <ul class="breadcrumb padding-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">All Videos</li>
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
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>All Videos</strong></h2>
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
                        <div class="row">
                            <div class="col-md-12">
                            <a href="{{route('add-video',['id'=>$data])}}" class="btn btn-default pull-right add-row"><i class="fa fa-plus text-white"></i>&nbsp;&nbsp; Add Video</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <table class="table table-bordered" id="editableTable">
                                <thead>
                                <tr>
                                    <th>S.No</th>

                                    <th>Name</th>

                                    <th>Edit</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse ($videos as $key=>$item)
                                <tr >
                                    <td>{{$key}}</td>

                                    <td >{{$item->name}}</td>

                                    </td>


                                    <td>
                                    <a href="{{route('edit-category',['id'=>$item->id])}}" class="button button-small edit" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>

                                    <a href="{{route('Destroy-videos',['id'=>$item->id])}}" class="button button-small edit mx-3" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </a>
                                    </td>
                                </tr>
                                @empty
<tr>
    <td colspan="6">Empty</td>
</tr>
                                @endforelse
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
