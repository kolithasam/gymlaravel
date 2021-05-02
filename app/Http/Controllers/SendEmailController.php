<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    function index()
    {
     return view('send_email');
    }
    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'postcode' =>  'required',
      'address' =>  'required',
      'message' =>  'required'



     ]);

        $data = array(
            'name'      =>  $request->name,
            'email'      =>  $request->email,
            'postcode'      =>  $request->postcode,
            'address' =>  $request->address,
            'message'   =>   $request->message
        );

     Mail::to('kolithasam19@gmail.com')->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}

