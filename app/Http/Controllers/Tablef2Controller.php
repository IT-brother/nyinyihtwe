<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tablef2;
use App\Models\Tablef1c;
use App\Models\Tablef1;
use App\Models\Tablef2c;
class Tablef2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function f2Doc()
    {
        $tablef2 = Tablef2::all();
        return view("tablef2.f2doc",compact("tablef2"));
    }
    public function f2()
    {
        $tablef1 = Tablef1::all();
        $codestructure = Tablef1::select("Кодструктуры")->groupBy("Кодструктуры")->get();
        return view("tablef2.index",compact("tablef1","codestructure"));
    }
    public function f2Search(Request $request)
    {
        $pk = $request->get("КодПК");
        $tablef2 = Tablef2::where("Кодструктуры",$request->get("Кодструктуры"))
            ->where(function ($query) use ($pk) {
             $query->where('КодПК_1', '=', $pk)
                  ->orWhere('КодПК_2', '=', $pk)
                  ->orWhere('КодПК_3','=',$pk);
            }
        )->get();
        $pk2 = $request->get("codepk");
         $tablef2c = Tablef2c::where("Кодструктуры",$request->get("codestructure"))
            ->where(function ($query) use ($pk2) {
             $query->where('КодПК_1', '=', $pk2)
                  ->orWhere('КодПК_2', '=', $pk2)
                  ->orWhere('КодПК_3','=',$pk2);
            }
        )->get();
        $codestructure = Tablef1c::select("Кодструктуры")->groupBy("Кодструктуры")->get();
        $codepk = Tablef1c::select("КодПК")->groupBy("КодПК")->get();
        return view("tablef2.f2search",compact("tablef2","codestructure","codepk","tablef2c"));
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
