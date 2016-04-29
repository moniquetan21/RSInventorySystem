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

Route::get('/', "UserController@showDashboard");

Route::get('/InventorySys/index',"indexhtmlcontroller@showIndex");
	

Route::get('/dashboard', "UserController@showDashboard");
Route::get("/tickets/dashboard", "TicketsController@showDashboard");
Route::get("/tickets/welcome", "TicketsController@showWelcome");
Route::get("/tickets/login", "TicketsController@login");


