<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hired_by;

class hiredbyController extends Controller
{
    //

    function addData(Request $req)
    {
        $users=new hired_by;
        $users->client_email=$req->client_email;
        $users->coach_email=$req->coach_email;
        $users->start_date=$req->start_date;
        $users->end_date=$req->end_date;
     
        $users->save();
        return redirect('hiredby');

        


    }
}
