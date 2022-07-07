<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\W2table;
use App\Models\Tablef3;
class W2TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $w2tables = W2table::all()->toArray();
        //return $w2tables;
        if($request->sorting == "asc")
       {
            //return "Asc";
           // usort($w2tables, array("W2TableController","sortByASC"));
            //usort($w2tables,"static::sortByASC");
            $codelevel  = array_column($w2tables, 'codelevel');
            $codeposition = array_column($w2tables, 'codeposition');
            array_multisort($codelevel, SORT_ASC, $codeposition, SORT_ASC, $w2tables);
       }else if($request->sorting == "desc")
       {
            //return "desc";
            //rsort($w2tables);
            ///usort($w2tables,"static::sortByDESC");
            $codelevel  = array_column($w2tables, 'codelevel');
            $codeposition = array_column($w2tables, 'codeposition');
            array_multisort($codelevel, SORT_DESC, $codeposition, SORT_DESC, $w2tables);
       }
       $tablef3s = array();
       foreach($w2tables as $key=>$data)
       {
            $tablef3s[] = Tablef3::where("Степеньформализации","Стат")->where("КодПЗ1",$data["codepz"])->first();
       }
        return view("w2table.index",compact("w2tables","tablef3s"));
    }
   public static function sortByASC($a, $b) {
        return ($a['codelevel'].$a["codeposition"]	> $b['codelevel'].$b['codeposition']);
    }
   public static function sortByDESC($a, $b) {
        return ($a['codeposition'] < $b['codeposition']);
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
