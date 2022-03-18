@extends('layouts.master')
@section('title','F6Link')
@section('header')
    @include('menu')
    @include('menu3f6')
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
            <button class="btn btn-success float-right mb-2" style="background:#47cf73" data-toggle="modal" data-target="#f6LinkModal">Добавление данных для F6</button>
        </div>
        <div class="col-xl-12 table-responsive p-0">
            @if(session("status"))
                <div class="alert alert-success w-50">{{session('status')}}</div>
            @endif
            <table id="zero_config" style="width:100%;font-size:14px;" class="table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>КодПЗ1</th>
                        <th>СтруктурноеСвойствоПЗ1</th>
                        <th>КодПК	</th>
                        <th>РольПК</th>
                        <th>СтруктурноеСвойствоПК</th>
                        <th>ОбъемноеСвойствоПК</th>
                        <th>ОсобаяРольПК</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if(count($tablef6Link) > 0)
                        @foreach($tablef6Link as $key=>$tablef1)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$tablef1->КодПЗ1}}</td>
                                <td>{{$tablef1->СтруктурноеСвойствоПЗ1}}</td>
                                <td>{{$tablef1->КодПК}}</td>
                                <td>{{$tablef1->РольПК}}</td>
                                <td>{{$tablef1->СтруктурноеСвойствоПК}}</td>
                                <td>{{$tablef1->ОбъемноеСвойствоПК}}</td>
                                <td>{{$tablef1->ОсобаяРольПК}}</td>
                                <td>
                                    <button class="btn btn-success edit" data-id="{{$tablef1}}">Редактирование</button>
                                    <button class="btn btn-danger delete" data-id="{{$tablef1->idtablef6}}">Удаление</button>
                                </td>
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
         <div class="modal fade" id="f6LinkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <div class="modal fade" id="f6LinkModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <form method="POST" id="tablef6LinkForm">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title" id="exampleModalLabel">Редактирование данных для заполнения таблицы F6</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body row">
                        <div class="form-group col-xl-6">
                                <label for="КодПЗ1">КодПЗ1 <b class="text-danger">*</b></label>
                                <input type="hidden" name="idtablef6" id="idtablef6">
                                <input type="text" class="form-control"  required autocomplete="off" name="КодПЗ1" id="uКодПЗ1">
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="СтруктурноеСвойствоПЗ1">СтруктурноеСвойствоПЗ1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="СтруктурноеСвойствоПЗ1" id="uСтруктурноеСвойствоПЗ1" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="КодПК">КодПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="КодПК" id="uКодПК" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="РольПК">РольПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="РольПК" id="uРольПК" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="СтруктурноеСвойствоПК">СтруктурноеСвойствоПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="СтруктурноеСвойствоПК" id="uСтруктурноеСвойствоПК" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="ОбъемноеСвойствоПК">ОбъемноеСвойствоПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="ОбъемноеСвойствоПК" id="uОбъемноеСвойствоПК" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="ОсобаяРольПК">ОсобаяРольПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="ОсобаяРольПК" id="uОсобаяРольПК" required autocomplete="off" >
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
        $("#f6LinkModalEdit").modal("show");
        var data= $(this).data("id");
        console.log(data.КодПЗ1);
        $("#idtablef6").val(data.idtablef6);
        $("#uКодПЗ1").val(data.КодПЗ1);
        $("#uСтруктурноеСвойствоПЗ1").val(data.СтруктурноеСвойствоПЗ1);
        $("#uКодПК").val(data.КодПК);
        $("#uРольПК").val(data.РольПК);
        $("#uСтруктурноеСвойствоПК").val(data.СтруктурноеСвойствоПК);
        $("#uОбъемноеСвойствоПК").val(data.ОбъемноеСвойствоПК);
        $("#uОсобаяРольПК").val(data.ОсобаяРольПК);
    });
    $(document).on("submit","#tablef6LinkForm",function(ev){
        ev.preventDefault();
            var id = $("#idtablef6").val();
            var formdata = new FormData(this);
            $.ajax({
                url: baseUrl+'/F6Link/'+id+'/update',
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
                url: baseUrl+'/F6Link/'+id+'/delete',
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
     .F6Link{
         color:#0099FF !important;
     }
</style>
