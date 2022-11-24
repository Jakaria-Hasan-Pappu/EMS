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
}
