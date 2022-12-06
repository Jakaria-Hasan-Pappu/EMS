<?php

namespace App\Http\Controllers;


use App\Models\leave;
use App\Models\Leavetype;
use Illuminate\Http\Request;

class leavetypeController extends Controller
{
    public function leavetype (){

        $list=Leavetype::all();

        return view('backend.pages.leavetype',compact('list'));
    }

    public function leavetypecreate(){

        $leave=leavetype::all();


            return view('backend.pages.leavetypecreate');

       }
       public function leavetypestore(Request  $request)
       {
           // dd($request->all());
          leavetype::create([
            
               'name'=> $request->name,
               'balance'=> $request->balance,

          ]);

           return redirect()->back();
       }


}
