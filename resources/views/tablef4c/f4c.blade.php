@extends('layouts.master')
@section('title','F4')
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
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Кодструктуры</th>
                        <th>КодПЗ1_1</th>
                        <th>КодПЗ1_2</th>
                        <th>КодПЗ1_3</th>
                        <th>ОценкаСвязиПЗ1</th>
                        <th>ТипСвязиПЗ1</th>
                        <th>КодСвязиПЗ1</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if(count($tablef4cs) > 0)
                        @foreach($tablef4cs as $key=>$tablef4c)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$tablef4c->Кодструктуры}}</td>
                                <td>{{$tablef4c->КодПЗ1_1}}</td>
                                <td>{{$tablef4c->КодПЗ1_2}}</td>
                                <td>{{$tablef4c->КодПЗ1_3}}</td>
                                <td>{{$tablef4c->ОценкаСвязиПЗ1}}</td>
                                <td>{{$tablef4c->ТипСвязиПЗ1}}</td>
                                <td>{{$tablef4c->КодСвязиПЗ1}}</td>
                                <td>
                                    <button class="btn btn-success">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="9" style="text-align:center"> There is no record</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

@endsection
@section("script")

@endsection