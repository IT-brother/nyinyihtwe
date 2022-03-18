<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\ProjectName;
class StartPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project_names = ProjectName::all();
        return view("startpage.index",compact("project_names"));
    }
    public function index2()
    {
        $project_names = ProjectName::all();
        return view("startpage.index2",compact("project_names"));
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
        $validate = Validator::make($request->only('name'), [
            'name'  => 'required',
        ]);
        if($validate->fails()){
            return redirect("/start")->withErrors($validate)->withInput();
        }else
        {
            $store = ProjectName::create([
                "name" => $request->get("name"),
                "user_id" => Auth::user()->id
            ]);
            if($store)
            {
                if(Auth::user()->role_id == 1)
                {
                    return redirect("/start")->with("status","Successfully inserted");
                }else
                {
                    return redirect("/start2")->with("status","Successfully inserted");
                }
            }else
            {
                if(Auth::user()->role_id == 1)
                {
                    return redirect("/start")->with("error","Error occured!");
                }else
                {
                    return redirect("/start2")->with("error","Error occured!");
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view("startpage.selectedmenu");
    }
    public function show2()
    {
        return view("startpage.selectedmenu2");
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
