@extends('layouts.master')
@section('title','F1Link')
@section('header')
    @include('menu')
    @include('menuf1f2')
@endsection
@section('content')
        <div class="col-xl-12">
            @if(count($errors->all()) > 0)
                <div class="alert alert-danger w-50">{{implode(",",$errors->all())}}</div>
            @endif
            @if(session("error"))
                <div class="alert alert-error w-50">{{session('error')}}</div>
            @endif
            
        </div>
        <div class="col-xl-12 mb-2">
            <button class="btn btn-success float-right mb-2" style="background:#47cf73" data-toggle="modal" data-target="#f2LinkModal">Добавление данных для F2</button>
        </div>
        <div class="col-xl-12 table-responsive p-0">
            @if(session("status"))
                <div class="alert alert-success w-50">{{session('status')}}</div>
            @endif
            <table id="zero_config" class="table-striped table-bordered" style="width:100%;font-size:14px">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>КлассСвязиПК</th>
                        <th>КодПК_1</th>
                        <th>КодПК_2</th>
                        <th>КодПК_3</th>
                        <th>НаименованиеСвязиПК</th>
                        <th>ТипСвязиПК</th>
                        <th>ОценкаСвязиПК</th>
                        <th>КодСвязиПК</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if(count($tablef2Link) > 0)
                        @foreach($tablef2Link as $key=>$tablef1)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$tablef1->КлассСвязиПК}}</td>
                                <td>{{$tablef1->КодПК_1}}</td>
                                <td>{{$tablef1->КодПК_2}}</td>
                                <td>{{$tablef1->КодПК_3}}</td>
                                <td>{{$tablef1->НаименованиеСвязиПК}}</td>
                                <td>{{$tablef1->ТипСвязиПК}}</td>
                                <td>{{$tablef1->ОценкаСвязиПК}}</td>
                                <td>{{$tablef1->КодСвязиПК}}</td>
                                <td>
                                    <button class="btn btn-success edit" data-id="{{$tablef1}}">Редактирование</button>
                                    <button class="btn btn-danger delete" data-id="{{$tablef1->idtablef2}}">Удаление</button>
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
         <div class="modal fade" id="f2LinkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <form method="POST">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title" id="exampleModalLabel">Добавление данных для заполнения таблицы F2</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body row">
                            <div class="form-group col-xl-6">
                                <label for="КлассСвязиПК">КлассСвязиПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control"  required autocomplete="off" name="КлассСвязиПК" id="КлассСвязиПК">
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="КодПК_1">КодПК_1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="КодПК_1" id="КодПК_1" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="КодПК_2">КодПК_2 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="КодПК_2" id="КодПК_2" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="КодПК_3">КодПК_3 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="КодПК_3" id="КодПК_3" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="НаименованиеСвязиПК">НаименованиеСвязиПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="НаименованиеСвязиПК" id="НаименованиеСвязиПК" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="ТипСвязиПК">ТипСвязиПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="ТипСвязиПК" id="ТипСвязиПК" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="ОценкаСвязиПК">ОценкаСвязиПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="ОценкаСвязиПК" id="ОценкаСвязиПК" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="КодСвязиПК">КодСвязиПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="КодСвязиПК" id="КодСвязиПК" required autocomplete="off" >
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
        <div class="modal fade" id="f2LinkModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <form method="POST" id="tablef2LinkForm">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title" id="exampleModalLabel">Редактирование данных для заполнения таблицы F2</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body row">
                        <div class="form-group col-xl-6">
                                <input type="hidden" id="idtablef2" name="idtablef2">
                                <label for="uКлассСвязиПК">КлассСвязиПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control"  required autocomplete="off" name="КлассСвязиПК" id="uКлассСвязиПК">
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="uКодПК_1">КодПК_1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="КодПК_1" id="uКодПК_1" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="uКодПК_2">КодПК_2 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="КодПК_2" id="uКодПК_2" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="uКодПК_3">КодПК_3 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="КодПК_3" id="uКодПК_3" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="uНаименованиеСвязиПК">НаименованиеСвязиПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="НаименованиеСвязиПК" id="uНаименованиеСвязиПК" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="uТипСвязиПК">ТипСвязиПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="ТипСвязиПК" id="uТипСвязиПК" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="uОценкаСвязиПК">ОценкаСвязиПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="ОценкаСвязиПК" id="uОценкаСвязиПК" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="uКодСвязиПК">КодСвязиПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="КодСвязиПК" id="uКодСвязиПК" required autocomplete="off" >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Выход</button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Редактировать</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection

@section("script")
<script>
$(document).ready(function(){
    var baseUrl = '{{url('')}}'
    $(document).on("click",".edit",function(){
        console.log(JSON.stringify($(this).data("id")));
        $("#f2LinkModalEdit").modal("show");
        var data= $(this).data("id");
        console.log(data.КодПК);
        $("#idtablef2").val(data.idtablef2);
        $("#uКлассСвязиПК").val(data.КлассСвязиПК);
        $("#uКодПК_1").val(data.КодПК_1);
        $("#uКодПК_2").val(data.КодПК_2);
        $("#uКодПК_3").val(data.КодПК_3);
        $("#uНаименованиеСвязиПК").val(data.НаименованиеСвязиПК);
        $("#uТипСвязиПК").val(data.ТипСвязиПК);
        $("#uОценкаСвязиПК").val(data.ОценкаСвязиПК);
        $("#uКодСвязиПК").val(data.КодСвязиПК);

    });
    $(document).on("submit","#tablef2LinkForm",function(ev){
        ev.preventDefault();
            var id = $("#idtablef2").val();
            var formdata = new FormData(this);
            $.ajax({
                url: baseUrl+'/F2Link/'+id+'/update',
                type: "POST",
                data: formdata,
                cache:false,
                contentType:false,
                processData:false,
                success: function(response) {
                    console.log(response);
                    if(response.status == true)
                    {
                        alert(response.msg);
                        window.location.reload();
                    }else
                    {
                        alert("Fail");
                    }
                }
            });
     });
     $(document).on("click",".delete",function(ev){
        ev.preventDefault();
            var conf = confirm("Are you Sure want to delete?");
            var id = $(this).data("id");
            var formdata = new FormData();
            $.ajax({
                url: baseUrl+'/F2Link/'+id+'/delete',
                type: "GET",
                data: formdata,
                cache:false,
                contentType:false,
                processData:false,
                success: function(response) {
                    console.log(response);
                    if(response.status == true)
                    {
                        alert(response.msg);
                        window.location.reload();
                    }else
                    {
                        alert("Fail");
                    }
                }
            });
     });
  });
</script>
@endsection
 <style type="text/css">
     .F2Link{
         color:#0099FF !important;
     }
</style>
