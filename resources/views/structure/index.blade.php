@extends('layouts.master')
@section('title','structure')
@section('header')
@endsection
@section('content')
        <div class="col-xl-12 mb-2">
            <button class="btn btn-warning float-right mb-2" data-toggle="modal" data-target="#structureModal">Add</button>
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
                            <?php 
                            $last3Char = substr($structure->КодСтруктуры, -3);
                            if($last3Char == "1-c")
                            {
                                $link ="/tablef1c/".$structure->КодСтруктуры;

                            }else if($last3Char == "1-v")
                            {
                                $link ="/tablef1/".$structure->КодСтруктуры;

                            }else if($last3Char == "3-c")
                            {
                                $link ="/tablef3c/".$structure->КодСтруктуры;
                            }else if($last3Char == "3-v")
                            {
                                $link ="/tablef3/".$structure->КодСтруктуры;
                            }else if($last3Char == "5-c")
                            {
                                $link ="/tablef6c/".$structure->КодСтруктуры;
                            }else if($last3Char == "5-v")
                            {
                                $link ="/tablef6/".$structure->КодСтруктуры;
                            }
                            ?>
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td><a href="{{url($link)}}">{{$structure->КодСтруктуры}}</a></td>
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
        <!-- modals --->
        <div class="modal fade" id="structureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form method="POST">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Create New resource</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="КОДСТРУКТУРЫ">КОДСТРУКТУРЫ <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" required autocomplete="off" name="КОДСТРУКТУРЫ" id="КОДСТРУКТУРЫ">
                            </div>
                            <div class="form-group">
                                <label for="ТИПСТРУКТУРЫ">ТИПСТРУКТУРЫ <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" required autocomplete="off" name="ТИПСТРУКТУРЫ" id="ТИПСТРУКТУРЫ">
                            </div>
                            <div class="form-group">
                                <label for="РОДСТРУКТУРЫ">РОДСТРУКТУРЫ <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="РОДСТРУКТУРЫ" id="РОДСТРУКТУРЫ" required autocomplete="off" >
                            </div>
                            <div class="form-group">
                                <label for="КОЛИЧЕСТВОЭЛСТРУКТУРЫ">КОЛИЧЕСТВОЭЛСТРУКТУРЫ <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="КОЛИЧЕСТВОЭЛСТРУКТУРЫ" id="КОЛИЧЕСТВОЭЛСТРУКТУРЫ" required autocomplete="off" >
                            </div>
                            <div class="form-group">
                                <label for="ВИДСТРУКТУРЫ1">V <b class="text-danger">*</b></label>
                                <input type="radio"  name="ВИДСТРУКТУРЫ" value="v" required autocomplete="off" id="ВИДСТРУКТУРЫ1">
                                <label for="ВИДСТРУКТУРЫ2">C <b class="text-danger">*</b></label>
                                <input type="radio"  name="ВИДСТРУКТУРЫ" value="c" required autocomplete="off" id="ВИДСТРУКТУРЫ2">
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