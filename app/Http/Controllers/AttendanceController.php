<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function attendance(){
        $list=attendance::all();

        return view('backend.pages.attendance',compact('list'));

}

public function attendancecreate(){
     $employees= Employee::all();

        return view('backend.pages.attendancecreate',compact('employees'));

   }


    public function attendancestore(Request  $request)
    {
         dd($request->all());
         attendance::create([
            'id'=> $request->id,
            'date'=> $request->date,
            'intime'=> $request->intime,
            'outtime'=> $request->outtime,
            'employee_id'=> $request->employee_id,



        ]);
        return redirect()->back();
    }

}
