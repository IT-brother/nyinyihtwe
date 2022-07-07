@extends('layouts.master')
@section('title','W2 Table')
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
        <div class="col-xl-12 mb-2">
            <a href="{{url('w2table/asc')}}" style="color:white">ASC</a> | 
            <a href="{{url('w2table/desc')}}" style="color:white">DESC</a>
            
        </div>
        <div class="col-xl-12 table-responsive p-0">
            <table id="zero_config" class="table-striped table-bordered" style="width:100%;font-size:14px">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Кодструктуры</th>
                        <th>КодПЗ1</th>
                        <th>Структурное</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if(count($w2tables) > 0)
                        @foreach($w2tables as $key=>$w2table)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$w2table["codepz"]}}</td>
                                <td>{{$w2table["codelevel"]}}</td>
                                <td>{{$w2table["codeposition"]}}</td>
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
        <div class="col-xl-12  p-0">
                <h4>Table F3</h4>
            <table id="zero_config" class="table-bordered table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Кодструктуры</th>
                        <th>КодПЗ1</th>
                        <th style="width:350px;">НаименованиеПЗ</th>
                        <th>Степень
                            формализации</th>
                        <th>СтатусПЗ1</th>
                        <th>Структурное
                            СвойствоПЗ1</th>
                        <th>Примечание
                            ПЗ1</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if(count($tablef3s) > 0)
                        @foreach($tablef3s as $key=>$tablef3)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$tablef3["Кодструктуры"]}}</td>
                                <td><a href="{{url('/w2table')}}">{{$tablef3->КодПЗ1}}</a></td>
                                <td><a href="{{url('/tablef62/'.$tablef3->КодПЗ1)}}">{{$tablef3->КодПЗ1}}</a></td> 

                                <td style="width:250px;max-width:250px !important;">{{$tablef3->НаименованиеПЗ}}</td>
                                <td>{{$tablef3->Степеньформализации}}</td>
                                <td>{{$tablef3->СтатусПЗ1}}</td>
                                <td>{{$tablef3->СтруктурноеСвойствоПЗ1}}</td>
                                <td>{{$tablef3->ПримечаниеПЗ1}}</td>
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

@endsection