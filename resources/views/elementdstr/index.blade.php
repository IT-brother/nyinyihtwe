@extends('layouts.master')
@section('title','Elementdstr')
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
        <div class="col-xl-12 table-responsive p-0">
            <table id="zero_config" class="table table-striped table-bordered">
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
                        <th>Action</th>
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