<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\DemoEmail;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class MailController extends Controller
{
    //
       public function send() {
        $obj = new \stdClass();
        $client = DB::table('apps')->pluck('email')->last();
        Mail::to($client)->send(new DemoEmail($obj));
        return redirect()->back();
    }
}