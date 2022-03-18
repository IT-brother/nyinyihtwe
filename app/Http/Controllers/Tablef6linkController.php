<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tablef6link;
use Illuminate\Support\Facades\DB;
class Tablef6linkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function F6Link(){
        $tablef6Link = Tablef6link::all();
       return view("tablef6link.F6Link",compact("tablef6Link"));
   }
   public function F6LinkStore(Request $request)
   {
       $create = DB::table("tablef6link")->insert([
           "КодПЗ1"=> $request->get("КодПЗ1"),
           "СтруктурноеСвойствоПЗ1" => $request->get("СтруктурноеСвойствоПЗ1"),
           "КодПК" => $request->get("КодПК"),
           "РольПК" => $request->get("РольПК"),
           "СтруктурноеСвойствоПК" => $request->get("СтруктурноеСвойствоПК"),
           "ОбъемноеСвойствоПК" => $request->get("ОбъемноеСвойствоПК"),
           "ОсобаяРольПК" => $request->get("ОсобаяРольПК"),
       ]);
       return redirect("/F6Link")->with("status","Успешно добавление данных");
   }
   public function F6LinkUpdate(Request $request,$id)
   {
       //return $request->all();
       $tablef6Link = Tablef6link::where("idtablef6",$id)->first();
       $tablef6Link->КодПЗ1 = $request->get("КодПЗ1");
       $tablef6Link->СтруктурноеСвойствоПЗ1 = $request->get("СтруктурноеСвойствоПЗ1");
       $tablef6Link->КодПК = $request->get("КодПК");
       $tablef6Link->РольПК = $request->get("РольПК");
       $tablef6Link->СтруктурноеСвойствоПК = $request->get("СтруктурноеСвойствоПК");
       $tablef6Link->ОбъемноеСвойствоПК = $request->get("ОбъемноеСвойствоПК");
       $tablef6Link->ОсобаяРольПК = $request->get("ОсобаяРольПК");
       $tablef6Link->save();
       return response()->json([
           "status" => true,
           "msg"  => "Успешно редакитирование данных"
       ]);
   }
   public function F6LinkDelete(Request $request,$id)
   {
       $Tablef6link = Tablef6link::where("idtablef6",$id)->delete();
       return response()->json([
           "status" => true,
           "msg"  => "Успешно удаление данных"
       ]);
   }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
