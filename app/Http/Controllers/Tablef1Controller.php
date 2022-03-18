<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tablef1;
use App\Models\Tablef1c;
class Tablef1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $tablef1s = Tablef1::where("Кодструктуры",$id)->get();
        return view("tablef1.index",compact("tablef1s"));
    }
    public function index2($id)
    {
        $tablef1s = Tablef1::where("КодПК",$id)->get();
        return view("tablef1.index",compact("tablef1s"));
    }
    public function f1(Request $request,$id)
    {
        
        $tablef1s = Tablef1::where("КодПК",$id)->get();
         $tablef1c = DB::table("tablef1c")->select("Кодструктуры")->groupBy("Кодструктуры")->get();
        // $tablef1cPK = DB::table("tablef1c")->select("КодПК")->groupBy("КодПК")->get();
        $tablef1c2 = Tablef1c::where("КодПК",$id)->where("Кодструктуры",$request->get("Кодструктуры"))->get();

        return view("tablef1.index",compact("tablef1s","tablef1c","tablef1c2"));
    }
    public function f1Doc()
    {
        $tablef1s = Tablef1::all();
        return view("tablef1.f1doc",compact("tablef1s"));
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
        $create = DB::table("tablef1")->insert([
            "Кодструктуры" => $request->get("Кодструктуры"),
            "КодПК"=> $request->get("КодПК"),
            "НаименованиеПК" => $request->get("НаименованиеПК"),
            "КлассПК" => $request->get("КлассПК"),
            "ТипПК" => $request->get("ТипПК"),
            "СтатусПК" => $request->get("СтатусПК"),
            "ОценкаПК" => $request->get("ОценкаПК"),
            "ПримечаниекПК" => $request->get("ПримечаниекПК"),
        ]);
        return redirect("/tablef1/".$request->get("Кодструктуры"))->with("status","Успешно добавление данных");
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
