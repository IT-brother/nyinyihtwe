<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Structure;
use Illuminate\Support\Facades\DB;
class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $structures = Structure::where("КодСтруктуры",$id)->get();
        return view("structure.index",compact("structures"));
    }

    public function store2(Request $request,$id)
    {
       DB::table("structure")->insert([
            "КОДСТРУКТУРЫ" => $request->get("КОДСТРУКТУРЫ"),
            "ТИПСТРУКТУРЫ" => $request->get("ТИПСТРУКТУРЫ"),
            "РОДСТРУКТУРЫ" => $request->get("РОДСТРУКТУРЫ"),
            "ВИДСТРУКТУРЫ" => $request->get("ВИДСТРУКТУРЫ"),
            "КОЛИЧЕСТВОЭЛСТРУКТУРЫ" => $request->get("КОЛИЧЕСТВОЭЛСТРУКТУРЫ")
        ]);
        return redirect("/structure/$id")->with("status","Successfully added Data!");
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
