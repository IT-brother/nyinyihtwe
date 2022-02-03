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
        $users = User::paginate(10);
        return  view("user.index",compact('users'));
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
    public function alluserExport()
    {
        //admin မှာ user များအား export ထုတ်ရန်ဖြစ်ပါသည်
        $users = User::all();
        $table = "<table border='1'>";
        $table .='<thead style="font-size:18px">
                    <tr>
                        <th style="width:50px;max-width:50px;font-weight:bold;">No</th>
                        <th style="font-weight:bold;width:100px;">Name</th>
                        <th style="min-width:100px;max-width:100px;font-weight:bold;width:150px;">Phone Number</th>
                        <th style="width:100px;max-width:100px;font-weight:bold;">Role</th>
                        <th style="font-weight:bold;width:150px;">Activation</th>
                        <th style="width:100px;max-width:100px;font-weight:bold;width:150px;">Created at</th>
                    </tr>
                 </thead>';
        if(count($users) > 0){
            foreach($users as $key=>$user)
            {
                $table.="<tr>";
                    $table.="<td style='padding:7px;border:1px solid #000;'>".($key + 1)."</td>";
                    $table.="<td style='padding:7px;border:1px solid #000;'>".$user->name."</td>";
                    $table.="<td style='padding:7px;border:1px solid #000;'>".$user->phone."</td>";
                    $table.="<td style='padding:7px;border:1px solid #000;'>".$user->roles->name."</td>";
                    $table.="<td style='padding:7px;border:1px solid #000;font-family:Pyidaungsu;'>";
                        if($user->activation == 1)
                          $table.=" Active user ";
                        else
                          $table .=" Inactive user";
                    $table.="</td>";
                    $table.="<td style='padding:7px;border:1px solid #000;'>".date('d-m-Y H:i',strtotime($user->created_at))."</td>";
                $table.="</tr>";
            }
        } 
        $table.="</table>";  
        header('Content-Type: application/vnd.ms-excel');  
        header('Content-disposition: attachment; filename='.time()."_".rand().'.xls');  
        echo $table;
    }
    public function allmoderatorExport()
    {
        //admin မှာ user များအား export ထုတ်ရန်ဖြစ်ပါသည်
        $users = User::where("role_id",2)->get();
        $table = "<table border='1'>";
        $table .='<thead style="font-size:18px">
                    <tr>
                        <th style="width:50px;max-width:50px;font-weight:bold;">No</th>
                        <th style="font-weight:bold;width:100px;">Name</th>
                        <th style="min-width:100px;max-width:100px;font-weight:bold;width:150px;">Phone Number</th>
                        <th style="width:100px;max-width:100px;font-weight:bold;">Role</th>
                        <th style="font-weight:bold;width:150px;">Activation</th>
                        <th style="width:100px;max-width:100px;font-weight:bold;width:150px;">Created at</th>
                    </tr>
                 </thead>';
        if(count($users) > 0){
            foreach($users as $key=>$user)
            {
                $table.="<tr>";
                    $table.="<td style='padding:7px;border:1px solid #000;'>".($key + 1)."</td>";
                    $table.="<td style='padding:7px;border:1px solid #000;'>".$user->name."</td>";
                    $table.="<td style='padding:7px;border:1px solid #000;'>".$user->phone."</td>";
                    $table.="<td style='padding:7px;border:1px solid #000;'>".$user->roles->name."</td>";
                    $table.="<td style='padding:7px;border:1px solid #000;font-family:Pyidaungsu;'>";
                        if($user->activation == 1)
                          $table.=" Active user ";
                        else
                          $table .=" Inactive user";
                    $table.="</td>";
                    $table.="<td style='padding:7px;border:1px solid #000;'>".date('d-m-Y H:i',strtotime($user->created_at))."</td>";
                $table.="</tr>";
            }
        } 
        $table.="</table>";  
        header('Content-Type: application/vnd.ms-excel');  
        header('Content-disposition: attachment; filename='.time()."_".rand().'.xls');  
        echo $table;
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
    public function moderatorsStore(Request $request)
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
        return redirect("/superadmin/moderators")->with("status","Successfully created moderator");
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

    /*==========for Excel byYpP
    public function exportservice()
    {
        
    }*/
}
