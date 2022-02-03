@extends('layouts.master')
@section('title','compositionkmst')
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
                        <th>КодКМ </th>
                        <th>КодСтатСтруктуры</th>
                        <th>КодДинСтруктуры</th>
                        <th>КодСтруктурыУвязки</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if(count($compositionkmst) > 0)
                        @foreach($compositionkmst as $key=>$compositionkms)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td><a href="{{url('compositionkmst/'.$compositionkms->КодКМ)}}">{{$compositionkms->КодКМ}}</a></td>
                                <td>{{$compositionkms->КодСтатСтруктуры}}</td>
                                <td>{{$compositionkms->КодДинСтруктуры}}</td>
                                <td>{{$compositionkms->КодСтруктурыУвязки}}</td>
                                <td>
                                    <button class="btn btn-success">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" style="text-align:center"> There is no record</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
@endsection
@section("script")

@endsection