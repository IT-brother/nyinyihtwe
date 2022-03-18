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
        <div class="col-xl-12 mb-2">
            <button class="btn btn-warning float-right mb-2" data-toggle="modal" data-target="#tableF3Modal">Заполнение с текущим кодов структуры</button>
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
        <br/><br/><br/>
        <div class="col-xl-12 table-responsive p-0 mt-3">
            <table id="zero_config" class="table-striped table-bordered" style="width:100%;font-size:14px">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Кодструктуры</th>
                        <th>КодПЗ1</th>
                        <th style="width:250px;max-width:250px !important;">НаименованиеПЗ</th>
                        <th>Степень
                            формализации</th>
                        <th>СтатусПЗ1</th>
                        <th>Структурное
                            СвойствоПЗ1</th>
                        <th>ПримечаниеПЗ1</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @if(count($tablef3s) > 0)
                        @foreach($tablef3s as $key=>$tablef3)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$tablef3->Кодструктуры}}</td>
                                <td><a href="#" data-toggle="modal" data-target="#codepzModal" class="codepz">{{$tablef3->КодПЗ1}}</a></td>
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
        <div class="modal fade" id="tableF3Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <form method="POST" id="tablef3Form">
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
                                <input type="text" class="form-control" required autocomplete="off" name="КОДСТРУКТУРЫ" id="КОДСТРУКТУРЫ">
                            </div>
                            <div class="form-group col-xl-6">
                                <label for="КОДПЗ1">КОДПЗ1 <b class="text-danger">*</b></label>
                                <input type="text" class="form-control" required autocomplete="off" name="КОДПЗ1" id="КОДПЗ1">
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
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal fade" id="codepzModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form method="POST">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Добавление КодПЗ1 из таблицы F3</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <center><p class="clickedTxt"></p></center>
                            <input type="hidden" class="myTxt" name="codepz">
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
            $.ajax({
                url: baseUrl+'/tablef3/create',
                type: "POST",
                data: formdata,
                cache:false,
                contentType:false,
                processData:false,
                success: function(response) {
                    if(response.status == true)
                    {
                        //window.location.reload();
                        alert("Successfully deleted!");
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