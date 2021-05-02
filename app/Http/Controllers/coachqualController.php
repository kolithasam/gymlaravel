<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coach_qualifications;


class coachqualController extends Controller
{
    //


    function addData(Request $req)
    {
        $users=new coach_qualifications;
        $users->qualification=$req->qualification;
   
        $users->email=$req->email;
     
        $users->save();
        return redirect('coachqual');

        


    }
}
