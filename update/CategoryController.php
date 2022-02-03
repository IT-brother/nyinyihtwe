<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\Category;
class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(10);
        return view("category.index",compact("categories"));
    }

//-----------------By YPP--------------
   public function category_edit($category_id)
    {
        
        
        $category = Category::whereId($category_id)->get();
        return view("category.categoryedit",compact('category'));
    }
    /* */
    public function category_update(Request $request, $update_id)
    {
       /*  return $request->all();*/
        $categories=Category::whereId($update_id)->firstOrFail();
        $categories->name= $request->get('category_name');
        
        $categories->update();
        return redirect(Auth::user()->roles->name."/categories/".$update_id)->with("status","Successfully updated!");
        
    }
    
    // public function category_delete($deleteid)
    // {
    //     $DeleteCategory = Category::whereId($deleteid)->delete();
    //     /*$DeleteCategory->delete();*/
    //     return redirect()->back()->with("status","Successfully deleted");

    //     /*if($DeleteCategory->delete() == 1)
    //         return redirect(Auth::user()->roles->name.'/categories')->with("status","Successfully deleted");
    //     else
    //         return redirect(Auth::user()->roles->name.'/categories')->with("status","You can not deleted");*/
    // }

    public function category_delete($deleteid)
    {
         $DeleteCategory = Category::find($deleteid)->delete();
        // $DeleteCategory = Category::whereId($deleteid)->delete();
        // $DeleteCategory->delete();
        return response()->json([
            "status" => true,
            "msg"    => "Successfully deleted"
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
        $name = Category::where("name",$request->get("name"))->first();
        if(!empty($name))
        {
            return redirect(Auth::user()->roles->name."/categories")->with("error","Duplicated category name");
        }else
        {
            $foldername = $request->get("name");
            $category = Category::create([
                "name" => $request->get("name"),
                "user_id" => Auth::user()->id,
            ]);
            $photo = File::makeDirectory(public_path()."/photo/$foldername", 0775, true);
            $files = File::makeDirectory(public_path()."/files/$foldername", 0775, true);
            $videos = File::makeDirectory(public_path()."/videos/$foldername", 0775, true);
            return redirect(Auth::user()->roles->name."/categories")->with("status","Successfully added category");

        }
        //mkdir("/p")
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
