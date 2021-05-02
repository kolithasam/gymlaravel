<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\protein;
use Illuminate\Support\Facades\DB;

class itemAds extends Controller
{
  function submitform(Request $req)

  {

    $data = new itemAds();
    $data->name = $req->name;
    $data->price = $req->price;

    if ($req->hasfile('image')) {

      $file = $req->file('image');
      $extension = $file->getClientOriginalExtension();
      $filename = time() . '.' . $extension;
      $file->move('uploads/', $filename);
      $data->save();
    } else {

      return $req;
      $data->image = '';
    }

    $data->save();
    return redirect('controlpanel.store.proteinads');
  }


}
