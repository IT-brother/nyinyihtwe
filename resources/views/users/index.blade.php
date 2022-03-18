@extends('layouts.master')
@section('title','Tablef6c')
@section('header')
@endsection
@section('content')
        <div class="col-xl-12 mb-2">
            <button class="btn btn-warning float-right mb-2" data-toggle="modal" data-target="#f6cModal">Add</button>
        </div>
        <div class="col-xl-12 table-responsive p-0">
            <table id="zero_config" class="table table-striped table-bordered">
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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                   
                </tbody>
            </table>
        </div>

       
@endsection
@section("script")

@endsection