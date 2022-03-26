@extends('layouts.master')
@section('title','News list')
@section('header')
@endsection
@section('content')
<div class="col-xl-12 bg-white mb-2 pt-3" style="border-radius:15px 15px 0px 0px">
    <form class="row" method="POST"> 
        @csrf 
        <div class="form-group col-md-6 col-lg-3 pb-0">
            <label for="title" class="control-label" style="margin:0px;padding:0;font-size:1.2em;color:#666;">Name</label>
            <input type="text"  id="title" value="{{Auth::user()->name}}" style="background:#eee" autocomplete="off" class="mt-0 form-control">
        </div>
        <div class="form-group col-md-6 col-lg-6 m-0 pb-0">
            <label for="name" class="control-label" style="margin:0px;padding:0;font-size:1.2em;color:#666;">Project Name </label>
            <input type="text" name="name"  style="background:#eee" id="name" autocomplete="off" class="form-control">
        </div>
        <div class="form-group col-md-6 col-lg-3 mt-0 pt-0">
            <label for="" class="control-label mt-0">&nbsp;&nbsp;</label>
            <button type="submit"  value="Save" class="btn btn-primary mt-4"><i class="fa fa-search"></i> Save</button>
        </div>
    </form>
    
</div>
    <div class="col-xl-12">
        @if(count($errors->all()) > 0)
            <div class="alert alert-danger w-50">{{implode(",",$errors->all())}}</div>
        @endif
        @if(session("error"))
            <div class="alert alert-error w-50">{{session('error')}}</div>
        @endif
        @if(session("status"))
            <div class="alert alert-success w-50">{{session('status')}}</div>
        @endif
    </div>
        <div class="col-xl-12 table-responsive p-0">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Project Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if(count($project_names) > 0)
                        @foreach($project_names as $key=>$project_name)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$project_name->users->name}}</td>
                                <td><a href="{{url('/F1Link')}}">{{$project_name->name}}</a></td>
                                <td>
                                    <button class="btn btn-success pt-1 pb-1 pr-4 pl-4 edit" data-id="{{$project_name}}"><i class="fa fa-edit"></i> Edit</button>
                                    <button class="btn btn-danger pt-1 pb-1 pr-4 pl-4 delete" data-id="{{$project_name}}"><i class="fa fa-times"></i> Delete</button>

                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4" style="text-align:center"> There is no record</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
<!-- modals --->
<div class="modal fade" id="projectNameModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form method="POST" id="editProjectForm">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit project name</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="project_name">Project name <b class="text-danger">*</b></label>
                        <input type="hidden" name="id" id="id" />
                        <input type="text" class="form-control" required autocomplete="off" name="name" id="project_name">
                    </div>
                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section("script")
 <script>
     $(document).ready(function(){
        var baseUrl = '{{url('')}}'
        $(document).on("click",".edit",function(){
            console.log(JSON.stringify($(this).data("id")));
            $("#projectNameModal").modal("show");
            var data= $(this).data("id");
            $("#id").val(data.id);
            $("#project_name").val(data.name);
        });
        $(document).on("submit","#editProjectForm",function(ev){
            ev.preventDefault();
            var id = $("#id").val();
            var formdata = new FormData(this);
           // alert(id);
            $.ajax({
                url: baseUrl+'/start/'+id+'/update',
                type: "POST",
                data: formdata,
                cache:false,
                contentType:false,
                processData:false,
                success: function(response) {
                    console.log(response);
                    if(response.status == true)
                    {
                        alert(response.msg);
                        window.location.reload();
                    }else
                    {
                        alert("Fail");
                    }
                }
            });
        });
        $(document).on("click",".delete",function(ev){
        ev.preventDefault();
            var conf = confirm("Are you Sure want to delete?");
            var data = $(this).data("id");
            var id = data.id;
            var formdata = new FormData();
            if(conf == true)
            {
                $.ajax({
                    url: baseUrl+'/start/'+id+'/delete',
                    type: "GET",
                    data: formdata,
                    cache:false,
                    contentType:false,
                    processData:false,
                    success: function(response) {
                        console.log(response);
                        if(response.status == true)
                        {
                            alert(response.msg);
                            window.location.reload();
                        }else
                        {
                            alert("Fail");
                        }
                    }
                });
            }
        });
     });
</script>
@endsection