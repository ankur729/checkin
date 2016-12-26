<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    // return view('welcome');
    $data=[
    'title'=>'Important Message',
    'content'=>'I want to know you that it s very important man..!'
   ];

   	\Mail::send('email',$data,function($message){

   		$message->to('ank.gsa@gmail.com','BOSS')->subject('Whats going on');
   	});
});
