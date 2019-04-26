<?php

namespace App\Http\Controllers;
use DB;
//use Request;
use Illuminate\Http\Request;
use Response;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getData()
    {  
       $RawQuery = Response::json( DB::select( DB::raw("SELECT * FROM employee")) );
       //$Data = Response::json(DB::table('employee')->get()); 
        return $RawQuery;
    }

    public function getLeave()
    {
        $RawQuery = Response::json( DB::select( DB::raw("SELECT * FROM leavereq")) );
       //$Data = Response::json(DB::table('leavereq')->get()); 
        return $RawQuery;
    }

    public function employeeLeaveStatus(Request $request,$id)
    {
      $Query = Response::json( DB::select( DB::raw("SELECT * FROM leavereq WHERE `EID`= $id ")) );
      return $Query;
         
    }

    public function LeaveStatusChange(Request $request,$id,$status)
    {  
      $Query = Response::json( DB::update( DB::raw("UPDATE leavereq SET `STATUS`= '$status' WHERE `LID`= $id")) );
      return $Query;
    }
  
    public function postLeave(Request $request)
    {
        //Call it like => http://127.0.0.1:8000/postLeave?EID=1&STARTLEAVEDATE=2019-04-11&ENDLEAVEDATE=2019-04-11&REASON=Non&PRIORITY=High&STATUS=Pending
        $EID = $request->get("EID");
        $STARTLEAVEDATE = $request->get("STARTLEAVEDATE");
        $ENDLEAVEDATE = $request->get("ENDLEAVEDATE");
        $REASON = $request->get("REASON");
        $PRIORITY = $request->get("PRIORITY");
        $STATUS = $request->get("STATUS");
        $post = DB::table('leavereq')->insert([
                   'EID' => $EID,
                   'STARTLEAVEDATE' => $STARTLEAVEDATE,
                   'ENDLEAVEDATE' => $ENDLEAVEDATE,
                   'REASON' => $REASON,
                   'PRIORITY' => $PRIORITY, 
                   'STATUS' => $STATUS
                 ]);
        return Response::json($post);
    }
    public function sendMessage(Request $request)
    {
        $TO = $request->get("TO");
        $MESSAGE = $request->get("MESSAGE");
        $CODE = $request->get("CODE");
        $post = DB::table('messagebox')->insert([
            'TO' => $TO,
            'MESSAGE' => $MESSAGE,
            'CODE' => $CODE
          ]);
          return Response::json($post);
    }


}
