<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tablef6c;
//hello
class Tablef6cController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $tablef6s = Tablef6c::where("Кодструктуры",$id)->get();
        return view("tablef6c.index",compact("tablef6s"));
    }
    public function f6c($id,$id2)
    {
        $tablef6s = Tablef6c::where("КодПЗ1",$id)->where("КодПК",$id2)->get();
        return view("tablef6c.index",compact("tablef6s"));
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
    public function f6cStore(Request $request,$id)
    {
        DB::table("tablef6c")->insert([
            "Кодструктуры" => $request->get("Кодструктуры"),
            "КодПЗ1"   => $request->get("КодПЗ1"),
            "СтруктурноеСвойствоПЗ1" => $request->get("СтруктурноеСвойствоПЗ1"),
            "КодПК"  => $request->get("КодПК"),
            "РольПК" => $request->get("РольПК"),
            "СтруктурноеСвойствоПК" => $request->get("СтруктурноеСвойствоПК"),
            "ОбъемноеСвойствоПК" => $request->get("ОбъемноеСвойствоПК"),
            "ОсобаяРольПК"  => $request->get("ОсобаяРольПК")
        ]);
        return redirect("/f6c/$id")->with("status","Successfully added");
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
