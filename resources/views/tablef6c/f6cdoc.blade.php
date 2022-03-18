@extends('layouts.master')
@section('title','Tablef6c')
@section('header')
@endsection
@section('content')
        <div class="col-xl-12">
            <a href="{{url('f1doc')}}" class="text-white">F1</a> |
            <a href="{{url('f1cdoc')}}" class="text-white">F1c</a> |
            <a href="{{url('f2doc')}}" class="text-white">F2</a> |
            <a href="{{url('f2cdoc')}}" class="text-white">F2c</a> |
            <a href="{{url('f3c')}}" class="text-white">F3c</a> |
             <a href="{{url('f3')}}" class="text-white">F3</a> |
             <a href="{{url('f4')}}" class="text-white">F4</a> |
             <a href="{{url('f4c')}}" class="text-white">F4c</a> |
             <a href="{{url('f6')}}" class="text-white">F6</a> |
             <a href="{{url('f6c')}}" class="text-white">F6c</a> |
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
            <table id="zero_config" class="table-striped table-bordered" style="width:100%;font-size:14px">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Кодструктуры</th>
                        <th>КодПЗ1</th>
                        <th>СтруктурноеСвойствоПЗ1</th>
                        <th>КодПК</th>
                        <th>РольПК</th>
                        <th>СтруктурноеСвойствоПК</th>
                        <th>ОбъемноеСвойствоПК</th>
                        <th>ОсобаяРольПК</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if(count($tablef6cs) > 0)
                        @foreach($tablef6cs as $key=>$tablef6c)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$tablef6c->Кодструктуры}}</td>
                                <td>{{$tablef6c->КодПЗ1}}</td>
                                <td>{{$tablef6c->СтруктурноеСвойствоПЗ1}}</td>
                                <td>{{$tablef6c->КодПК}}</td>
                                <td>{{$tablef6c->РольПК}}</td>
                                <td>{{$tablef6c->СтруктурноеСвойствоПК}}</td>
                                <td>{{$tablef6c->ОбъемноеСвойствоПК}}</td>
                                <td>{{$tablef6c->ОсобаяРольПК}}</td>
                                <td>
                                    <button class="btn btn-success">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="10" style="text-align:center"> There is no record</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

        <!-- modals --->
        <div class="modal fade" id="f6cModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <label for="Кодструктуры">КОДСТРУКТУРЫ <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" required autocomplete="off" name="Кодструктуры" id="Кодструктуры">
                            </div>
                            <div class="form-group">
                                <label for="КОДПЗ1">КодПЗ1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" required autocomplete="off" name="КодПЗ1" id="КодПЗ1">
                            </div>
                            <div class="form-group">
                                <label for="СтруктурноеСвойствоПЗ1">СтруктурноеСвойствоПЗ1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="СтруктурноеСвойствоПЗ1" id="СтруктурноеСвойствоПЗ1" required autocomplete="off" >
                            </div>
                            <div class="form-group">
                                <label for="КодПК">КодПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="КодПК" id="КодПК" required autocomplete="off" >
                            </div>
                            <div class="form-group">
                                <label for="РольПК">РольПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="РольПК" id="РольПК" required autocomplete="off" >
                            </div>
                            <div class="form-group">
                                <label for="СтруктурноеСвойствоПК">СтруктурноеСвойствоПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="СтруктурноеСвойствоПК" id="СтруктурноеСвойствоПК" required autocomplete="off" >
                            </div>
                            <div class="form-group">
                                <label for="ОбъемноеСвойствоПК">ОбъемноеСвойствоПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="ОбъемноеСвойствоПК" id="ОбъемноеСвойствоПК" required autocomplete="off" >
                            </div>
                            <div class="form-group">
                                <label for="ОсобаяРольПК">ОсобаяРольПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="ОсобаяРольПК" id="ОсобаяРольПК" required autocomplete="off" >
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