@extends('layouts.master')
@section('title','Tablef6')
@section('header')
@endsection
@section('content')
        <div class="col-xl-12 mb-2">
            <button class="btn btn-warning float-right mb-2" data-toggle="modal" data-target="#f6Modal">Заполнение с текущим кодов структуры</button>
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
            <table id="zero_config" style="width:100%;font-size:14px;" class="table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Кодструктуры</th>
                        <th>КодПЗ1</th>
                        <th>СтруктурноеСвойствоПЗ1</th>
                        <th>КодПК</th>
                        <th>РольПК</th>
                        <th>СтруктурноеСвойствоПК</th>
                        <th>ОбъемноеСвойствоПК</th>
                        <th>ОсобаяРольПК</th>
                        <!-- <th>Action</th> -->
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if(count($tablef6s) > 0)
                        @foreach($tablef6s as $key=>$tablef6)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$tablef6->Кодструктуры}}</td>
                                <td><a href="{{url('/f6c/'.$tablef6->КодПЗ1.'/'.$tablef6->КодПК)}}">{{$tablef6->КодПЗ1}}</a></td>
                                <td>{{$tablef6->СтруктурноеСвойствоПЗ1}}</td>
                                <td><a href="{{url('tablef12/'.$tablef6->КодПК)}}">{{$tablef6->КодПК}}</a></td>
                                <td>{{$tablef6->РольПК}}</td>
                                <td>{{$tablef6->СтруктурноеСвойствоПК}}</td>
                                <td>{{$tablef6->ОбъемноеСвойствоПК}}</td>
                                <td>{{$tablef6->ОсобаяРольПК}}</td>
                                <!-- <td>
                                    <button class="btn btn-success">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td> -->
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

        <!-- modals --->
        <div class="modal fade" id="f6Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <form method="POST">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title" id="exampleModalLabel">Добавление данных для заполнения таблицы F6</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body row">
                            <div class="form-group col-xl-6">
                                <label for="Кодструктуры">Кодструктуры <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" value="{{request()->id}}" required autocomplete="off" name="Кодструктуры" id="Кодструктуры">
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="КодПЗ1">КодПЗ1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control"  required autocomplete="off" name="КодПЗ1" id="КодПЗ1">
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="СтруктурноеСвойствоПЗ1">СтруктурноеСвойствоПЗ1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="СтруктурноеСвойствоПЗ1" id="СтруктурноеСвойствоПЗ1" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="КодПК">КодПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="КодПК" id="КодПК" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="РольПК">СтатусПЗ1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="РольПК" id="РольПК" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="СтруктурноеСвойствоПК">СтруктурноеСвойствоПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="СтруктурноеСвойствоПК" id="СтруктурноеСвойствоПК" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="ОбъемноеСвойствоПК">ОбъемноеСвойствоПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="ОбъемноеСвойствоПК" id="ОбъемноеСвойствоПК" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="ОсобаяРольПК">ОсобаяРольПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="ОсобаяРольПК" id="ОсобаяРольПК" required autocomplete="off" >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
@section("script")

@endsection