@extends('layouts.master')
@section('title','Tablef2')
@section('header')
@endsection
@section('content')
        <!-- <div class="col-xl-12 mb-2">
            <button class="btn btn-warning float-right mb-2" data-toggle="modal" data-target="#elementdstrModal">Add</button>
        </div> -->
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
        </div><br/><br/><br/><br/>
        <div class="col-xl-12 table-responsive p-0">
            <table id="zero_config" class="table-striped table-bordered" style="width:100%;font-size:14px">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Кодструктуры</th>
                        <th>КлассСвязиПК</th>
                        <th>КодПК_1</th>
                        <th>КодПК_2</th>
                        <th>КодПК_3</th>
                        <th>НаименованиеСвязиПК</th>
                        <th>ТипСвязиПК</th>
                        <th>ОценкаСвязиПК</th>
                        <th>КодСвязиПК</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if(count($tablef2) > 0)
                        @foreach($tablef2 as $key=>$tablef1)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$tablef1->Кодструктуры}}</td>
                                <td>{{$tablef1->КлассСвязиПК}}</td>
                                <td>{{$tablef1->КодПК_1}}</td>
                                <td>{{$tablef1->КодПК_2}}</td>
                                <td>{{$tablef1->КодПК_3}}</td>
                                <td>{{$tablef1->НаименованиеСвязиПК}}</td>
                                <td>{{$tablef1->ТипСвязиПК}}</td>
                                <td>{{$tablef1->ОценкаСвязиПК}}</td>
                                <td>{{$tablef1->КодСвязиПК}}</td>
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