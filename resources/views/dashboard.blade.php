@extends('layouts.master')
@section('title','Admin dashboard')
@section('header')
    <div class="col-7 align-self-center">
        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Dashboard</h4>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Apps</a></li>
                    <li class="breadcrumb-item text-muted active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
    </div>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <div class="p-2 bg-primary text-center">
                            <h1 class="font-light text-white">2,064</h1>
                            <h6 class="text-white">Total Tickets</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <div class="p-2 bg-cyan text-center">
                            <h1 class="font-light text-white">1,738</h1>
                            <h6 class="text-white">Responded</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <div class="p-2 bg-success text-center">
                            <h1 class="font-light text-white">1100</h1>
                            <h6 class="text-white">Resolve</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3 col-xlg-3">
                    <div class="card card-hover">
                        <div class="p-2 bg-danger text-center">
                            <h1 class="font-light text-white">964</h1>
                            <h6 class="text-white">Pending</h6>
                        </div>
                    </div>
                </div>
            <!-- Column -->
            </div>
        </div>
    </div>
@endsection