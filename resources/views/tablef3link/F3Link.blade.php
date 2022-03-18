@extends('layouts.master')
@section('title','F3Link')
@section('header')
    @include('menu')
    @include('menu2f3')
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
            <button class="btn btn-success float-right mb-2" style="background:#47cf73" data-toggle="modal" data-target="#f3LinkModal">Добавление данных для F3</button>
        </div>
        <div class="col-xl-12 table-responsive p-0">
            @if(session("status"))
                <div class="alert alert-success w-50">{{session('status')}}</div>
            @endif
            <table id="zero_config" style="width:100%;font-size:14px" class="table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>КодПЗ1</th>
                        <th>НаименованиеПЗ</th>
                        <th>Степеньформализации	</th>
                        <th>СтатусПЗ1</th>
                        <th>СтруктурноеСвойствоПЗ1</th>
                        <th>ПримечаниеПЗ1</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if(count($tablef3Link) > 0)
                        @foreach($tablef3Link as $key=>$tablef1)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$tablef1->КодПЗ1}}</td>
                                <td>{{$tablef1->НаименованиеПЗ}}</td>
                                <td>{{$tablef1->Степеньформализации}}</td>
                                <td>{{$tablef1->СтатусПЗ1}}</td>
                                <td>{{$tablef1->СтруктурноеСвойствоПЗ1}}</td>
                                <td>{{$tablef1->ПримечаниеПЗ1}}</td>
                                <td>
                                    <button class="btn btn-success edit" data-id="{{$tablef1}}">Редактирование</button>
                                    <button class="btn btn-danger delete" data-id="{{$tablef1->idtablef3}}">Удаление</button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8" style="text-align:center"> There is no record</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
         <!-- modals --->
         <div class="modal fade" id="f3LinkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <form method="POST">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title" id="exampleModalLabel">Добавление данных для заполнения таблицы F3</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body row">
                            <div class="form-group col-xl-6">
                                <label for="КодПЗ1">КодПЗ1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control"  required autocomplete="off" name="КодПЗ1" id="КодПЗ1">
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="НаименованиеПЗ">НаименованиеПЗ <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="НаименованиеПЗ" id="НаименованиеПЗ" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="Степеньформализации">Степеньформализации <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="Степеньформализации" id="Степеньформализации" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="СтатусПЗ1">СтатусПЗ1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="СтатусПЗ1" id="СтатусПЗ1" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="СтруктурноеСвойствоПЗ1">СтруктурноеСвойствоПЗ1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="СтруктурноеСвойствоПЗ1" id="СтруктурноеСвойствоПЗ1" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="ПримечаниеПЗ1">ПримечаниеПЗ1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="ПримечаниеПЗ1" id="ПримечаниеПЗ1" required autocomplete="off" >
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
        <div class="modal fade" id="f3LinkModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <form method="POST" id="tablef3LinkForm">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title" id="exampleModalLabel">Редактирование данных для заполнения таблицы F3</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body row">
                        <div class="form-group col-xl-6">
                                <label for="КодПЗ1">КодПЗ1 <b class="text-danger">*</b></label>
                                <input type="hidden" name="idtablef3" id="idtablef3">
                                <input type="text" class="form-control"  required autocomplete="off" name="КодПЗ1" id="uКодПЗ1">
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="НаименованиеПЗ">НаименованиеПЗ <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="НаименованиеПЗ" id="uНаименованиеПЗ" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="Степеньформализации">Степеньформализации <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="Степеньформализации" id="uСтепеньформализации" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="СтатусПЗ1">СтатусПЗ1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="СтатусПЗ1" id="uСтатусПЗ1" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="СтруктурноеСвойствоПЗ1">СтруктурноеСвойствоПЗ1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="СтруктурноеСвойствоПЗ1" id="uСтруктурноеСвойствоПЗ1" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="ПримечаниеПЗ1">ПримечаниеПЗ1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="ПримечаниеПЗ1" id="uПримечаниеПЗ1" required autocomplete="off" >
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
        $("#f3LinkModalEdit").modal("show");
        var data= $(this).data("id");
        console.log(data.КодПЗ1);
        $("#idtablef3").val(data.idtablef3);
        $("#uКодПЗ1").val(data.КодПЗ1);
        $("#uНаименованиеПЗ").val(data.НаименованиеПЗ);
        $("#uСтепеньформализации").val(data.Степеньформализации);
        $("#uСтатусПЗ1").val(data.СтатусПЗ1);
        $("#uСтруктурноеСвойствоПЗ1").val(data.СтруктурноеСвойствоПЗ1);
        $("#uПримечаниеПЗ1").val(data.ПримечаниеПЗ1);

    });
    $(document).on("submit","#tablef3LinkForm",function(ev){
        ev.preventDefault();
            var id = $("#idtablef3").val();
            var formdata = new FormData(this);
            $.ajax({
                url: baseUrl+'/F3Link/'+id+'/update',
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
                url: baseUrl+'/F3Link/'+id+'/delete',
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
     .F3Link{
         color:#0099FF !important;
     }
</style>
