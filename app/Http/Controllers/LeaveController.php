<?php

namespace App\Http\Controllers;

use App\Models\leave;
use App\Models\Employee;
use App\Models\Leavetype;
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
    $leave=Leavetype::all();


        return view('backend.pages.leavecreate',compact('employee','leave'));

   }


    public function leve(Request  $request)
    {
        // dd($request->all());
       leave::create([
            'employee_id'=> $request->employee_id,
            'leavetype_id'=> $request->leavetype_id,
            'leavereason'=> $request->leavereason,
            'fromdate'=> $request->fromdate,
            'todate'=>$request->todate,
       ]);

        return redirect()->back();
    }
    public function deleteleave(int $leave_id)
    {
           $test=leave::find($leave_id);
             if($test)
             {
                 $test->delete();
                 return redirect()->back()->with('message','leave deleted successfully.');
             }else{
                 return redirect()->back()->with('error','leave not found.');
             }


}

public function viewleave($leave_id)
{
  $leave=leave::find($leave_id);
  return view('backend.pages.leaveview',compact('leave'));
}

public function edit($leave_id)
    {
        // dd($leave_id);
        $leave=leave::find($leave_id);
        // dd($leave);
        $employees=Employee::all();
        return view('backend.pages.Leaveedit',compact('leave','employees'));
    }

public function update(Request $request,$leave_id)
    {

    //    dd($request->all());
    $leave=leave::find($leave_id);
    // dd($leave);
//

$leave->update([

    'leavereason'=> $request->leavereason,
    'fromdate'=> $request->fromdate,
    'todate'=> $request->todate,
    'employee_id'=> $request->employee_id,

]);
return redirect()->back();

}
}
