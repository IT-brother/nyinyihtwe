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
Route::post("/start/{id}/update",[App\Http\Controllers\StartPageController::class,'update']);
Route::get("/start/{id}/delete",[App\Http\Controllers\StartPageController::class,'destroy']);

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
Route::get("/tablef12/{id}",[App\Http\Controllers\Tablef1Controller::class,'index2']);

Route::post("/tablef1/{id}",[App\Http\Controllers\Tablef1Controller::class,'store']);
Route::get("/tablef3/{id}",[App\Http\Controllers\Tablef3Controller::class,'index']);
Route::post("/tablef3/{id}",[App\Http\Controllers\Tablef3Controller::class,'store']);
Route::post("/tablef3/create",[App\Http\Controllers\Tablef3Controller::class,'f3create']);
Route::post("/tablef3c/{id}/update",[App\Http\Controllers\Tablef3cController::class,'update']);

Route::post("/tablef3c/{id}",[App\Http\Controllers\Tablef3cController::class,'store']);

Route::get("/tablef6/{id}",[App\Http\Controllers\Tablef6Controller::class,'index']);
Route::post("/tablef6/{id}",[App\Http\Controllers\Tablef6Controller::class,'store']);
Route::get("/tablef1c/{id}",[App\Http\Controllers\Tablef1cController::class,'index']);
Route::get("/tablef6c/{id}",[App\Http\Controllers\Tablef6cController::class,'index']);
Route::get("/f3c",[App\Http\Controllers\Tablef3cController::class,'show']);
Route::get("/f3",[App\Http\Controllers\Tablef3Controller::class,'f3show']);
Route::get("/tablef62/{id}",[App\Http\Controllers\Tablef6Controller::class,'index2']);


Route::get("/codepz/{sort?}",[App\Http\Controllers\CodepzController::class,'index']);
Route::get("/codepz/{id}/delete",[App\Http\Controllers\CodepzController::class,'delete']);
Route::get("/codepz_tablef3c/{id}",[App\Http\Controllers\Tablef3cController::class,'codepz_tablef3c']);
Route::post("/codepz_tablef3c/{id}",[App\Http\Controllers\Tablef3cController::class,'store']);

Route::get("/f3c2",[App\Http\Controllers\Tablef3cController::class,'f3c2']);
Route::get("/codepk/{id}",[App\Http\Controllers\Tablef6Controller::class,'f6']);
Route::get("/f6c/{id}/{id2}",[App\Http\Controllers\Tablef6cController::class,'f6c']);
Route::post("/f6c/{id}",[App\Http\Controllers\Tablef6cController::class,'f6cStore']);
Route::get("/f1/{id}",[App\Http\Controllers\Tablef1Controller::class,'f1']);
Route::post("/f1/{id}",[App\Http\Controllers\Tablef1cController::class,'f1cStore']);
Route::get("/compositionkmst2/{id}",[App\Http\Controllers\CompositionkmstController::class,'index2']);
Route::post("/compositionkmst2/{id}",[App\Http\Controllers\CompositionkmstController::class,'store2'])->name('compositionkmst.storeData');
Route::get("/f6row/{id}",[App\Http\Controllers\Tablef6Controller::class,'f6row']);
Route::get("/f1doc",[App\Http\Controllers\Tablef1Controller::class,'f1Doc']);
Route::get("/f1cdoc",[App\Http\Controllers\Tablef1cController::class,'f1cDoc']);
Route::get("/f2doc",[App\Http\Controllers\Tablef2Controller::class,'f2Doc']);
Route::get("/f2cdoc",[App\Http\Controllers\Tablef2cController::class,'f2cDoc']);


Route::get("/f2",[App\Http\Controllers\Tablef2Controller::class,'f2']);
Route::get("/f2search",[App\Http\Controllers\Tablef2Controller::class,'f2Search']);
Route::get("/f4",[App\Http\Controllers\Tablef4Controller::class,'f4Doc']);
Route::get("/f4c",[App\Http\Controllers\Tablef4cController::class,'f4cDoc']);
Route::get("/f6",[App\Http\Controllers\Tablef6Controller::class,'f6Doc']);
Route::get("/f6c",[App\Http\Controllers\Tablef6cController::class,'f6cDoc']);

Route::get("/F1Link",[App\Http\Controllers\Tablef1linkController::class,'F1Link']);
Route::post("/F1Link",[App\Http\Controllers\Tablef1linkController::class,'F1LinkStore']);
Route::post("/F1Link/{id}/update",[App\Http\Controllers\Tablef1linkController::class,'F1LinkUpdate']);
Route::get("/F1Link/{id}/delete",[App\Http\Controllers\Tablef1linkController::class,'F1LinkDelete']);

Route::get("/F2Link",[App\Http\Controllers\Tablef2linkController::class,'F2Link']);
Route::post("/F2Link",[App\Http\Controllers\Tablef2linkController::class,'F2LinkStore']);
Route::post("/F2Link/{id}/update",[App\Http\Controllers\Tablef2linkController::class,'F2LinkUpdate']);
Route::get("/F2Link/{id}/delete",[App\Http\Controllers\Tablef2linkController::class,'F2LinkDelete']);

Route::get("/F3Link",[App\Http\Controllers\Tablef3linkController::class,'F3Link']);
Route::post("/F3Link",[App\Http\Controllers\Tablef3linkController::class,'F3LinkStore']);
Route::post("/F3Link/{id}/update",[App\Http\Controllers\Tablef3linkController::class,'F3LinkUpdate']);
Route::get("/F3Link/{id}/delete",[App\Http\Controllers\Tablef3linkController::class,'F3LinkDelete']);


Route::get("/F6Link",[App\Http\Controllers\Tablef6linkController::class,'F6Link']);
Route::post("/F6Link",[App\Http\Controllers\Tablef6linkController::class,'F6LinkStore']);
Route::post("/F6Link/{id}/update",[App\Http\Controllers\Tablef6linkController::class,'F6LinkUpdate']);
Route::get("/F6Link/{id}/delete",[App\Http\Controllers\Tablef6linkController::class,'F6LinkDelete']);

Route::get("/tablef5",[App\Http\Controllers\Tablef5Controller::class,'index']);
Route::post("/tablef5",[App\Http\Controllers\Tablef5Controller::class,'store2']);
Route::post("/tablef5/{id}/update",[App\Http\Controllers\Tablef5Controller::class,'update']);
Route::get("/tablef5/{id}/delete",[App\Http\Controllers\Tablef5Controller::class,'destroy']);

Route::get("/tablef2/{id}",[App\Http\Controllers\Tablef2Controller::class,'index']);


Route::get("/selectmenu2",[App\Http\Controllers\StartPageController::class,'show2']);
Route::get("/start2",[App\Http\Controllers\StartPageController::class,'index2']);
Route::post("/start2",[App\Http\Controllers\StartPageController::class,'store']);
Route::get("/subjecttask2",[App\Http\Controllers\SubjectTaskController::class,'index2']);
Route::get("/profile",[App\Http\Controllers\UserController::class,'index']);
Route::post("/profile",[App\Http\Controllers\UserController::class,'update']);
Route::get("/w2table/{sorting?}",[App\Http\Controllers\W2TableController::class,'index']);

//Route::get("/f1c2/{id?}/{id2?}",[App\Http\Controllers\Tablef1cController::class,'f1c2']);
//Route::post("/f1c2/{id?}/{id2?}",[App\Http\Controllers\Tablef1cController::class,'f1c2Store']);

//Route::get("/diagnoses/{filename}",[App\Http\Controllers\InformationController::class,'download']);