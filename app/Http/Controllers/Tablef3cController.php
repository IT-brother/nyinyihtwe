<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tablef3c;
class Tablef3cController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $elementdstrs = Tablef3c::where("Кодструктуры",$id)->get();
        return view("tablef3c.index",compact("elementdstrs"));
    }
    public function codepz_tablef3c($id)
    {
         $elementdstrs = DB::table("tablef3c")->where("КодПЗ1",$id)->get();;
        return view("tablef3c.index",compact("elementdstrs"));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }
    public function f3c2()
    {
        $elementdstrs = Tablef3c::all();
        return view("tablef3c.f3clive",compact("elementdstrs"));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        DB::table("tablef3c")->insert([
            "КОДСТРУКТУРЫ" => $request->get("КОДСТРУКТУРЫ"),
            "КОДПЗ1" => $request->get("КОДПЗ1"),
            "НАИМЕНОВАНИЕПЗ1" => $request->get("НАИМЕНОВАНИЕПЗ1"),
            "СТЕПЕНЬФОРМАЛИЗАЦИИ" => $request->get("СТЕПЕНЬФОРМАЛИЗАЦИИ"),
            "СТАТУСПЗ1" => $request->get("СТАТУСПЗ1"),
            "СТРУКТУРНОЕCВОЙСТВОПЗ1" => $request->get("СТРУКТУРНОЕCВОЙСТВОПЗ1"),
            "ПРИМЕЧАНИЕПЗ1" => $request->get("ПРИМЕЧАНИЕПЗ1"),
        ]);
        return redirect("/tablef3c/$id")->with("status","Successfully added Data!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $elementdstrs = Tablef3c::all();
        return view("tablef3c.f3c",compact("elementdstrs"));
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

    /*
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Tablef3c::find($id);
        $update->Кодструктуры = $request->get("mycode");
        $update->save();
        return response()->json([
            "status" => true
        ]);
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
