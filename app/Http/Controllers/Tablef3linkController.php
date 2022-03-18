<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tablef3link;
use Illuminate\Support\Facades\DB;
class Tablef3linkController extends Controller
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
    public function F3Link(){
        $tablef3Link = Tablef3link::all();
       return view("tablef3link.F3Link",compact("tablef3Link"));
   }
   public function F3LinkStore(Request $request)
   {
       $create = DB::table("tablef3link")->insert([
           "КодПЗ1"=> $request->get("КодПЗ1"),
           "НаименованиеПЗ" => $request->get("НаименованиеПЗ"),
           "Степеньформализации" => $request->get("Степеньформализации"),
           "СтатусПЗ1" => $request->get("СтатусПЗ1"),
           "СтруктурноеСвойствоПЗ1" => $request->get("СтруктурноеСвойствоПЗ1"),
           "ПримечаниеПЗ1" => $request->get("ПримечаниеПЗ1"),
       ]);
       return redirect("/F3Link")->with("status","Успешно добавление данных");
   }
   public function F3LinkUpdate(Request $request,$id)
   {
       //return $request->all();
       $tablef3Link = Tablef3link::where("idtablef3",$id)->first();
       $tablef3Link->КодПЗ1 = $request->get("КодПЗ1");
       $tablef3Link->НаименованиеПЗ = $request->get("НаименованиеПЗ");
       $tablef3Link->Степеньформализации = $request->get("Степеньформализации");
       $tablef3Link->СтатусПЗ1 = $request->get("СтатусПЗ1");
       $tablef3Link->СтруктурноеСвойствоПЗ1 = $request->get("СтруктурноеСвойствоПЗ1");
       $tablef3Link->ПримечаниеПЗ1 = $request->get("ПримечаниеПЗ1");
       $tablef3Link->save();
       return response()->json([
           "status" => true,
           "msg"  => "Успешно редакитирование данных"
       ]);
   }
   public function F3LinkDelete(Request $request,$id)
   {
       $tablef3Link = Tablef3link::where("idtablef3",$id)->delete();
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
