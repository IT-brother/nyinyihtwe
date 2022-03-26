<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class UserController extends Controller
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
        return  view("users.profile");
    }
    public function moderatorsIndex()
    {
        $users = User::where("role_id",2)->paginate(10);
        return  view("user.moderator",compact('users'));
    }
//********* */ for user editing by ypp******************
    public function user_edit($user_id)
    {
        $roles = Role::all();
        $user = User::whereId($user_id)->get();
        return view("user.useredit",compact('user','roles'));
    }

    
    public function moderatorsEdit($user_id)
    {
        $user = User::whereId($user_id)->get();
        return view("user.moderatoredit",compact('user'));
    }
    public function user_update(Request $request, $update_id)
    {
        //return $request->all();
        $users=User::whereId($update_id)->firstOrFail();
        $users->name= $request->get('name');
        $users->role_id= $request->get('role_id');
        $users->phone= $request->get('phone');
        $users->username= $request->get('username');
        if(empty($request->get("password")))
        {
            $users->password = $users->password;
        }else
        {
            $users->password= Hash::make($request->get('password'));
        }
        $users->activation= $request->get('activation');
        $users->update();
        return redirect()->action([UserController::class, 'user_edit'], ['id' => $update_id])
        ->with("status","Successfully updated!");
    }
    public function moderatorsUpdate(Request $request, $update_id)
    {
        //return $request->all();
        $users=User::whereId($update_id)->firstOrFail();
        $users->name= $request->get('name');
        $users->phone= $request->get('phone');
        $users->username= $request->get('username');
        $users->password= Hash::make($request->get('password'));
        $users->activation= $request->get('activation');
        $users->update();
        return redirect()->action([UserController::class, 'moderatorsUpdate'], ['id' => $update_id])
        ->with("status","Successfully updated!");
    }
    public function user_delete($deleteid)
    {
        $DeleteUser = User::find($deleteid)->delete();
        // $DeleteUser->delete();
        return response()->json([
            "status" => true,
            "msg"    => "Successfully deleted"
        ]);
    }
    public function moderatorsDelete($deleteid)
    {
        $DeleteUser = User::find($deleteid);
        $DeleteUser->delete();
        return response()->json([
            "status" => true,
            "msg"    => "Successfully deleted"
        ]);
    }
    /********************************************************************************
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hospitals = Hospital::all();
        $roles = Role::find([1,2]);
        return view("user.create",compact('hospitals','roles'));
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
        $users = User::create([
            "name" => $request->get("name"),
            "phone" => $request->get("phone"),
            "username" => $request->get("username"),
            "password" => Hash::make($request->get("password")),
            "role_id" => $request->get("role"),
            'activation' => 1 // 1 is active
        ]);
        return redirect(Auth::user()->roles->name."/users")->with("status","Successfully created user");
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
        $hospitals = Hospital::all();
        $roles = Role::find([1,2]);
        $user = User::find($id);
        return view("user.edit",compact('hospitals','roles','user'));
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->name = $request->get("name");
        $user->address = $request->get("address");
        if($request->get("password") !="")
        {
            $user->password = Hash::make($request->get("password"));
        }
        $user->update();
        return redirect("/profile")->with("status","Profile updated successfully");
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

    /*==========for Excel byYpP
    public function exportservice()
    {
        
    }*/
}
