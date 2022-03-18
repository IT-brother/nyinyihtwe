<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tablef1link;
use Illuminate\Support\Facades\DB;

class Tablef1linkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
    public function F1Link(){
        $tablef1Link = Tablef1link::all();
        return view("tablef1Link.F1Link",compact("tablef1Link"));
    }
    public function F1LinkStore(Request $request)
    {
        $create = DB::table("tablef1link")->insert([
            "КодПК"=> $request->get("КодПК"),
            "НаименованиеПК" => $request->get("НаименованиеПК"),
            "КлассПК" => $request->get("КлассПК"),
            "ТипПК" => $request->get("ТипПК"),
            "СтатусПК" => $request->get("СтатусПК"),
            "ОценкаПК" => $request->get("ОценкаПК"),
            "ПримечаниекПК" => $request->get("ПримечаниекПК")
        ]);
        return redirect("/F1Link")->with("status","Успешно добавление данных");
    }
    public function F1LinkUpdate(Request $request,$id)
    {
        //return $request->all();
        $tablef1Link = Tablef1link::where("idtablef1",$id)->first();
        $tablef1Link->КодПК = $request->get("КодПК");
        $tablef1Link->НаименованиеПК = $request->get("НаименованиеПК");
        $tablef1Link->КлассПК = $request->get("КлассПК");
        $tablef1Link->ТипПК = $request->get("ТипПК");
        $tablef1Link->СтатусПК = $request->get("СтатусПК");
        $tablef1Link->ОценкаПК = $request->get("ОценкаПК");
        $tablef1Link->ПримечаниекПК = $request->get("ПримечаниекПК");
        $tablef1Link->save();
        return response()->json([
            "status" => true,
            "msg"  => "Успешно редакитирование данных"
        ]);
    }  
    public function F1LinkDelete(Request $request,$id)
    {
        $tablef1Link = Tablef1link::where("idtablef1",$id)->delete();
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
