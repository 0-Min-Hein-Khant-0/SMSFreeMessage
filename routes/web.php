<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

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

Route::post('/sendmsg',function(Request $request){
	$sid =getenv("TWILIO_SID");
	$auth_token=getenv("TWILIO_AUTH_TOKEN");
	$twilio_number= getenv("TWILIO_NUMBER");

	$client =new Client($sid,$auth_token);
	$client->messages->create($request->phone_number, ['from' => $twilio_number, 'body' =>$request->message]);
	return back();

	
})->name("sendMessage");
