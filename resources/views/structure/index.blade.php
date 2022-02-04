@extends('layouts.master')
@section('title','structure')
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
                        <th>ТипСтруктуры</th>
                        <th>РодСтруктуры</th>
                        <th>ВидСтруктуры</th>
                        <th>КоличествоЭлструктуры</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if(count($structures) > 0)
                        @foreach($structures as $key=>$structure)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td><a href="{{url('/elementdstr/'.$structure->КодСтруктуры)}}">{{$structure->КодСтруктуры}}</a></td>
                                <td>{{$structure->ТипСтруктуры}}</td>
                                <td>{{$structure->РодСтруктуры}}</td>
                                <td>{{$structure->ВидСтруктуры}}</td>
                                <td>{{$structure->КоличествоЭлструктуры}}</td>
                                <td>
                                    <button class="btn btn-success">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7" style="text-align:center"> There is no record</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
@endsection
@section("script")

@endsection