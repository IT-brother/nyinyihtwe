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
@endsection
@section("script")

@endsection