<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addkitchens;

class addkitchenController extends Controller
{
      
    public function upload(Request $request){

       // $request->validate([
         //   'name' => 'required',
        //    'price' => 'required',
         //   'note' => 'required',
         //   'category' => 'required',
         //   'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     //   ]);

        $item = new addkitchens();

        $item->name=$request->name;
        $item->note=$request->note;
        

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $item->kit_image = $imageName;
        $item->save();
        return "okay";
    }


      
    public function getkit(){

        $data=addkitchens::all();
        return view('kitchen',['data'=>$data]);
     
     
    }



}
