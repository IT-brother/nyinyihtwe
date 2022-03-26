@extends('layouts.master')
@section('title','Tablef3')
@section('header')
<style type="text/css">
    table {
            border-spacing: 0px;
            table-layout: fixed;
            margin-left: auto;
            margin-right: auto;
        }
       
        td {
            -ms-word-break: break-all !important;
            word-break: break-all !important;
            word-break: break-word !important;
        }
</style>
@endsection
@section('content')
        <!-- <div class="col-xl-12 mb-2">
            <button class="btn btn-warning float-right mb-2" data-toggle="modal" data-target="#tableF3Modal">Заполнение с текущим кодов структуры</button>
        </div> -->
        <div class="col-xl-12 bg-white mb-2 pt-3" style="border-radius:15px 15px 0px 0px">
            <form class="row" method="GET"> 
                @csrf 
                <div class="form-group col-md-6 col-lg-3 pb-0">
                    <label for="title" class="control-label" style="margin:0px;padding:0;font-size:1.2em;color:#666;">КОДСТРУКТУРЫ</label>
                    <select style="background:#eee" name="Кодструктуры" autocomplete="off" class="mt-0 form-control">
                        <option value="">Choose</option>
                        @foreach($tablef3s as $key=>$code)
                            @if($key == 0)
                                @if($code->Кодструктуры == request()->Кодструктуры)
                                    <option value="{{$code->Кодструктуры}}" selected>{{$code->Кодструктуры}}</option>
                                @else
                                    <option value="{{$code->Кодструктуры}}">{{$code->Кодструктуры}}</option>
                                @endif
                            @endif
                        @endforeach
                    </select>
                </div>
                <?php
                    $lists = array(
                        "Аналит","Алг","Эмп","Стат"
                    );
                ?>
                <div class="form-group col-md-6 col-lg-3 m-0 pb-0">
                    <label for="name" class="control-label" style="margin:0px;padding:0;font-size:1.2em;color:#666;">СТЕПЕНЬФОРМАЛИЗАЦИИ	 </label>
                    <select  name="Степеньформализации" style="background:#eee" id="name" autocomplete="off" class="form-control">
                        <option value="">Choose</option>
                        @foreach($lists as $list)
                            @if($list == request()->Степеньформализации)
                                <option value="{{$list}}" selected>{{$list}}</option>
                            @else
                                <option value="{{$list}}">{{$list}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <?php
                    $sorts = array(
                        "Возрастание","Убывание"
                    );
                ?>
                <div class="form-group col-md-6 col-lg-3 m-0 pb-0">
                    <label for="sort" class="control-label" style="margin:0px;padding:0;font-size:1.2em;color:#666;">Упорядочение	 </label>
                    <select  name="sort" style="background:#eee" id="sort" autocomplete="off" class="form-control">
                        <option value="">Choose</option>
                        @foreach($sorts as $sort)
                            @if($sort == request()->sort)
                                <option value="{{$sort}}" selected>{{$sort}}</option>
                            @else
                                <option value="{{$sort}}">{{$sort}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6 col-lg-3 mt-0 pt-0">
                    <label for="" class="control-label mt-0">&nbsp;&nbsp;</label>
                    <button type="submit"  value="Save" class="btn btn-primary mt-4"><i class="fa fa-search"></i> выбрать</button>
                </div>
            </form>
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
        <div class="col-xl-12  p-0">
                <h4>Table F3</h4>
            <table id="zero_config" class="table-bordered table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Кодструктуры</th>
                        <th>КодПЗ1</th>
                        <th style="width:350px;">НаименованиеПЗ</th>
                        <th>Степень
                            формализации</th>
                        <th>СтатусПЗ1</th>
                        <th>Структурное
                            СвойствоПЗ1</th>
                        <th>Примечание
                            ПЗ1</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if(count($tablef3s) > 0)
                        @foreach($tablef3s as $key=>$tablef3)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$tablef3->Кодструктуры}}</td>
                                <td><a href="{{url('/tablef62/'.$tablef3->КодПЗ1)}}">{{$tablef3->КодПЗ1}}</a></td>
                                <td style="width:250px;max-width:250px !important;">{{$tablef3->НаименованиеПЗ}}</td>
                                <td>{{$tablef3->Степеньформализации}}</td>
                                <td>{{$tablef3->СтатусПЗ1}}</td>
                                <td>{{$tablef3->СтруктурноеСвойствоПЗ1}}</td>
                                <td>{{$tablef3->ПримечаниеПЗ1}}</td>
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
        <div class="col-xl-12  p-0">
                <h4>Table F3C</h4>
            <table id="zero_config" class="table-bordered table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Кодструктуры</th>
                        <th>КодПЗ1</th>
                        <th style="width:350px;">НаименованиеПЗ</th>
                        <th>Степень
                            формализации</th>
                        <th>СтатусПЗ1</th>
                        <th>Структурное
                            СвойствоПЗ1</th>
                        <th>Примечание
                            ПЗ1</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if(count($tablef3c) > 0)
                        @foreach($tablef3c as $key=>$tablef3)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td data-id="{{$tablef3}}" class="edit" style="color:#0099FF;text-decoration:underline;cursor:pointer;">{{$tablef3->Кодструктуры}}</td>
                                <td>{{$tablef3->КодПЗ1}}</td>
                                <td style="width:250px;max-width:250px !important;">{{$tablef3->НаименованиеПЗ1}}</td>
                                <td>{{$tablef3->Степеньформализации}}</td>
                                <td>{{$tablef3->СтатусПЗ1}}</td>
                                <td>{{$tablef3->СтруктурноеСвойствоПЗ1}}</td>
                                <td>{{$tablef3->ПримечаниеПЗ1}}</td>
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
        <div class="modal fade" id="tableF3cModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <form method="POST" id="tablef3Form">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Заполнение спецификации с текушем Код структуры </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body row">
                            <div class="form-group col-xl-6">
                                <input type="hidden" name="idtablef3c" id="idtablef3c">
                                <label for="КОДСТРУКТУРЫ">КОДСТРУКТУРЫ <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" required autocomplete="off" name="mycode" id="КОДСТРУКТУРЫ">
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="КОДПЗ1">КОДПЗ1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" readonly  autocomplete="off" name="КОДПЗ1" id="КОДПЗ1">
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="НаименованиеПЗ">НаименованиеПЗ <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" readonly name="НаименованиеПЗ" id="НаименованиеПЗ"  autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="Степеньформализации">Степеньформализации <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="Степеньформализации" id="Степеньформализации" readonly autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="СтатусПЗ1">СтатусПЗ1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="СтатусПЗ1" id="СтатусПЗ1" readonly autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="СтруктурноеСвойствоПЗ1">СтруктурноеСвойствоПЗ1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="СтруктурноеСвойствоПЗ1" id="СтруктурноеСвойствоПЗ1" readonly autocomplete="off" >
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="ПримечаниеПЗ1">ПримечаниеПЗ1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" name="ПримечаниеПЗ1" id="ПримечаниеПЗ1" readonly autocomplete="off" >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Выход</button>
                            <button type="submit" class="btn btn-primary">Редактирование </button>
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
    $(document).on("click",".codepz",function(){
        //alert($(this).text());
        $(".clickedTxt").text($(this).text());
        $(".myTxt").val($(this).text());
    });
    $(document).on("submit","#tablef3Form",function(ev){
        ev.preventDefault();
            var formdata = new FormData(this);
            var id = $("#idtablef3c").val();
            $.ajax({
                url: baseUrl+'/tablef3c/'+id+'/update',
                type: "POST",
                data: formdata,
                cache:false,
                contentType:false,
                processData:false,
                success: function(response) {
                    console.log(JSON.stringify(response));
                    if(response.status == true)
                    {
                        window.location.reload();
                        alert("Successfully updated!");
                    }else
                    {
                        alert("Fail");
                    }
                }
            });
     });
     $(document).on("click",".edit",function(){
        $("#tableF3cModal").modal("show");
        var data =$(this).data("id");
        $("#idtablef3c").val(data.idtablef3c);
        $("#КОДСТРУКТУРЫ").val(data.Кодструктуры);
        $("#НаименованиеПЗ").val(data.НаименованиеПЗ1);
        $("#Степеньформализации").val(data.Степеньформализации);
        $("#КОДПЗ1").val(data.КодПЗ1);

        $("#СтатусПЗ1").val(data.СтатусПЗ1);
        $("#СтруктурноеСвойствоПЗ1").val(data.СтруктурноеCвойствоПЗ1);
        $("#ПримечаниеПЗ1").val(data.ПримечаниеПЗ1);

     });
  });
</script>
@endsection