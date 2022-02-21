@extends('layouts.master')
@section('title','Tablef1c')
@section('header')
@endsection
@section('content')
        <div class="col-xl-12 mb-2">
            <button class="btn btn-warning float-right mb-2" data-toggle="modal" data-target="#f1cModal">Add</button>
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

        <!-- modals --->
        <div class="modal fade" id="f1cModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <form method="POST">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create New resource</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body row">
                            <div class="form-group col-xl-6">
                                <label for="КОДСТРУКТУРЫ">КОДСТРУКТУРЫ <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" value="{{request()->Кодструктуры}}" readonly required autocomplete="off" name="Кодструктуры" id="КОДСТРУКТУРЫ">
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="КодПК">КодПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" value="{{request()->КодПК}}" readonly required autocomplete="off" name="КодПК" id="КодПК">
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="НаименованиеПК">НаименованиеПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="НаименованиеПК" id="НаименованиеПК" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="КлассПК">КлассПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="КлассПК" id="КлассПК" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="ТипПК">ТипПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="ТипПК" id="ТипПК" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="СтатусПК">СтатусПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="СтатусПК" id="СтатусПК" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="ОценкаПК">ОценкаПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="ОценкаПК" id="ОценкаПК" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="ПримечаниекПК">ПримечаниекПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="ПримечаниекПК" id="ПримечаниекПК" required autocomplete="off" >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
@section("script")

@endsection