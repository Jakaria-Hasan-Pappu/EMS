<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //

    public function client(){
        $list=client::all();

        return view('backend.pages.client',compact('list'));

}

public function clientcreate(){

        return view('backend.pages.clientcreate');

   }


    public function clientstore(Request  $request)
    {
        //  dd($request->all());
         client::create([
            'id'=> $request->id,
            'name'=> $request->name,
            'phone'=> $request->phone,
            'address'=> $request->address,
            'company'=> $request->company,
           


        ]);
        return redirect()->back();
    }

}


