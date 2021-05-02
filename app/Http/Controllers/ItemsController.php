<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\store_items;
use App\Models\storeorders;


class ItemsController extends Controller
{
    
    public function upload(Request $request){

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'note' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $item = new store_items();
        $item ->item_id=$request->item_id;
        $item->name=$request->name;
        $item->price=$request->price;
        $item->description=$request->note;
        $item->category_id=$request->category;
 


        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $item->main_image = $imageName;
        $item->save();
        return "okay";
    }

    public function getProteins(){
        $items = store_items::where('category_id', 0)->paginate(10);
        return view('items')->with('items',$items);
    }
    

    public function getClothing(){
        $items = store_items::where('category_id', 3)->paginate(10);
        return view('items')->with('items',$items);
    }

    public function getItem($itemId) {
       $item = store_items::where('item_id', $itemId)->get(); //
       return view('item')->with('item', $item);
    }

    
    public function getPerformance(){
        $items = store_items::where('category_id', 1)->paginate(10);
        return view('items')->with('items',$items);
    }
    public function getWeight_Management(){
        $items = store_items::where('category_id', 2)->paginate(10);
        return view('items')->with('items',$items);
    }


// delete

function list()
{

$data=store_items::all();

return view('itemedit',['members'=>$data]);

}

function delete($item_id)
{

$data=store_items::where('item_id',$item_id)->delete();
return redirect('itemedit');

}


function showData($item_id)
{
//$data=store_items::find($item_id);
$data=store_items::where('item_id',$item_id)->first();
 return view('itemupdate' ,['data'=>$data]);


    


//$data= store_items::find($item_id);
//$data = store_items::find($item_id);
//return view('itemupdate')->with('data', $data);



}


function update (Request $req,$id)
{
    
    $data=store_items::where('item_id',$id)->first();

 
    $data->name=$req->name;
    $data->description=$req->description;
    $data->main_image=$req->main_image;
    $data->price=$req->price;
    $data->save();
    return redirect('itemedit');





}


//storeorders



public function storeupload(Request $request){



    $item = new storeorders();
    $item ->name=$request->name;
    $item->email=$request->email;
    $item->mobile=$request->mobile;
    $item->postcode=$request->postcode;
    $item->address=$request->address;
    $item->category=$request->category;
    $item->item_name=$request->item_name;
    

    $item->save();
    return redirect('/');



}









function storeorder()
{

$data=storeorders::all();

return view('storeorders',['members'=>$data]);

}











}
