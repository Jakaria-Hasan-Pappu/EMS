<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeeController extends Controller
{
   public function employee(){

    return view('backend.pages.employee');

   }
}
