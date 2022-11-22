<?php

namespace App\Http\Controllers;

use App\Models\salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function salary (){

        $list=salary::all();

        return view('backend.pages.salary',compact('list'));
    }

    public function salarycreate(){



        return view('backend.pages.salarycreate');

    }

    public function salaryform(Request  $request)
    {
        // dd($request->all());
       salaries::create([
            'id'=> $request->id,
            'amount'=> $request->amount,
            'month'=> $request->month,
            'status'=>$request->status,
            'employee_id'=>$request->employee_id,


        ]);
        return redirect()->back();
    }
}
