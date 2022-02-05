<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Elementdstr;
use Illuminate\Support\Facades\DB;
class ElementdstrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $elementdstrs = Elementdstr::where("Кодструктуры",$id)->get();
        return view("elementdstr.index",compact("elementdstrs"));
    }

    public function store2(Request $request,$id)
    {
       DB::table("elementdstr")->insert([
            "КОДСТРУКТУРЫ" => $request->get("КОДСТРУКТУРЫ"),
            "КОДПЗ1" => $request->get("КОДПЗ1"),
            "НАИМЕНОВАНИЕПЗ1" => $request->get("НАИМЕНОВАНИЕПЗ1"),
            "СТЕПЕНЬФОРМАЛИЗАЦИИ" => $request->get("СТЕПЕНЬФОРМАЛИЗАЦИИ"),
            "СТАТУСПЗ1" => $request->get("СТАТУСПЗ1"),
            "СТРУКТУРНОЕCВОЙСТВОПЗ1" => $request->get("СТРУКТУРНОЕCВОЙСТВОПЗ1"),
            "ПРИМЕЧАНИЕПЗ1" => $request->get("ПРИМЕЧАНИЕПЗ1")
        ]);
        return redirect("/elementdstr/$id")->with("status","Successfully added Data!");
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
