<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
   public function employee(){
       $list=Employee::paginate(5);
    //    dd($list);
    return view('backend.pages.employee',compact('list'));
    

   }
   public function employeecreate(){
        return view('backend.pages.Employeecreate');

   }

   public function emc(Request  $request)
    {
        // dd($request->all());
        $request->validate([
            'name'=>'required|unique:employees,name',
            'email'=>'required',
            'password'=>'required',
    ]);  
        Employee::create([
            //database column name => input field name
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
            
        ]);
        return redirect()->back();
    }
}
