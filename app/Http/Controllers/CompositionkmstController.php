<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compositionkmst;
use Illuminate\Support\Facades\DB;
class CompositionkmstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $compositionkmst = Compositionkmst::where("КодКМ",$id)->get();
        return view("compositionkmst.index",compact("compositionkmst"));
    }
    public function index2($id)
    {
        $compositionkmst = Compositionkmst::where("КодСтатСтруктуры",$id)
        ->orWhere("КодДинСтруктуры",$id)
        ->orWhere("КодСтруктурыУвязки",$id)
        ->get();
        return view("compositionkmst.index",compact("compositionkmst"));
    }
    public function store2(Request $request,$id)
    {
       DB::table("compositionkmst")->insert([
            "КОДКМ" => $request->get("КОДКМ"),
            "КОДСТАТСТРУКТУРЫ" => $request->get("КОДСТАТСТРУКТУРЫ"),
            "КОДДИНСТРУКТУРЫ" => $request->get("КОДДИНСТРУКТУРЫ"),
            "КОДСТРУКТУРЫУВЯЗКИ" => $request->get("КОДСТРУКТУРЫУВЯЗКИ")
        ]);
        return redirect("/compositionkmst/$id")->with("status","Successfully added Data!");
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
