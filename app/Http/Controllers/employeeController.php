<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
   public function employee(){
       $list=Employee::all();
    return view('backend.pages.employee',compact('list'));
    

   }
   public function employeecreate(){
        return view('backend.pages.Employeecreate');

   }

   public function emc(Request  $request)
    {
        //dd($request->all());
        Employee::create([
            'name'=> $request-> name,
            'email'=> $request-> email,
            'password'=> $request-> password,
            
        ]);
        return redirect()->back();
    }
}
