<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tablef6;
class Tablef6Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $tablef6s = Tablef6::where("Кодструктуры",$id)->get();
        return view("tablef6.index",compact("tablef6s"));
    }
    public function index2($id)
    {
        $tablef6s = Tablef6::where("КодПЗ1",$id)->get();
        return view("tablef6.index",compact("tablef6s"));
    }
    public function f6($id)
    {
        $tablef6s = Tablef6::where("КодПЗ1",$id)->get();
        return view("tablef6.f6",compact("tablef6s"));
    }
    public function f6row($id)
    {
        $tablef6s = Tablef6::where("idtablef6",$id)->get();
        return view("tablef6.index",compact("tablef6s")); 
    }
    public function f6Doc()
    {
        $tablef6s = Tablef6::all();
        return view("tablef6.f6doc",compact("tablef6s"));
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
        $create = DB::table("tablef6")->insert([
            "Кодструктуры" => $request->get("Кодструктуры"),
            "КодПЗ1"=> $request->get("КодПЗ1"),
            "СтруктурноеСвойствоПЗ1" => $request->get("СтруктурноеСвойствоПЗ1"),
            "КодПК" => $request->get("КодПК"),
            "РольПК" => $request->get("РольПК"),
            "СтруктурноеСвойствоПК" => $request->get("СтруктурноеСвойствоПК"),
            "ОбъемноеСвойствоПК" => $request->get("ОбъемноеСвойствоПК"),
            "ОсобаяРольПК" => $request->get("ОсобаяРольПК"),
        ]);
        return redirect("/tablef6/".$request->get("Кодструктуры"))->with("status","Успешно добавление данных");
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
