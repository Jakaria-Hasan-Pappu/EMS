<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\leave;

class LeaveController extends Controller
{
    public function leave(){
        $list=leave::all();

        return view('backend.pages.leave',compact('list'));
    
}

public function leavecreate(){
    
        return view('backend.pages.leavecreate');

   }


    public function leve(Request  $request)
    {
        // dd($request->all());
       leave::create([
            'id'=> $request->id,
            'name'=> $request->name,
            'quantity'=> $request->quantity,
            'status'=>$request->status,
            'designation'=> $request->designation,
            
        ]);
        return redirect()->back();
    }

}

