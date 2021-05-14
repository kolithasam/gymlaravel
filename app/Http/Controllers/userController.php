<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\coaches;
use App\Models\hired_bies;




class userController extends Controller
{

  function addData(Request $req)
  {

    $req->validate([
      'first_name' => 'required',
      'last_name' => 'required',
      'role' => 'role',
      'email' => 'email',
      'phone' => 'required',
      'password' => 'required',

    ]);

    $users = new users;
    $users->first_name = $req->first_name;
    $users->last_name = $req->last_name;
    $users->role = $req->role;
    $users->email = $req->email;
    $users->phone = $req->phone;
    $users->password = Hash::make($req->password);
    $users->save();
    return redirect('user');
  }

  function login(Request $req)
  {



    $credentials = $req->only('email', 'password');

    if (Auth::attempt($credentials)) {

      $user = Auth::user();
      $role = $user->role;
      if ($role === 'CLIENT') {
        return view('welcome');
      }
      if ($role === 'COACH') {

        $coachEmail = Auth::user()->email;
        $clients = hired_bies::where('coach_email', $coachEmail)->get();
        return view('coachaccount')->with('clients', $clients);
      }
    } else {

      $req->session()->flash('error', "");

      return redirect()->back();
    }
  }


  function list()
  {

    $data = users::all();

    return view('useredite', ['members' => $data]);
  }

  function delete($item_id)
  {

    $data = users::where('email', $item_id)->delete();
    return redirect('useredite');
  }


  function showData($item_id)
  {

    $data = users::where('email', $item_id)->first();
    return view('userupdate', ['data' => $data]);
  }

  function update(Request $req, $id)
  {

    $data = users::where('email', $id)->first();



    $data->email = $req->email;
    $data->first_name = $req->first_name;
    $data->last_name = $req->last_name;
    $data->phone = $req->phone;
    $data->role = $req->role;
    $data->password = $req->password;

    $data->save();
    return redirect('useredite');
  }


  public function gethclientemail()

  {




    $coachEmail = Auth::user()->email;
    $clients = users::where('email', $coachEmail)->get();
    return view('clientform')->with('clients', $clients);
  }



  public function logout()
  {

    Auth::logout();
    return redirect('/');
  }
}
