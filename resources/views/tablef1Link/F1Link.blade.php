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
            <button class="btn btn-success float-right mb-2" style="background:#47cf73" data-toggle="modal" data-target="#f1LinkModal">Добавление данных для F1</button>
        </div>
        <div class="col-xl-12 table-responsive p-0">
            @if(session("status"))
                <div class="alert alert-success w-50">{{session('status')}}</div>
            @endif
            <table id="zero_config" class="table-bordered table-striped" style="width:100%;font-size:14px;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>КодПК</th>
                        <th>НаименованиеПК</th>
                        <th>КлассПК</th>
                        <th>ТипПК</th>
                        <th>СтатусПК</th>
                        <th>ОценкаПК</th>
                        <th>ПримечаниекПК</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if(count($tablef1Link) > 0)
                        @foreach($tablef1Link as $key=>$tablef1)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$tablef1->КодПК}}</td>
                                <td>{{$tablef1->НаименованиеПК}}</td>
                                <td>{{$tablef1->КлассПК}}</td>
                                <td>{{$tablef1->ТипПК}}</td>
                                <td>{{$tablef1->СтатусПК}}</td>
                                <td>{{$tablef1->ОценкаПК}}</td>
                                <td>{{$tablef1->ПримечаниекПК}}</td>
                                <td>
                                    <button class="btn btn-success edit" data-id="{{$tablef1}}">Редактирование</button>
                                    <button class="btn btn-danger delete" data-id="{{$tablef1->idtablef1}}">Удаление</button>
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
         <div class="modal fade" id="f1LinkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <form method="POST">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title" id="exampleModalLabel">Добавление данных для заполнения таблицы F1</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body row">
                            
                            <div class="form-group col-xl-6">
                                <label for="КодПК">КодПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" value="{{request()->id}}"   required autocomplete="off" name="КодПК" id="КодПК">
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
                                <select name="ТипПК" id="ТипПК"  class="form-control" required>
                                    <option value=""></option>
                                    <option value="T-терминальная">T-терминальная</option>
                                    <option value="NT-нетерминальная">NT-нетерминальная</option>
                                </select>
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
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal fade" id="f1LinkModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <form method="POST" id="tablef1LinkForm">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title" id="exampleModalLabel">Редактирование данных для заполнения таблицы F1</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body row">
                            
                            <div class="form-group col-xl-6">
                                <input type="hidden" name="idtablef1" id="idtablef1">
                                <label for="uКодПК">КодПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control"   required autocomplete="off" name="КодПК" id="uКодПК">
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="uНаименованиеПК">НаименованиеПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="НаименованиеПК" id="uНаименованиеПК" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="uКлассПК">КлассПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="КлассПК" id="uКлассПК" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="uТипПК">ТипПК <b class="text-danger">*</b></label>
                                <select name="ТипПК" id="uТипПК"  class="form-control" required>
                                    <option value=""></option>
                                    <option value="T-терминальная">T-терминальная</option>
                                    <option value="NT-нетерминальная">NT-нетерминальная</option>
                                </select>
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="uСтатусПК">СтатусПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="СтатусПК" id="uСтатусПК" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="uОценкаПК">ОценкаПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="ОценкаПК" id="uОценкаПК" required autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="uПримечаниекПК">ПримечаниекПК <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="ПримечаниекПК" id="uПримечаниекПК" required autocomplete="off" >
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
        $("#f1LinkModalEdit").modal("show");
        var data= $(this).data("id");
        console.log(data.КодПК);
        $("#idtablef1").val(data.idtablef1);
        $("#uКодПК").val(data.КодПК);
        $("#uНаименованиеПК").val(data.НаименованиеПК);
        $("#uКлассПК").val(data.КлассПК);
        $("#uТипПК").val(data.ТипПК);
        $("#uСтатусПК").val(data.СтатусПК);
        $("#uОценкаПК").val(data.ОценкаПК);
        $("#uПримечаниекПК").val(data.ПримечаниекПК);

    });
    $(document).on("submit","#tablef1LinkForm",function(ev){
        ev.preventDefault();
            var id = $("#idtablef1").val();
            var formdata = new FormData(this);
            $.ajax({
                url: baseUrl+'/F1Link/'+id+'/update',
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
                url: baseUrl+'/F1Link/'+id+'/delete',
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
     .F1Link{
         color:#0099FF !important;
     }
</style>
