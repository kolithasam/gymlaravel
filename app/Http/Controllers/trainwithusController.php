<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\addcoachs;
use App\Models\users;
use App\Models\hired_by;

use Illuminate\Support\Facades\Auth;

class trainwithusController extends Controller
{
  public function upload(Request $request)
  {

    $request->validate([
      'name' => 'required',

      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $item = new addcoachs();

    $item->name = $request->name;


    $imageName = time() . '.' . $request->image->extension();
    $request->image->move(public_path('images'), $imageName);

    $item->c_image = $imageName;
    $item->save();
    return "okay";
  }


  public function getcoach()
  {





    $users = DB::table('users')
      ->join('coaches', 'users.email', '=', 'coaches.email')
      ->select(
        'users.first_name',
        'users.last_name',
        'coaches.c_image',
        'coaches.email'
      )
      ->get();
    return view('trainwithus', ['data' => $users]);
  }
}
