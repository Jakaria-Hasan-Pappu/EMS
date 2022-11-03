<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\leave;

class LeaveController extends Controller
{
    public function leave(){

        return view('backend.pages.leave');
    
}


    public function leve(Request  $request)
    {
        //dd($request->all());
       leave::create([
            'date'=> $request-> date,
            'cause'=> $request-> cause,
            'duration'=> $request-> duration,
            
        ]);
        return redirect()->back();
    }

}

