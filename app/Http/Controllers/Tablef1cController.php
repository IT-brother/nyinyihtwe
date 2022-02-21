<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tablef1c;
class Tablef1cController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $tablef1s = Tablef1c::where("Кодструктуры",$id)->get();
        return view("tablef1c.index",compact("tablef1s"));
    }
    public function f1cDoc()
    {
        $tablef1s = Tablef1c::all();
        return view("tablef1c.f1cdoc",compact("tablef1s"));
    }
    public function f1c2(Request $request)
    {
        //return $request->all();
        $tablef1s = Tablef1c::where("КодПК",$request->get("КодПК"))->where("Кодструктуры",$request->get("Кодструктуры"))->get();
        return view("tablef1c.f1c2",compact("tablef1s"));
    }
    public function f1cStore(Request $request)
    {
        DB::table("tablef1c")->insert([
            "Кодструктуры" => $request->get("Кодструктуры"),
            "КодПК"   => $request->get("КодПК"),
            "НаименованиеПК" => $request->get("НаименованиеПК"),
            "КлассПК" => $request->get("КлассПК"),
            "ТипПК" => $request->get("ТипПК"),
            "СтатусПК" => $request->get("СтатусПК"),
            "ОценкаПК" => $request->get("ОценкаПК"),
            "ПримечаниекПК" => $request->get("ПримечаниекПК")
        ]);
        return redirect("/f1/".$request->get('КодПК').'?Кодструктуры='.$request->get('Кодструктуры'))->with("status","Successfully inserted");
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
