<?php

namespace App\Http\Controllers;

use App\Models\App;
use Illuminate\Http\Request;
use App\Models\Capp;

class LoginController extends Controller
{
    //
   
    public function store(Request $request){

        
        $client = new Capp();
        $client->name = $request->input('name');
        
        $client->password = $request->input('password');
      
    
        

        $client->save();

        
        return redirect('/login');
    }
}
