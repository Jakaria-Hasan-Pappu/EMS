<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\employeeleavebalance;

class employeeleavebalance extends Controller
{
    //
    public function employeeleavebalance()
 {
    $list=employeeleavebalance::all();
    //    dd($list);
    return view('backend.pages.employeeleavebalance',compact('list'));



 }

 
}
