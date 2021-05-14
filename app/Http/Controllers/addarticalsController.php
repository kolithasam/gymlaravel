<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\addarticals;

class addarticalsController extends Controller
{


  public function upload(Request $request)
  {

    $request->validate([
      'name' => 'required',
      'date' => 'required',
      'note' => 'required',

    ]);


    $item = new addarticals();

    $item->name = $request->name;
    $item->date = $request->date;
    $item->note = $request->note;


    $item->save();
    return redirect("addartical");
  }


  public function getartical()
  {


    $data = addarticals::all();
    return view('articals', ['data' => $data]);
  }


  function list()
  {

    $data = addarticals::all();

    return view('articalsedit', ['members' => $data]);
  }



  function delete($item_id)
  {
 

    $data = addarticals::where('id_artical', $item_id)->delete();


    return redirect('articalsedit');
  }

  public function getwork($aId)

  {
    $item = addarticals::where('id_artical', $aId)->first();
    return view('articalview')->with('a', $item);
  }
}
