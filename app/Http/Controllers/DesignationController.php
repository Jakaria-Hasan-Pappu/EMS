<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function designation(){

        return view('backend.pages.designation');
    
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