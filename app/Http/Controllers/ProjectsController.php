<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function projects(){

    
            $list=project::all();
    
            return view('backend.pages.projects',compact('list'));
        
    }
    
    public function projectscreate(){
        
        
        return view('backend.pages.projectsstore');
    
    }
    
    public function projectsstore(Request  $request)
    {
        // dd($request->all());
       projects::create([
            'id'=> $request->id,
            'name'=> $request->name,
            'description'=> $request->quantity,
            'deadline'=>$request->status,
            'employee_id'=>$request->employee_id,
            'client_id'=>$request->client_id
            
        ]);
        return redirect()->back();
    }
    
}
