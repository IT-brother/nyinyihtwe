<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tablef2link;
use Illuminate\Support\Facades\DB;
class Tablef2linkController extends Controller
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
    public function F2Link(){
         $tablef2Link = Tablef2link::all();
        return view("tablef2Link.F2Link",compact("tablef2Link"));
    }
    public function F2LinkStore(Request $request)
    {
        $create = DB::table("tablef2link")->insert([
            "КлассСвязиПК"=> $request->get("КлассСвязиПК"),
            "КодПК_1" => $request->get("КодПК_1"),
            "КодПК_2" => $request->get("КодПК_2"),
            "КодПК_3" => $request->get("КодПК_3"),
            "НаименованиеСвязиПК" => $request->get("НаименованиеСвязиПК"),
            "ТипСвязиПК" => $request->get("ТипСвязиПК"),
            "ОценкаСвязиПК" => $request->get("ОценкаСвязиПК"),
            "КодСвязиПК" => $request->get("КодСвязиПК"),
        ]);
        return redirect("/F2Link")->with("status","Успешно добавление данных");
    }
    public function F2LinkUpdate(Request $request,$id)
    {
        //return $request->all();
        $tablef2Link = Tablef2link::where("idtablef2",$id)->first();
        $tablef2Link->КлассСвязиПК = $request->get("КлассСвязиПК");
        $tablef2Link->КодПК_1 = $request->get("КодПК_1");
        $tablef2Link->КодПК_2 = $request->get("КодПК_2");
        $tablef2Link->КодПК_3 = $request->get("КодПК_3");
        $tablef2Link->НаименованиеСвязиПК = $request->get("НаименованиеСвязиПК");
        $tablef2Link->ТипСвязиПК = $request->get("ТипСвязиПК");
        $tablef2Link->ОценкаСвязиПК = $request->get("ОценкаСвязиПК");
        $tablef2Link->КодСвязиПК = $request->get("КодСвязиПК");
        $tablef2Link->save();
        return response()->json([
            "status" => true,
            "msg"  => "Успешно редакитирование данных"
        ]);
    }
    public function F2LinkDelete(Request $request,$id)
    {
        $tablef2Link = Tablef2link::where("idtablef2",$id)->delete();
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
