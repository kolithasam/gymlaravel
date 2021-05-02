<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clients;

class clientscontroller extends Controller
{
    //
    function addData(Request $req)
    {
        $users=new clients;
        $users->email=$req->email;
        $users->height=$req->height;
        $users->weight=$req->weight;
        $users->age=$req->age;
        $users->goal=$req->goal;
        $users->save();
        return redirect('clientform');

        


    }



    
  function list()
  {

    $data = clients::all();

    return view('clientprofiledetails', ['members' => $data]);
  }

  public function getwork($wId)
  {
    $item = clients::where('email', $wId)->first();
    return view('clientprofiledetails')->with('i', $item);
  }



    
}
