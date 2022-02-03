<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginLog;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Storage;

class LoginLogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function export2Excel($loginlogs)
    {
        $table = "<table border='1'>";
        $table .='<thead style="font-size:18px">
                    <tr>
                        <th style="width:50px;max-width:50px;font-weight:bold;">No</th>
                        <th style="font-weight:bold;width:200px;">Name</th>
                        <th style="min-width:100px;max-width:100px;font-weight:bold;width:150px;">Start</th>
                        <th style="width:100px;max-width:100px;font-weight:bold;width:150px;">End</th>
                    </tr>
                 </thead>';
        if(count($loginlogs) > 0){
            foreach($loginlogs as $key=>$loginlog)
            {
                $table.="<tr>";
                    $table.="<td style='padding:7px;border:1px solid #000;'>".($key + 1)."</td>";
                    $table.="<td style='padding:7px;border:1px solid #000;'>".$loginlog->users->name."</td>";
                    $table.="<td style='padding:7px;border:1px solid #000;'>".date('d-m-Y H:i',strtotime($loginlog->created_at))."</td>";
                    $table.="<td style='padding:7px;border:1px solid #000;'>".date('d-m-Y H:i',strtotime($loginlog->updated_at))."</td>";
                $table.="</tr>";
            }
        } 
        $table.="</table>";  
        header('Content-Type: application/vnd.ms-excel');  
        header('Content-disposition: attachment; filename='.time()."_".rand().'.xls');  
        echo $table;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $loginlog = LoginLog::query();
        $users = User::all();
        $collectArray = array();
        if(!empty($request->get("from") && !empty($request->get("to"))))
        {
            $from = date('Y-m-d',strtotime($request->get("from")));
            $to   = date('Y-m-d',strtotime($request->get("to")));
            $collectArray[] = $from;
            $loginlog->whereBetween("login_logs.created_at",[$from,$to]);
        }
        if(!empty($request->get("user_id")))
        {
            $collectArray[] = $request->get("user_id");
            $loginlog->where("login_logs.user_id","=",$request->get("user_id"));
        }
        if($request->get("export") == "export")
        {
            $loginlogs = $loginlog->get();
            //return $loginlogs;
            $this->export2Excel($loginlogs);//export excel 
        }else
        {
            if(count($collectArray) > 0)
            {
                $loginlog = $loginlog->paginate(10);
                $loginlogs = $loginlog->appends($request->all()); 
            }else
            {
                // $loginlogs = $loginlog->limit(10)->take(10)->get();
                $loginlogs = $loginlog->limit(10)->paginate(10);
            }
            return view("loginlog.index",compact("loginlogs","users"));
        }
       // return $loginlogs;
      
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
