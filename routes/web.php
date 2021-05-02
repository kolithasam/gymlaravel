<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\coachController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\addarticalsController;
use App\Http\Controllers\addkitchenController;
use App\Http\Controllers\clientscontroller;
use App\Http\Controllers\addworkoutscontroller;

use App\Http\Controllers\dietplanController;
use App\Http\Controllers\coachqualController;
use App\Http\Controllers\trainwithusController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/control', function () {
    return view('control');
});
Route::get('/store', function () {
    return view('store');
});

//Route::get('/protein', function () {
   // $data=App\Models\protein::all();
   // return view('protein')->with('proteins',$data);
    //return view('protein');
//});
//Route::get('/performance', function () {
    //return view('performance');
//});
Route::get('/navi', function () {
    return view('navi');
});

Route::get('/weightmg', function () {
    return view('weightmg');
});

Route::get('/clothing', function () {
    return view('clothing');
});



Route::post('submitform','proteinads@submitform');


Route::get('/performanceads', function () {
    return view('controlpanel.store.performanceads');
});
Route::get('/weightmgt', function () {
    return view('controlpanel.store.weightmgt');
});
Route::get('/clothingacc', function () {
    return view('controlpanel.store.clothingacc');
});



Route::get('/bodycal', function () {
    return view('bodycal');
});

Route::get('/account', function () {
    return view('account');
});
Route::get('/emailcv', function () {
    return view('emailcv');
});

Route::view('user','user');
Route::post('user',[userController::class,'addData']);





















Route::view('coachqual','coachqual');
Route::post('coachqual',[coachqualController::class,'addData']);







Route::view('hiredby','hiredby');
Route::post('clients',[hiredbyController::class,'addData']);






Route::get('/proteinview', function () {
    return view('proteinview
    ');
});


Route::get('/proteinview/{itemId}', [ItemsController::class, 'getItem']);










Route::get('/bmical', function () {
    return view('bmical');
});
Route::get('/caloriescal', function () {
    return view('caloriescal');
});
Route::get('/bodyfatcal', function () {
    return view('bodyfatcal');
});


Route::get('/selectaccount', function () {
    return view('selectaccount');
});



Route::get('/trainerreq', function () {
    return view('trainerreq');
});






//Items


Route::view('itemAds','itemAds');
Route::post('itemAds',[ItemsController::class, 'upload']);
Route::get('/protein', [ItemsController::class, 'getProteins']);
Route::get('/clothing', [ItemsController::class, 'getClothing']);
Route::get('/performance', [ItemsController::class, 'getPerformance']);
Route::get('/weightmg', [ItemsController::class, 'getWeight_Management']);
Route::get('/item/{itemId}', [ItemsController::class, 'getItem']);
//Route to delete page
Route::get('itemedit',[ItemsController::class,'list']);
Route::get('storeorders',[ItemsController::class,'storeorder']);
Route::post('ordersupplement',[ItemsController::class, 'storeupload']);



Route::get('item/delete/{item_id}',[ItemsController::class,'delete']);

//update
Route::get('edit/{item_id}',[ItemsController::class,'showData']);
Route::post('itemupdate/{id}',[ItemsController::class, 'update']);

















// Route::get('/item/{prodId}', function ($prodId) {
//     return view('item');
// });


//Route::view('addcoachpage','addcoachpage');
//Route::post('addcoachpage',[coachController::class, 'upload']);
//Route::get('add',[coachController::class,'list']);
//Route::get('addcoachpage',[coachController::class,'list']);

Route::get('/trainwithus', [trainwithusController::class, 'getcoach']);







//Topworkout

Route::view('addworkouts','addworkouts');
Route::post('addworkouts',[addworkoutscontroller::class, 'upload']);

Route::view('topworkout','topworkout');


Route::get('/chest', [addworkoutscontroller::class, 'getchest']);
Route::get('/shoulders', [addworkoutscontroller::class, 'getshoulders']);
Route::get('/back', [addworkoutscontroller::class, 'getback']);
Route::get('/legs', [addworkoutscontroller::class, 'getlegs']);
Route::get('/biceps', [addworkoutscontroller::class, 'getbiceps']);
Route::get('/tricep', [addworkoutscontroller::class, 'gettricep']);
Route::get('/abs', [addworkoutscontroller::class, 'getabs']);
Route::get('/cardio', [addworkoutscontroller::class, 'getcardio']);
Route::get('/workoutview/{wId}', [addworkoutscontroller::class, 'getwork']);


Route::get('editworkout',[addworkoutscontroller::class,'list']);
Route::get('workout/delete/{w_id}',[addworkoutscontroller::class,'delete']);
//Route::get('edit/{id}',[addworkoutscontroller::class,'update']);



//kitchen

Route::view('addkitchen','addkitchen');
Route::post('addkitchen',[addkitchenController::class, 'upload']);
Route::get('/kitchen', [addkitchenController::class, 'getkit']);




//Artical


Route::view('addartical','addartical');
Route::post('addartical',[addarticalsController::class, 'upload']);
Route::get('/articals', [addarticalsController::class, 'getartical']);
Route::get('articalsedit',[addarticalsController::class,'list']);
Route::get('artical/delete/{id_artical}',[addarticalsController::class,'delete']);



//coach
Route::view('coachapplication','coachapplication');
Route::post('coachapplication',[coachController::class,'upload']);
Route::get('addcoachpage',[coachController::class,'list']);
Route::get('addcoach/delete/{email}',[coachController::class,'delete']);
Route::get('addcoach/accept/{email}',[coachController::class,'accept']);





















Route::view('account','account');
Route::post('account',[userController::class,'login']);








//Route::post('showData',[ItemsController::class,'update']);



//Route::view('account','account');
//Route::post('account',[userController::class,'login']);




// Route::get('/protein', function () {
//     return view('protein');
// });

Route::view('ordersupplement','ordersupplement');







Route::view('dietplanlist','dietplanlist');
Route::view('dietplans','dietplans');
Route::post('dietplans',[dietplanController::class, 'upload']);
Route::get('dietlist',[dietplanController::class,'list']);
Route::get('diet/delete/{id_d}',[dietplanController::class,'delete']);

//users

Route::get('useredite',[userController::class,'list']);
Route::get('user/delete/{email}',[userController::class,'delete']);
Route::get('useredit/{email}',[userController::class,'showData']);
Route::post('userupdate/{email}',[userController::class, 'update']);




//clientprofile

Route::view('clientprofile','clientprofile');
Route::view('clientform','clientform');
Route::view('clientprofiledetails','clientprofiledetails');
Route::post('clientform',[clientscontroller::class,'addData']);








Route::get('/logout',[userController::class,'logout']);


//Route::post('itemupdate/{id}',[ItemsController::class, 'update']);

