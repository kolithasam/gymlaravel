<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\hired_bies;

class hiredbyController extends Controller
{


    

    public function hirecoaches($email)
    {
      

         $users=new hired_bies;
         $users->coach_email=$email;
        $users->client_email=Auth::user()->email;
              $users->save();
            return view('clientprofile');
      

    }

   




   

    


}
