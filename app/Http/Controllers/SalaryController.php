<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function Salary (){
        return view ('backend.pages.salary');
    }
}
