<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;

class employeeController extends Controller
{
   public function employee(){
       $list=Employee::paginate(5);
    //    dd($list);
    return view('backend.pages.employee',compact('list'));
    

   }
   public function employeecreate(){
    $departments=Department::all();
        return view('backend.pages.Employeecreate',compact('departments'));

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
            'password'=>$request->password,
            'department_id'=>$request->department_id
            
        ]);
        return redirect()->back()->with('message','Employee Created Successful.');
    }
}
