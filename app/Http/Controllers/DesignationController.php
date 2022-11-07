<?php

namespace App\Http\Controllers;

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

    return view('backend.pages.designationcreate');   
}
public function dsg(Request $request)
    {
        //dd($request->all());
        Designation::create([
            'department_name'=> $request->department_name,
            'designation'=> $request->designation,
            'status'=> $request->status,
            
        ]);
        return redirect()->back();
    }



}