<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EmployeecreateController extends Controller
{
    public function Employeecreate(){

        return view('backend.pages.Employeecreate');
    
    }

    public function emc(Request  $request)
    {
        //dd($request->all());
        User::create([
            'name'=> $request-> name,
            'email'=> $request-> email,
            'password'=> $request-> password,
            
        ]);
        return redirect()->back();
    }
}
