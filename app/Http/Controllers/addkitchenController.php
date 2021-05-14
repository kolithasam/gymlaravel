<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\addkitchens;

class addkitchenController extends Controller
{
      
    public function upload(Request $request){


        $request->validate([
            'name' => 'required',
            'note' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $item = new addkitchens();

        $item->name=$request->name;
        $item->note=$request->note;
        

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $item->kit_image = $imageName;
        $item->save();
        return redirect("addkitchen");
    }


      
    public function getkit(){

        $data=addkitchens::all();
        return view('kitchen',['data'=>$data]);
     
     
    }


    public function getwork($kId)
    {
      $item = addkitchens::where('id_k', $kId)->first();
      return view('kitchenview')->with('kit', $item);
    }
  

    function list()
    {
  
      $data = addkitchens::all();
  
      return view('kitchenedit', ['members' => $data]);
    }
  


    function delete($item_id)
    {  
      $data = addkitchens::where('id_k',$item_id)->delete();
  
  
     return redirect('kitchenedit');
  
    }








}
