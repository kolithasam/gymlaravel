<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\addworkouts;

class addworkoutscontroller extends Controller

{
  public function upload(Request $request)
  {


    $request->validate([
      'name' => 'required',
      'date' => 'required',
      'note' => 'required',
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);


    $item = new addworkouts();

    $item->name = $request->name;
    $item->date = $request->date;
    $item->note = $request->note;
    $item->category_id = $request->category_id;

    $imageName = time() . '.' . $request->image->extension();
    $request->image->move(public_path('images'), $imageName);

    $item->image = $imageName;
    $item->save();


    $item->save();
    return redirect("addworkouts");
  }





  public function getchest()
  {



    $data = addworkouts::where('category_id', 0)->paginate(10);
    return view('workouts', ['data' => $data]);
  }

  public function getshoulders()
  {



    $data = addworkouts::where('category_id', 1)->paginate(10);
    return view('workouts', ['data' => $data]);
  }


  public function getback()
  {



    $data = addworkouts::where('category_id', 2)->paginate(10);
    return view('workouts', ['data' => $data]);
  }

  public function getlegs()
  {


    $data = addworkouts::where('category_id', 3)->paginate(10);
    return view('workouts', ['data' => $data]);
  }

  public function getbiceps()
  {



    $data = addworkouts::where('category_id', 4)->paginate(10);
    return view('workouts', ['data' => $data]);
  }

  public function gettricep()
  {


    $data = addworkouts::where('category_id', 5)->paginate(10);
    return view('workouts', ['data' => $data]);
  }

  public function getabs()
  {



    $data = addworkouts::where('category_id', 6)->paginate(10);
    return view('workouts', ['data' => $data]);
  }

  public function getcardio()
  {



    $data = addworkouts::where('category_id', 7)->paginate(10);
    return view('workouts', ['data' => $data]);
  }


  public function getwork($wId)
  {
    $item = addworkouts::where('w_id', $wId)->first();
    return view('workoutview')->with('i', $item);
  }




  //delete

  function list()
  {

    $data = addworkouts::all();

    return view('editworkout', ['members' => $data]);
  }

  function delete($item_id)
  {

    $data = addworkouts::where('w_id', $item_id)->delete();
    return redirect('editworkout');
  }




  public function update(Request $request, $id)
  {

    $data = addworkouts::where('w_id', $id)->first();
    $data->name = $request->name;
    $data->date = $request->date;
    $data->note = $request->note;
    $data->category_id = $request->category_id;
    $data->save();
    return "success";
  }
}
