@extends('layouts.master')
@section('title','Category list')
@section('header')
    <div class="col-7 align-self-center">
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Category List</h4>
        <!-- <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Apps</a></li>
                    <li class="breadcrumb-item text-muted active" aria-current="page">Category List</li>
                </ol>
            </nav>
        </div> -->
    </div>
    <div class="col-5 align-self-center">
        <div class="customize-input float-right">
            <button data-toggle="modal" data-target="#create_category_modal" class="custom-select-set form-control bg-white border-0 custom-shadow custom-radius" title="Create New Category">
                CREATE NEW <i class="fa fa-plus text-success"></i>
            </button>
        </div>
    </div>
    @if(session('status'))
        <div class="offset-lg-4 col-lg-4 alert alert-success p-2">{{session('status')}}</div>
    @endif
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered no-wrap">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                    @if(Auth::user()->name=="admin")
                        <th style="width:100px;max-width:100px;">Edit/Delete</th>
                    @elseif(Auth::user()->name!="admin")
                        <th style="width:100px;max-width:100px;">Edit</th>
                    @endif
                    </tr>
                </thead>
                <tbody>
                    @if(count($categories) > 0)
                        @foreach($categories as $key=>$category)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->created_at}}</td>
                            <td>{{$category->updated_at}}</td>
                            <td>
                            <!--<button data-toggle="modal" data-target="#edit_category_modal" class="btn btn-primary text-white" id="getcateid" > <i class="fa fa-edit"></i> Edit  </button>-->
                                <button class="btn btn-primary"><a href="{{url(Auth::user()->roles->name.'/categories/'.$category->id)}}"  class="text-white" ><i class="fa fa-edit"></i> Edit </a> </button>
                                @if(Auth::user()->name=="admin")
                                    <!-- <button class="btn btn-danger"><a href="{{url(Auth::user()->roles->name.'/categories/delete/'.$category->id)}}" data-id="{{$category->id}}" class="text-white category-delete"><i class="fa fa-times"></i> Delete </a> </button> -->
                                    <button class="btn btn-danger"><a href="#" data-id="{{$category->id}}" class="text-white category-delete"><i class="fa fa-times"></i> Delete </a></button>
                                                                      
                                @endif
                                
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" style="text-align:center">There is no category</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <ul class="pagination float-left">
                {{$categories->links()}}
            </ul>
        </div>
    </div>
</div>
<!--create modal --->
<div class="modal" id="create_category_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title text-info" id="createLabgroupLabel">CREATE CATEGORY</h5>
                    <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="col-form-label">Category<b class="text-danger">*</b></label>
                        <input type="text" class="form-control" autocomplete="off" name="name" id="name" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section("script")
    <script>
        var baseUrl = '{{url("admin/categories")}}';
        $(document).ready(function(){
            $(document).on("click",".category-delete",function(){
                var id = $(this).data("id");
                var conf = confirm("Are  you sure want to delete?");
                if(conf ==  true)
                {
                    $.ajax({
                        url: baseUrl+'/delete/'+id,
                       // url: {{url("Auth::user()->roles->name.")}}'/users/delete/'+id,
                        type: "GET",
                        data: {
                            "_token": "{{ csrf_token() }}",
                          },
                        cache:false,
                        processData:false,
                        contentType:false,
                        success:function(response)
                        {
                            if(response.status == true)
                            {
                                alert(response.msg);
                                window.location.href=baseUrl;
                                // window.location.href=baseUrl+"/users";
                            }
                        }
                    });
                }
            });
        });
    </script>
@endsection