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
       $Data = Response::json(DB::table('employee')->get()); 
        return $RawQuery;
    }

    public function getLeave()
    {
        $RawQuery = Response::json( DB::select( DB::raw("SELECT * FROM leavereq")) );
       $Data = Response::json(DB::table('leavereq')->get()); 
        return $RawQuery;
    }

    public function employeeLeaveStatus(Request $request,$id)
    {
      $Query = Response::json( DB::select( DB::raw("SELECT * FROM leavereq WHERE `EID`= $id ")) );
      return $Query;
         
    }

    public function LeaveStatusChange(Request $request,$id)
    {
      $status = "Accept";  
      $Query = Response::json( DB::update( DB::raw("UPDATE leavereq SET `STATUS`= '$status' WHERE `LID`= $id")) );
      return $Query;
    }
    

}
