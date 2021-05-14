<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\store_items;

class searchController extends Controller
{


    public function searchBar(Request $request)
    {
        
  $items = store_items::where('name','LIKE',"%$request->search%")->get();
  return view('items')->with('items',$items);

        
    }
}
