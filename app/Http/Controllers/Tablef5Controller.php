<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tablef5;
use Illuminate\Support\Facades\DB;
class Tablef5Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tablef5 = Tablef5::all();
        return view("tablef5.index",compact("tablef5"));
    }
    public function store2(Request $request)
    {
       DB::table("tablef5")->insert([
            "КОДКМ" => $request->get("КОДКМ"),
            "КОДСТАТСТРУКТУРЫ" => $request->get("КОДСТАТСТРУКТУРЫ"),
            "КОДДИНСТРУКТУРЫ" => $request->get("КОДДИНСТРУКТУРЫ"),
            "КОДСТРУКТУРЫУВЯЗКИ" => $request->get("КОДСТРУКТУРЫУВЯЗКИ")
        ]);
        return redirect("/tablef5")->with("status","Successfully added Data!");
    }
    public function update(Request $request, $id)
    {
        //["КодКМ","КодСтатСтруктуры","КодДинСтруктуры","КодСтруктурыУвязки"];
        $tablef3Link = Tablef5::find($id);
        $tablef3Link->КодКМ = $request->get("КодКМ");
        $tablef3Link->КодСтатСтруктуры = $request->get("КодСтатСтруктуры");
        $tablef3Link->КодДинСтруктуры = $request->get("КодДинСтруктуры");
        $tablef3Link->КодСтруктурыУвязки = $request->get("КодСтруктурыУвязки");
        $tablef3Link->update();
        return response()->json([
            "status" => true,
            "msg"  => "Успешно редакитирование данных"
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
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Tablef6link = Tablef5::where("id",$id)->delete();
       return response()->json([
           "status" => true,
           "msg"  => "Успешно удаление данных"
       ]);
    }
}
