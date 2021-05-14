<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\clients;
use App\Models\chats;
use App\Models\hired_bies;
use PhpParser\Node\Expr\FuncCall;

class clientscontroller extends Controller
{
  //
  function addData(Request $req)
  {
    $users = new clients;
    $users->email = $req->email;
    $users->height = $req->height;
    $users->weight = $req->weight;
    $users->age = $req->age;
    $users->goal = $req->goal;
    $users->save();
    return redirect('clientform');
  }




  public function list()
  {

    $data = clients::all();

    return view('clientprofiledetails', ['members' => $data]);
  }

  public function getclient()
  {




    $coachEmail = Auth::user()->email;
    $clients = clients::where('email', $coachEmail)->get();
    return view('clientprofiledetails')->with('clients', $clients);
  }


  function showData($item_id)
  {

    $data = clients::where('email', $item_id)->first();
    return view('updateclientbodydeatails', ['data' => $data]);
  }

  function update(Request $req, $email)
  {

    $data = clients::where('email', $email)->first();



    $data->height = $req->height;
    $data->weight = $req->weight;
    $data->age = $req->age;
    $data->goal = $req->goal;
    $data->save();
    return redirect('clientprofile');
  }


  //public function gethcoaches()

  //{


  //$clientEmail =Auth::user ()->email;
  //$clients = hired_bies::where('client_email',$clientEmail)->get();
  //return view('clientchat')->with('clients',$clients);


  // }
  public function gethcoaches()

  {


    $coachEmail = Auth::user()->email;
    $clients = chats::where('client_email', $coachEmail)->get();
    return view('clientchat')->with('clients', $clients);
  }


  public function getworkout($aId)
  {

    $item = chats::where('id', $aId)->first();
    return view('clientviewshedule')->with('clients', $item);
  }



  function delete($item_id)
  {
    //return "okay";

    $item = chats::where('id',$item_id)->delete();


   return redirect('clientchat');

  }
}
