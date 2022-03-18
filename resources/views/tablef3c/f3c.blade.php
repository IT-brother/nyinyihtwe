@extends('layouts.master')
@section('title','F3c')
@section('header')
@endsection
@section('content')
        <!-- <div class="col-xl-12 mb-2">
            <button class="btn btn-warning float-right mb-2" data-toggle="modal" data-target="#elementdstrModal">Add</button>
        </div> -->
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
                        <th>КодСтруктуры</th>
                        <th>КодПЗ1</th>
                        <th>НаименованиеПЗ1</th>
                        <th>Степеньформализации</th>
                        <th>СтатусПЗ1</th>
                        <th>СтруктурноеCвойствоПЗ1</th>
                        <th>ПримечаниеПЗ1</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if(count($elementdstrs) > 0)
                        @foreach($elementdstrs as $key=>$elementdstr)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$elementdstr->Кодструктуры}}</td>
                                <td>{{$elementdstr->КодПЗ1}}</td>
                                <td>{{$elementdstr->НаименованиеПЗ1}}</td>
                                <td>{{$elementdstr->Степеньформализации}}</td>
                                <td>{{$elementdstr->СтатусПЗ1}}</td>
                                <td>{{$elementdstr->СтруктурноеCвойствоПЗ1}}</td>
                                <td>{{$elementdstr->ПримечаниеПЗ1}}</td>
                                
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8" style="text-align:center"> There is no record</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

        <!-- modals --->
        <div class="modal fade" id="elementdstrModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <label for="КОДСТРУКТУРЫ">КОДСТРУКТУРЫ <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" required autocomplete="off" name="КОДСТРУКТУРЫ" id="КОДСТРУКТУРЫ">
                            </div>
                            <div class="form-group">
                                <label for="КОДПЗ1">КОДПЗ1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" required autocomplete="off" name="КОДПЗ1" id="КОДПЗ1">
                            </div>
                            <div class="form-group">
                                <label for="НАИМЕНОВАНИЕПЗ1">НАИМЕНОВАНИЕПЗ1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="НАИМЕНОВАНИЕПЗ1" id="НАИМЕНОВАНИЕПЗ1" required autocomplete="off" >
                            </div>
                            <div class="form-group">
                                <label for="СТЕПЕНЬФОРМАЛИЗАЦИИ">СТЕПЕНЬФОРМАЛИЗАЦИИ <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="СТЕПЕНЬФОРМАЛИЗАЦИИ" id="СТЕПЕНЬФОРМАЛИЗАЦИИ" required autocomplete="off" >
                            </div>
                            <div class="form-group">
                                <label for="СТАТУСПЗ1">СТАТУСПЗ1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="СТАТУСПЗ1" id="СТАТУСПЗ1" required autocomplete="off" >
                            </div>
                            <div class="form-group">
                                <label for="СТРУКТУРНОЕCВОЙСТВОПЗ1">СТРУКТУРНОЕCВОЙСТВОПЗ1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="СТРУКТУРНОЕCВОЙСТВОПЗ1" id="СТРУКТУРНОЕCВОЙСТВОПЗ1" required autocomplete="off" >
                            </div>
                            <div class="form-group">
                                <label for="ПРИМЕЧАНИЕПЗ1">ПРИМЕЧАНИЕПЗ1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="ПРИМЕЧАНИЕПЗ1" id="ПРИМЕЧАНИЕПЗ1" required autocomplete="off" >
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