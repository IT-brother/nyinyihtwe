@extends('layouts.master')
@section('title','Admin dashboard')
@section('header')

@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <div class="p-2 bg-primary text-center">
                            <h1 class="font-light text-white"></h1>
                            <h6 class="text-white"><a href="{{url('/subjecttask')}}" class="text-white"> Выделение статистических предметных зависимостей и их предварительная </a></h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <div class="p-2 bg-info text-center">
                            <h1 class="font-light text-white"></h1>
                            <h6 class="text-white"> Определение содержания для упорядоченного множества стаистических ПЗ 1-го рода</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <div class="p-2 bg-success text-center">
                            <h1 class="font-light text-white"></h1>
                            <h6 class="text-white"> Формирование  концептуальных структур для всех статистических ПЗ-1-го рода</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <div class="p-2 bg-danger text-center">
                            <h1 class="font-light text-white"></h1>
                            <h6 class="text-white"> Определение типологии для сформированных концептуальных структур всех статистических ПЗ-1-го рода</h6>
                        </div>
                    </div>
                </div> 
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <div class="p-2 bg-danger text-center">
                            <h1 class="font-light text-white"></h1>
                            <h6 class="text-white"><a href="{{url('/f3c')}}" class="text-white"> Документирование моделей для всех стат. ПЗ </a></h6>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
@endsection
@section("script")
<script>
  
</script>
@endsection