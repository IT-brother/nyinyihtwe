<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Tablef3;
use App\Models\Codepz;
class Tablef3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //$tablef3s = Tablef3::where("Кодструктуры",$id)->get();
        $tablef3s = DB::table("tablef3")->get();
        return view("tablef3.index",compact("tablef3s"));
    }
    public function f3show()
    {
        $tablef3s = Tablef3::all();
        return view("tablef3.f3",compact("tablef3s"));
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
        $code =$request->get("codepz");
        DB::table("codepz")->insert([
            "КодПЗ1" => $code
        ]);
        //$codepzs = Codepz::all();
        return redirect("/codepz")->with("status","Successfully added");
    }
    public function f3create(Request $request)
    {
        return $request->all();
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
