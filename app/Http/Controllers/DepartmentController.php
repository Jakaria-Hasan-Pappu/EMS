<?php

namespace App\Http\Controllers;


use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function department(){
      
        $list=Department::all();
        // dd($list);
        return view('backend.pages.department',compact('list'));
        
}

public function departmentcreate(){

    return view('backend.pages.Departmentcreate');   
}

public function dpt(Request $request)
    {
        // dd($request->all());
        Department::create([
            'name'=> $request-> name,
            'email'=> $request-> email,
            'room'=> $request-> room
        ]);
        return redirect()->back();
    }
}