<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orderdiets;
use Illuminate\Support\Facades\DB;

class dietplanController extends Controller
{
    
    public function upload(Request $request){

 

        $item = new orderdiets();

        $item->name=$request->name;
        $item->email=$request->email;
        $item->phone=$request->phone;
        $item->gender=$request->category;
        $item->weight=$request->weight;
        $item->height=$request->height;
        $item->goal=$request->note;
        $item->address=$request->address;
        $item->payment=$request->payment;

        

        $item->save();
        return redirect("dietplanlist");
    }
     

    function list()
{

$data=orderdiets::all();

return view('dietlist',['members'=>$data]);

}



function delete($item_id)
{
    $data=orderdiets::where('id_d',$item_id)->delete();
    return redirect('dietlist');


}

   






}
