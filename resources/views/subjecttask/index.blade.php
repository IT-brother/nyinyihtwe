@extends('layouts.master')
@section('title','subjecttask')
@section('header')
@endsection
@section('content')
<!-- <div class="col-xl-12 bg-white mb-2 pt-3" style="border-radius:15px 15px 0px 0px">
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
    
</div> -->
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
                        <th>КодПрЗ</th>
                        <th>НаименованиеПрЗ</th>
                        <th>КоличествоСтатКМвПрЗ</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if(count($subjecttasks) > 0)
                        @foreach($subjecttasks as $key=>$subjecttask)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td><a href="{{url('/modelzadachi/'.$subjecttask->КодПрЗ)}}">{{$subjecttask->КодПрЗ}}</a></td>
                                <td>{{$subjecttask->НаименованиеПрЗ}}</td>
                                <td>{{$subjecttask->КоличествоСтатКМвПрЗ}}</td>
                                <td>
                                    <button class="btn btn-success">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" style="text-align:center"> There is no record</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
@endsection
@section("script")

@endsection