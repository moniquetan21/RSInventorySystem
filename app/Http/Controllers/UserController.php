<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller{
	/**
	 * Show the login page for the given user
	 * 
	 */
	 public function showLogin(){
	 	return view("user.login");
	 }
}
