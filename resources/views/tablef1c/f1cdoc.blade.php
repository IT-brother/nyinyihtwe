@extends('layouts.master')
@section('title','Tablef1c')
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
                        <th>КодПК</th>
                        <th>НаименованиеПК</th>
                        <th>КлассПК</th>
                        <th>ТипПК</th>
                        <th>СтатусПК</th>
                        <th>ОценкаПК</th>
                        <th>ПримечаниекПК</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if(count($tablef1s) > 0)
                        @foreach($tablef1s as $key=>$tablef1)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$tablef1->Кодструктуры}}</td>
                                <td>{{$tablef1->КодПК}}</td>
                                <td>{{$tablef1->НаименованиеПК}}</td>
                                <td>{{$tablef1->КлассПК}}</td>
                                <td>{{$tablef1->ТипПК}}</td>
                                <td>{{$tablef1->ТипПК}}</td>
                                <td>{{$tablef1->СтатусПК}}</td>
                                <td>{{$tablef1->ПримечаниекПК}}</td>
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
        
@endsection
@section("script")

@endsection