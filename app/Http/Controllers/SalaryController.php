<?php

namespace App\Http\Controllers;

use App\Models\salary;
use App\Models\Employee;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function salary (){

        $list=salary::all();

        return view('backend.pages.salary',compact('list'));
    }

    public function salarycreate(){

        $employee=Employee::all();


        return view('backend.pages.salarycreate',compact('employee'));

    }

    public function salaryform(Request  $request)
    {
        // dd($request->all());
       salary::create([
            'id'=> $request->id,
            'amount'=> $request->amount,
            'month'=> $request->month,
            'status'=>$request->status,
            'employee_id'=>$request->employee_id,


        ]);
        return redirect()->back();
    }

    public function deletesalary( $salary_id)
    {
           $test=salary::find($salary_id);
             if($test)
             {
                 $test->delete();
                 return redirect()->back();
             }else{
                 return redirect()->back()->with('error');
             }

}
public function viewsalary($salary_id)
{
  $salary=salary::find($salary_id);
  return view('backend.pages.salaryview',compact('salary'));
}

public function edit( $salary_id)
    {

        $salary=salary::find($salary_id);
        $employees=Employee::all();

        return view('backend.pages.salaryedit',compact('salary','employees'));
    }

    public function update(Request $request,$leave_id)
    {

    //    dd($request->all());
    $salary=salary::find($leave_id);
    // dd($leave);
//

$salary->update([


    'amount'=> $request->amount,
    'month'=> $request->month,
    'status'=>$request->status,
    'employee_id'=>$request->employee_id,

]);
return redirect()->back();

}





}
