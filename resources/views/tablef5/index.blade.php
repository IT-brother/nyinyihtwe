@extends('layouts.master')
@section('title','Tablef5')
@section('header')
    @include('menu')
@endsection
@section('content')
        <div class="col-xl-12 mb-2">
            <button class="btn btn-warning float-right mb-2" data-toggle="modal" data-target="#compositionkmstModal">Добавление данных для F5</button>
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
            <table id="zero_config" style="font-size:14px" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>КодКМ </th>
                        <th>КодСтатСтруктуры</th>
                        <th>КодДинСтруктуры</th>
                        <th>КодСтруктурыУвязки</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if(count($tablef5) > 0)
                        @foreach($tablef5 as $key=>$compositionkms)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$compositionkms->КодКМ}}</td>
                                <td><a href="{{url('/structure/'.$compositionkms->КодСтатСтруктуры)}}">{{$compositionkms->КодСтатСтруктуры}}</a></td>
                                <td><a href="{{url('/structure/'.$compositionkms->КодДинСтруктуры)}}">{{$compositionkms->КодДинСтруктуры}}</a></td>
                                <td><a href="{{url('/structure/'.$compositionkms->КодСтруктурыУвязки)}}">{{$compositionkms->КодСтруктурыУвязки}}</a></td>
                                <td>
                                    <button class="btn btn-success edit" data-id="{{$compositionkms}}">Редактирование</button>
                                    <button class="btn btn-danger delete" data-id="{{$compositionkms->id}}">Удаление</button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" style="text-align:center"> There is no record</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <!-- modals --->
        <div class="modal fade" id="compositionkmstModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form method="POST">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create New resource</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="КОДКМ">КОДКМ <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" required autocomplete="off" name="КОДКМ" id="КОДКМ">
                            </div>
                            <div class="form-group">
                                <label for="КОДСТАТСТРУКТУРЫ">КОДСТАТСТРУКТУРЫ <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" required autocomplete="off" name="КОДСТАТСТРУКТУРЫ" id="КОДСТАТСТРУКТУРЫ">
                            </div>
                            <div class="form-group">
                                <label for="КОДДИНСТРУКТУРЫ">КОДДИНСТРУКТУРЫ <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="КОДДИНСТРУКТУРЫ" id="КОДДИНСТРУКТУРЫ" required autocomplete="off" >
                            </div>
                            <div class="form-group">
                                <label for="КОДСТРУКТУРЫУВЯЗКИ">КОДСТРУКТУРЫУВЯЗКИ <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="КОДСТРУКТУРЫУВЯЗКИ" id="КОДСТРУКТУРЫУВЯЗКИ" required autocomplete="off" >
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
        <div class="modal fade" id="compositionkmstEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form method="POST" id="tablef5Form">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Добавление данных F5</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="КОДКМ">КОДКМ <b class="text-danger">*</b></label>
                                <input type="hidden" id="tablef5">
                                <input type="text" class="form-control" required autocomplete="off" name="КодКМ" id="uКодКМ">
                            </div>
                            <div class="form-group">
                                <label for="КОДСТАТСТРУКТУРЫ">КОДСТАТСТРУКТУРЫ <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" required autocomplete="off" name="КодСтатСтруктуры" id="uКодСтатСтруктуры">
                            </div>
                            <div class="form-group">
                                <label for="КОДДИНСТРУКТУРЫ">КОДДИНСТРУКТУРЫ <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="КодДинСтруктуры" id="uКодДинСтруктуры" required autocomplete="off" >
                            </div>
                            <div class="form-group">
                                <label for="КОДСТРУКТУРЫУВЯЗКИ">КОДСТРУКТУРЫУВЯЗКИ <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="КодСтруктурыУвязки" id="uКодСтруктурыУвязки" required autocomplete="off" >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
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
        $("#compositionkmstEditModal").modal("show");
        var data= $(this).data("id");
        console.log(data.КодКМ);
        $("#tablef5").val(data.id);
        $("#uКодКМ").val(data.КодКМ);
        $("#uКодСтатСтруктуры").val(data.КодСтатСтруктуры);
        $("#uКодДинСтруктуры").val(data.КодДинСтруктуры);
        $("#uКодСтруктурыУвязки").val(data.КодСтруктурыУвязки);
    });
    $(document).on("submit","#tablef5Form",function(ev){
        ev.preventDefault();
            var id = $("#tablef5").val();
            var formdata = new FormData(this);
            $.ajax({
                url: baseUrl+'/tablef5/'+id+'/update',
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
            var id = $(this).data("id");
            var formdata = new FormData();
            $.ajax({
                url: baseUrl+'/tablef5/'+id+'/delete',
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
     });
  });
</script>
@endsection
<style type="text/css">
     .F5Link{
         color:#0099FF !important;
     }
</style>