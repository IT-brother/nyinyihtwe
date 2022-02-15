@extends('layouts.master')
@section('title','Codepz')
@section('header')
@endsection
@section('content')
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
    <div class="col-xl-12">
            <a href="{{url('/codepz/?sort=asc')}}" class="text-white">ASC</a> | <a href="{{url('/codepz/?sort=desc')}}" class="text-white">DESC</a>
    </div>
<div class="col-xl-12 table-responsive p-0">
    <table id="zero_config" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>КодПрЗ</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @if(count($codepzs) > 0)
                @foreach($codepzs as $key=>$codepz)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td><a href="{{url('/codepz_tablef3c/'.$codepz->КодПЗ1)}}">{{$codepz->КодПЗ1}}</a></td>
                        <td>
                            <button class="btn btn-success">Edit</button>
                            <button class="btn btn-danger delete" id="{{$codepz->id}}">Delete</button>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="3" style="text-align:center"> There is no record</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
@section("script")
<script>
    $(document).ready(function(){
        var baseUrl = '{{url('')}}'
        $(document).on("click",".delete",function(event){
            event.preventDefault();
            var id = $(this).attr("id");
            alert(id);
            var formdata = new FormData();
            formdata.append("id",id);
            $.ajax({
                url: baseUrl+'/codepz/'+id+'/delete',
                type: "GET",
                data: formdata,
                cache:false,
                contentType:false,
                processData:false,
                success: function(response) {
                    if(response.status == true)
                    {
                        window.location.reload();
                        alert("Successfully deleted!");
                    }
                }
            });
        });
        
    });
</script>
@endsection