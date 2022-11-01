<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboards(){
        return view('backend.pages.dashboards');
    }
}
