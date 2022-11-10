<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function designation(){

        $list=Designation::paginate(5);
        //  dd($list);
        return view('backend.pages.designation',compact('list'));
        
}
public function designationcreate(){
    $departments=Department::all();
    return view('backend.pages.designationcreate',compact('departments'));  


     
}
public function dsg(Request $request)
    {
        //dd($request->all());
        Designation::create([
            'department_id'=> $request->department_id,
            'department_name'=> $request->department_name,
            'designation'=> $request->designation,
            'status'=>$request->status,
            
        ]);
        return redirect()->back();
    }



}