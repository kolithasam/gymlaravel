<?php

namespace App\Http\Controllers;

use App\Models\applications;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class applicationController extends Controller
{


  public function uploads(Request $request)
  {

    $request->validate([
      'first_name' => 'required',
      'last_name' => 'required',

      'email' => 'email',
      'phone' => 'required',
      'password' => 'required',

    ]);

    $item = new users();

    $item->email = $request->email;
    $item->first_name = $request->first_name;
    $item->last_name = $request->last_name;
    $item->phone = $request->phone;
    $item->password = Hash::make($request->password);

    $item->save();
    // return "okay";

    $item = new applications();

    $item->email = $request->email;
    $item->first_name = $request->first_name;
    $item->last_name = $request->last_name;
    $item->description = $request->description;

    $imageName = time() . '.' . $request->image->extension();
    $request->image->move(public_path('images'), $imageName);

    $item->image = $imageName;
    $item->save();
    return "okay";
  }
}
