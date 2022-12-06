<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\attendance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        //  dd($request->all());
         attendance::create([
            'id'=> $request->id,
            'date'=> $request->date,
            'intime'=> $request->intime,
            'outtime'=> $request->outtime,
            'employee_id'=> $request->employee_id,



        ]);
        return redirect()->back();
    }

    public function deleteattendance(int $attendance_id)
    {
           $test=attendance::find($attendance_id);
             if($test)
             {
                 $test->delete();
                 return redirect()->back()->with('message','attendance deleted successfully.');
             }else{
                 return redirect()->back()->with('error','attendance not found.');
             }

}
public function viewattendance(int $attendance_id)
{
       $attendance=attendance::find($attendance_id);


       return view('backend.pages.Attendanceview',compact('attendance'));


}

public function edit( $attendance_id)
    {
        // dd($attendance_id);
        $attendance=attendance::find($attendance_id);
        $employees=Employee::all();
        return view('backend.pages.Attendanceedit',compact('attendance','employees'));
    }

public function update(Request  $request,$attendance_id)
    {

    //    dd($request->all());
    $attendance=attendance::find($attendance_id);
//

$attendance->update([

    'date'=> $request->date,
    'intime'=> $request->intime,
    'outtime'=> $request->outtime,
    'employee_id'=> $request->employee_id,



        ]);
        return redirect()->back()->with('message','Update success.');


}


}
