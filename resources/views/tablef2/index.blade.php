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
        </div>
        <div class="col-xl-12">
            <div class="row">
                <form method="GET"  action="{{url('/f2search')}}"  class="col-xl-12 row">
                    <div class="form-group col-xl-3">
                        <label for="codestructure" class="control-label">Кодструктуры</label>
                        <select class="form-control bg-white" name="Кодструктуры" id="codestructure">
                            <option vlaue=""></option>
                            @if(count($codestructure) > 0)
                                @foreach($codestructure as $key=>$tablef)
                                    @if($tablef->Кодструктуры == request()->Кодструктуры)
                                        <option value="{{$tablef->Кодструктуры}}" selected>{{$tablef->Кодструктуры}}</option>
                                    @else
                                        <option value="{{$tablef->Кодструктуры}}">{{$tablef->Кодструктуры}}</option>
                                    @endif
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group col-xl-3">
                        <label for="codepk" class="control-label">КодПК</label>
                        <select class="form-control bg-white" name="КодПК" id="codepk">
                            <option vlaue=""></option>
                            @if(count($tablef1) > 0)
                                @foreach($tablef1 as $key=>$tablef)
                                    @if($tablef->КодПК == request()->КодПК)
                                        <option value="{{$tablef->КодПК}}" selected>{{$tablef->КодПК}}</option>
                                    @else
                                        <option value="{{$tablef->КодПК}}">{{$tablef->КодПК}}</option>
                                    @endif
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group col-xl-3 mt-4">
                        <label for="search" class="control-label">&nbsp;</label>
                        <button type="submit" id="search" class="btn btn-info">Добавить </button>
                    </div>    
                </form>
            </div>
        </div>  
        <div class="col-xl-12 table-responsive p-0">
            <h4>Table F1</h4>
            <table id="zero_config" class="table-striped table-bordered" style="width:100%;font-size:14px">
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
                    @if(count($tablef1) > 0)
                        @foreach($tablef1 as $key=>$tablef1)
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