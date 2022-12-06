<?php

namespace App\Http\Controllers;

use App\Models\leave;
use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;

class employeeController extends Controller
{
   public function employee(){
       $list=Employee::all();
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
            'image'=>'required'


    ]);
    $fileName=null;
        if($request->hasFile('image'))
        {
            // generate name
            $fileName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }



        Employee::create([
            //database column name => input field name
            'name'=>$request->name,
            'email'=>$request->email,
            'image' => $fileName,
            'password'=>$request->password,
            'department_id'=>$request->department_id


        ]);
        return redirect()->back()->with('message','Employee Created Successful.');
    }

    public function deleteEmployee(int $employee_id)

    {

           $test=Employee::find($employee_id);
             if($test)
             {
                 $test->delete();
                 return redirect()->back()->with('message','employee deleted successfully.');
             }else{
                 return redirect()->back()->with('error','employee not found.');
             }
//        Employee::findOrFail($product_id)->delete();
//        return redirect()->back()->with('message','product deleted successfully.');
    }
    public function viewEmployee($employee_id)
    {
      $employee=Employee::find($employee_id);
      $leave=leave::where('employee_id',$employee_id)->get();
      

      return view('backend.pages.view',compact('employee','leave'));
    }

    public function edit($employee_id)
    {
        $employee=Employee::find($employee_id);
        $departments=Department::all();
        return view('backend.pages.edit',compact('employee','departments'));
    }

    public function update(Request $request,$employee_id)
    {

//        dd($request->all());
//        Employee::find($employee_id)->update([
//            'department_id' => $request->category_id,
//            'stock' => $request->product_stock,
//            'price' => $request->product_price,
//            'status' => $request->status,
//            'description' => $request->description
//        ]);

        $employee=Employee::find($employee_id);
        $fileName=$employee->image;

        if($request->hasFile('image'))
        {
            // generate name
            $fileName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }


        $employee->update([
            //database column name => input field name
            'name'=>$request->name,
            'email'=>$request->email,
            'image' => $fileName,
            'department_id'=>$request->department_id

        ]);

        return redirect()->route('employee')->with('message','Update success.');

    }
}
