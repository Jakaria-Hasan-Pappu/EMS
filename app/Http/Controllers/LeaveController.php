<?php

namespace App\Http\Controllers;

use App\Models\leave;
use App\Models\Employee;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function leave(){
        $list=leave::get();

        // dd($list);

        return view('backend.pages.leave',compact('list'));

}

public function leavecreate(){

    $employee=Employee::all();

        return view('backend.pages.leavecreate',compact('employee'));

   }


    public function leve(Request  $request)
    {
        // dd($request->all());
       leave::create([
            'employee_id'=> $request->employee_id,
            'leavereason'=> $request->leavereason,
            'fromdate'=> $request->fromdate,
            'todate'=>$request->todate,
       ]);

        return redirect()->back();
    }

}

