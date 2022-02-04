@extends('layouts.master')
@section('title','subjecttask')
@section('header')
@endsection
@section('content')   
        <div class="col-xl-12 mb-2">
            <button class="btn btn-warning float-right mb-2" data-toggle="modal" data-target="#subjecttaskModal">Add</button>
        </div>
        <div class="col-xl-12 table-responsive p-0">
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
    <!-- modals --->
    <div class="modal fade" id="subjecttaskModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <label for="КодПрЗ">КодПрЗ <b class="text-danger">*</b></label>
                            <input type="text" class="form-control" required autocomplete="off" name="КодПрЗ" id="КодПрЗ">
                        </div>
                        <div class="form-group">
                            <label for="НаименованиеПрЗ">НаименованиеПрЗ <b class="text-danger">*</b></label>
                            <input type="text" class="form-control" name="НаименованиеПрЗ" required autocomplete="off" id="НаименованиеПрЗ">
                        </div>
                        <div class="form-group">
                            <label for="КоличествоСтатКМвПрЗ">КоличествоСтатКМвПрЗ <b class="text-danger">*</b></label>
                            <input type="text" class="form-control" name="КоличествоСтатКМвПрЗ" required autocomplete="off" id="КоличествоСтатКМвПрЗ">
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

@endsection