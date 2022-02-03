<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/hash', function () {
    return view('auth.login');
});

Route::get("/logout",[App\Http\Controllers\Auth\LoginController::class,'logout']);
Auth::routes();
Route::get("/start",[App\Http\Controllers\StartPageController::class,'index']);
Route::post("/start",[App\Http\Controllers\StartPageController::class,'store']);
Route::get("/selectmenu",[App\Http\Controllers\StartPageController::class,'show']);
Route::get("/subjecttask",[App\Http\Controllers\SubjectTaskController::class,'index']);
Route::get("/modelzadachi/{id}",[App\Http\Controllers\ModelZadachiController::class,'index']);


//Route::get("/diagnoses/{filename}",[App\Http\Controllers\InformationController::class,'download']);