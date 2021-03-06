<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\SubjectTask;
use App\Models\Tablef3;
use App\Models\Tablef3c;
class SubjectTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjecttasks = SubjectTask::all();
        return view("subjecttask.index",compact("subjecttasks"));
    }
    public function index2(Request $request)
    {
        $tablef3s = Tablef3::query();
        if(!empty($request->get("Кодструктуры")))
        {
            $tablef3s->where("Кодструктуры",$request->get("Кодструктуры"));
        }
        if(!empty($request->get("Степеньформализации")))
        {
            $tablef3s->where("Степеньформализации",$request->get("Степеньформализации"));
        }
        // if(!empty($request->get("sort")))
        // {
        //     if($request->get("sort") == "Возрастание") //ASC
        //     {
        //         $tablef3s->orderBy("КодПЗ1","ASC");
        //     }else
        //     {
        //         $tablef3s->orderBy("КодПЗ1","DESC");
        //     }
        // }
        $tablef3s = $tablef3s->get();
        $tablef3c = Tablef3c::all();
        return view("tablef3.user2f3",compact("tablef3s","tablef3c"));
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
        //return $request->all();
        // $subjecttask = new SubjectTask();
        // $subjecttask->КодПрЗ =$request->get("КодПрЗ");
        // $subjecttask->НаименованиеПрЗ = $request->get("НаименованиеПрЗ");
        // $subjecttask->КоличествоСтатКМвПрЗ = $request->get("КоличествоСтатКМвПрЗ");
        // $subjecttask->save();
        $subjecttask = DB::table("subjecttask")->insert([
            "КодПрЗ" => $request->get("КодПрЗ"),
            "НаименованиеПрЗ" => $request->get("НаименованиеПрЗ"),
            "КоличествоСтатКМвПрЗ" => $request->get("КоличествоСтатКМвПрЗ")
        ]);
        return redirect("/subjecttask")->with("status","Successfully added");
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
