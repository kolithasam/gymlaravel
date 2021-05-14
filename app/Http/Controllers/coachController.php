<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\coaches;
use App\Models\clients;
use App\Models\hired_bies;
use App\Models\users;
use App\Models\applications;
use Facade\FlareClient\Http\Client;

class coachController extends Controller
{
  public function upload(Request $request)
  {

    $request->validate([
      'first_name' => 'required',
      'last_name' => 'required',
      'email' => 'required',
      'role' => 'required',
      'phone' => 'required',
      'password' => 'required',
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);


    $item = new users();


    $item->email = $request->email;
    $item->first_name = $request->first_name;
    $item->last_name = $request->last_name;
    $item->phone = $request->phone;
    $item->role = $request->role;
    $item->password = Hash::make($request->password);

    $item->save();
    // return "okay";

    $data = new applications();

    $data->email = $item->email;
    $data->first_name = $request->first_name;
    $data->last_name = $request->last_name;
    $data->description = $request->description;

    $imageName = time() . '.' . $request->image->extension();
    $request->image->move(public_path('images'), $imageName);

    $data->image = $imageName;
    $data->save();
    return redirect('coachapplication');
  }

  function list()
  {
    $users = DB::table('users')
      ->join('applications', 'users.email', '=', 'applications.email')

      ->get();
    return view('addcoachpage', ['data' => $users]);
  }



  function delete($item)
  {
    DB::table('users')
      ->where('users.email', $item)
      ->delete();




    return redirect('addcoachpage');

    return "okay";
  }

  function accept($item)
  {
    $application = DB::table('applications')
      ->where('applications.email', $item)
      ->first();


    $coach = new coaches();

    $coach->email = $application->email;
    $coach->c_image = $application->image;
    $coach->note = $application->description;
    $coach->save();
    return redirect('addcoachpage');
  }


  public function gethclients()

  {
    //Details client

    $coachEmail = Auth::user()->email;
    $clients = hired_bies::where('coach_email', $coachEmail)->get();
    return view('coachaccount')->with('clients', $clients);
  }

  public function clientview($email)
  {

    $clients = clients::where('email', $email)->first();
    return view('viewclientcoach')->with('client', $clients);



    // return $email;




  }
  public function clientschd($email)
  {

    $clients = clients::where('email', $email)->first();
    return view('sendschedules')->with('client', $clients);



    // return $email;


  }



  public function hiredelete($item_id)
  {


    $item = hired_bies::where('client_email', $item_id)->delete();


    return redirect('coachaccount');
  }
}
