<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\coaches;
use App\Models\users;
use App\Models\applications;




class coachController extends Controller
{
    public function upload(Request $request){


     //   $users = DB::table('users')
      //  ->join('coaches', 'users.email', '=', 'contacts.email')
      //  ->select('users.first_name', 'users.last_name', 'coaches.c_image')
      //  ->get();    

       
      $item = new users();
  
      $item->email=$request->email;
    $item->first_name=$request->first_name;
    $item->last_name=$request->last_name;
    $item->phone=$request->phone;
    $item->password = Hash::make($request->password);

       $item->save();
      // return "okay";
      
      $data = new applications();

      $data->email= $item->email;
    $data->first_name=$request->first_name;
    $data->last_name=$request->last_name;
    $data->description=$request->description;

       $imageName = time().'.'.$request->image->extension();
       $request->image->move(public_path('images'), $imageName);

       $data->image = $imageName;
       $data->save();
       return redirect('coachapplication');


 




      }

      function list()
      {
        $users = DB::table('users')
        ->join('applications', 'users.email', '=', 'applications.email')
      
        ->get();  
        return view('addcoachpage',['data'=>$users]);
  
      
      }



      function delete($item)
     {
        DB::table('users')
        ->where('users.email', $item)
         ->delete();
        //  DB::table('applications')
        //  ->where('applications.email', $item)
        //   ->delete();




        return redirect('addcoachpage');
     
         return "okay";




         



      
      }

      function accept($item)
      {
        $application = DB::table('applications')
        ->where('applications.email', $item)
        ->first();
       
     
        $coach = new coaches(); 

        $coach->email = $application->email;
        $coach->c_image = $application->image;
        $coach->note= $application->description;
        $coach->save();
        return redirect('addcoachpage');


      }
     
        




}

