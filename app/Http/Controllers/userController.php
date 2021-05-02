<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\coaches;

class userController extends Controller
{
  //
  function addData(Request $req)
  {
    $users = new users;
    $users->first_name = $req->first_name;
    $users->last_name = $req->last_name;
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
        // Authentication passed...
        return view('welcome');
    }



  }


function list()
{

$data=users::all();

return view('useredite',['members'=>$data]);

}

function delete($item_id)
{

$data=users::where('email',$item_id)->delete();
return redirect('useredite');

}


function showData($item_id)
{

$data=users::where('email',$item_id)->first();
 return view('userupdate' ,['data'=>$data]);


    





}

function update (Request $req,$id)
{
    
    $data=users::where('email',$id)->first();

 
    $data->email=$req->email;
    $data->first_name=$req->first_name;
    $data->last_name=$req->last_name;
    $data->phone=$req->phone;
    $data->role=$req->role;
    $data->password=$req->password;
    
    $data->save();
    return redirect('useredite');


}










public function logout()
{

  Auth::logout();
  return redirect('/');

}


}
