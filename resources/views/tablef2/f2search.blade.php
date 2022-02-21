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
        <div class="col-xl-12 table-responsive p-0">
            <h4>Table F2</h4>
            <table id="zero_config" class="table table-striped table-bordered">
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
                        <th>Action</th>
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
                                <td>
                                    <button class="btn btn-success">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="11" style="text-align:center"> There is no record</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="col-xl-12">
            <div class="row">
                <form method="GET"  action="{{url('/f2search')}}"  class="col-xl-12 row">
                    <input type="hidden" name="Кодструктуры" value="{{request()->Кодструктуры}}">
                    <input type="hidden" name="КодПК" value="{{request()->КодПК}}">
                    <div class="form-group col-xl-3">
                        <label for="codestructure" class="control-label">Кодструктуры</label>
                        <select class="form-control bg-white" name="codestructure" id="codestructure">
                            <option vlaue=""></option>
                            @if(count($codestructure) > 0)
                                @foreach($codestructure as $key=>$tablef)
                                    
                                        <option value="{{$tablef->Кодструктуры}}">{{$tablef->Кодструктуры}}</option>
                                    
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group col-xl-3">
                        <label for="codepk" class="control-label">КодПК</label>
                        <select class="form-control bg-white" name="codepk" id="codepk">
                            <option vlaue=""></option>
                            @if(count($codepk) > 0)
                                @foreach($codepk as $key=>$tablef)
                                    
                                        <option value="{{$tablef->КодПК}}">{{$tablef->КодПК}}</option>
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
            <table id="zero_config" class="table table-striped table-bordered">
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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if(count($tablef2c) > 0)
                        @foreach($tablef2c as $key=>$tablef1)
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
                                <td>
                                    <button class="btn btn-success">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="11" style="text-align:center"> There is no record</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
@endsection
@section("script")

@endsection