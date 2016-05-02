<?php
namespace App\Http\Controllers;

use App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client as Client;
use App\ClientProfile as ClientProfile;


class TicketsController extends Controller{
	
	/**
	 * Show the dashboard for tickets
	 * 
	 */
	 public function showDashboard(Request $request){
	 	return view("tickets.dashboard");
	 }
	 
	/**
	 * Show the welcome page for tickets
	 * 
	 */
	 public function showWelcome(Request $request){
	 	
		$client_profile = ClientProfile::find(1);
		
	 	return view("tickets.welcome", array("client_profile"=>$client_profile));
	 }
	 
	 /**
	 * Show the dashboard for tickets
	 * 
	 */
	 public function showLogin(){
	 	return view("tickets.login");
	 }
	 
	 public function showSignUp(){
	 	return view("tickets.ticketSignUp");
	 }
	 
	 public function showForgotPassword(){
	 	return view("tickets.forgotpassword");
	 }
	   
	   public function processSignUP(Request $request){
	 	$post_data = $request->all();
		 // get all the data that has been posted from the form
		 $post_data = $request->all();
		
		 $client = new Client();
		 $client->department_id = $post_data['dept'];
		 $client->email = $post_data['email'];
		 $client->password = sha1($post_data['password']);
		 $client->date_registered = date('Y-m-d H:i:s');		 
		 $client->save();
			
	 }
}
