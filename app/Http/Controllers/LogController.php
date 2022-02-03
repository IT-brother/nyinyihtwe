<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;
use App\Models\User;

class LogController extends Controller
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
    public function index(Request $request)
    {
        $users = User::all();
        $log = Log::join("information","information.id","=","logs.information_id")
            ->select("logs.*","information.title")
            ->orderBy('created_at','desc');
        $collectArray = array();
        if(!empty($request->get("from") && !empty($request->get("to"))))
        {
            $from = date('Y-m-d',strtotime($request->get("from")));
            $to   = date('Y-m-d',strtotime($request->get("to")));
            $collectArray[] = $from;
            $log->whereBetween("logs.created_at",[$from,$to]);
        }
        if(!empty($request->get("user_id")))
        {
            $collectArray[] = $request->get("user_id");
            $log->where("logs.user_id","=",$request->get("user_id"));
        }
        if(!empty($request->get("title")))
        {
            $title = $request->get("title")."%";
            $collectArray[] = $title;
            $log->where("information.title","LIKE",$title);
        }
        if($request->get("export") == "export")
        {
            $logs = $log->get();
            //return $loginlogs;
            $this->export2Excel($logs);//export excel 
        }else
        {
            if(count($collectArray) > 0)
            {
                $log = $log->paginate(10);
                $logs = $log->appends($request->all()); 
            }else
            {
                $logs = $log->limit(10)->take(10)->get();
            }
            return view("log.index",compact("logs","users"));
        }
    }
    public function export2Excel($logs)
    {
        $table = "<table border='1'>";
        $table .='<thead style="font-size:18px">
                    <tr>
                        <th style="width:50px;max-width:50px;font-weight:bold;">No</th>
                        <th style="font-weight:bold;width:200px;">Title</th>
                        <th style="min-width:200px;max-width:200px;font-weight:bold;">Name</th>
                        <th style="width:100px;max-width:100px;font-weight:bold;width:150px;">Date</th>
                        <th style="width:200px;max-width:200px;font-weight:bold;width:150px;">Activity</th>
                    </tr>
                 </thead>';
        if(count($logs) > 0){
            foreach($logs as $key=>$log)
            {
                $table.="<tr>";
                    $table.="<td style='padding:7px;border:1px solid #000;'>".($key + 1)."</td>";
                    $table.="<td style='padding:7px;border:1px solid #000;'>".$log->title."</td>";
                    $table.="<td style='padding:7px;border:1px solid #000;'>".$log->users->name."</td>";
                    $table.="<td style='padding:7px;border:1px solid #000;'>".date('d-m-Y H:i',strtotime($log->created_at))."</td>";
                    $table.="<td style='padding:7px;border:1px solid #000;'>".$log->activity."</td>";
                $table.="</tr>";
            }
        } 
        $table.="</table>";  
        header('Content-Type: application/vnd.ms-excel');  
        header('Content-disposition: attachment; filename='.time()."_".rand().'.xls');  
        echo $table;
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
