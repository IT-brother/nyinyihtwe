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
Route::post("/subjecttask",[App\Http\Controllers\SubjectTaskController::class,'store']);
Route::get("/modelzadachi/{id}",[App\Http\Controllers\ModelZadachiController::class,'index']);
Route::post("/modelzadachi/{id}",[App\Http\Controllers\ModelZadachiController::class,'store2']);
Route::get("/km/{id}",[App\Http\Controllers\KmController::class,'index']);
Route::post("/km/{id}",[App\Http\Controllers\KmController::class,'store2']);

Route::get("/compositionkmst/{id}",[App\Http\Controllers\CompositionkmstController::class,'index']);
Route::post("/compositionkmst/{id}",[App\Http\Controllers\CompositionkmstController::class,'store2'])->name('compositionkmst.storeData');

Route::get("/structure/{id}",[App\Http\Controllers\StructureController::class,'index']);
Route::post("/structure/{id}",[App\Http\Controllers\StructureController::class,'store2'])->name('structure.storeData');

Route::get("/elementdstr/{id}",[App\Http\Controllers\ElementdstrController::class,'index']);
Route::post("/elementdstr/{id}",[App\Http\Controllers\ElementdstrController::class,'store2'])->name('elementdstr.storeData');
Route::get("/tablef3c/{id}",[App\Http\Controllers\Tablef3cController::class,'index']);
Route::get("/tablef1/{id}",[App\Http\Controllers\Tablef1Controller::class,'index']);
Route::get("/tablef3/{id}",[App\Http\Controllers\Tablef3Controller::class,'index']);
Route::post("/tablef3/{id}",[App\Http\Controllers\Tablef3Controller::class,'store']);
Route::post("/tablef3/create",[App\Http\Controllers\Tablef3Controller::class,'f3create']);

Route::post("/tablef3c/{id}",[App\Http\Controllers\Tablef3cController::class,'store']);

Route::get("/tablef6/{id}",[App\Http\Controllers\Tablef6Controller::class,'index']);
Route::get("/tablef1c/{id}",[App\Http\Controllers\Tablef1cController::class,'index']);
Route::get("/tablef6c/{id}",[App\Http\Controllers\Tablef6cController::class,'index']);
Route::get("/f3c",[App\Http\Controllers\Tablef3cController::class,'show']);
Route::get("/f3",[App\Http\Controllers\Tablef3Controller::class,'f3show']);

Route::get("/codepz/{sort?}",[App\Http\Controllers\CodepzController::class,'index']);
Route::get("/codepz/{id}/delete",[App\Http\Controllers\CodepzController::class,'delete']);
Route::get("/codepz_tablef3c/{id}",[App\Http\Controllers\Tablef3cController::class,'codepz_tablef3c']);
Route::post("/codepz_tablef3c/{id}",[App\Http\Controllers\Tablef3cController::class,'store']);

Route::get("/f3c2",[App\Http\Controllers\Tablef3cController::class,'f3c2']);
Route::get("/f6/{id}",[App\Http\Controllers\Tablef6Controller::class,'f6']);
Route::get("/f6c/{id}",[App\Http\Controllers\Tablef6cController::class,'f6c']);
Route::post("/f6c/{id}",[App\Http\Controllers\Tablef6cController::class,'f6cStore']);
Route::get("/f1/{id}",[App\Http\Controllers\Tablef1Controller::class,'f1']);

//Route::get("/diagnoses/{filename}",[App\Http\Controllers\InformationController::class,'download']);