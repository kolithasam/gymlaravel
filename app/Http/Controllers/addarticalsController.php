<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addarticals;

class addarticalsController extends Controller
{
    

    public function upload(Request $request){

 

        $item = new addarticals();

        $item->name=$request->name;
        $item->date=$request->date;
        $item->note=$request->note;
        

        $item->save();
        return "okay";
    }

  
    public function getartical(){


        $data=addarticals::all();
        return view('articals',['data'=>$data]);
     
         }
     

  function list()
  {

    $data = addarticals::all();

    return view('articalsedit', ['members' => $data]);
  }



  function delete($item_id)
  {
    //return "okay";

    $data = addarticals::where('id_artical',$item_id)->delete();


   return redirect('articalsedit');

  }
  



     
}







