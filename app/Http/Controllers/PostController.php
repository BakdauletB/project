<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;

class PostController extends Controller
{
    //
    
    public function store(Request $request){
        $client = new App();
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->password = $request->input('password');
        $client->confirm = $request->input('confirm');
        if($request->hasFile('Image')){
            $file = $request->file('Image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'.  $extension;
            $file->move('images' , $filename);
            $client->Image = $filename;
         }else{
            $client->Image = 'nofile';
        }
        

        $client->save();

        
        return redirect('/email/sending');
    }
}
