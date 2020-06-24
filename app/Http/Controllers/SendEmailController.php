<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    public function index(){
        return view('form');

    }
    public function send(Request $request){
        $data = ['name'=>$request->name,'message'=>$request->message];

        Mail::to('buanamandarwings@gmail.com')->send(new SendMail($data));

        return back()->with('success','Email has been Sent');
    }
}
