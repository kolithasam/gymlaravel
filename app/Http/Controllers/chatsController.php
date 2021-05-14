<?php

namespace App\Http\Controllers;
use App\Models\chats;
use App\Models\clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class chatsController extends Controller
{
    
 public function postchat( Request $req )
 {
    $coachemail=Auth::user()->email;
    $user = new chats;
    $user->coach_email=$coachemail;
    $user->client_email = $req->email;
    $user->workout = $req->note1;
    $user->diet = $req->note2;
    $user->save();
    return redirect('coachaccount');
 


 }






    
}
