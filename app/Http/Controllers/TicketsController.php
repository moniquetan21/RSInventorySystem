<?php
namespace App\Http\Controllers;

use App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client as Client;
use App\ClientProfile as ClientProfile;


class TicketsController extends Controller{
	
	 public function showDashboard(Request $request){
	 	return view("tickets.dashboard");
	 }
	 
	 public function showWelcome(Request $request){
	 	
		$client_profile = ClientProfile::find(1);
		
	 	return view("tickets.welcome", array("client_profile"=>$client_profile));
	 }
	 
	 
	 public function showLogin(){
	 	return view("tickets.login");
	 }
	 
	 public function showSignUp(){
	 	return view("tickets.ticketSignUp");
	 }
	 
	 public function showForgotPassword(){
	 	return view("tickets.forgotpassword");
	 }

	 
	 public function landingPage(Request $request){
	 	return view("tickets.landingPage");
	 }
	 
	   
	 public function processSignUP(Request $request){
		 // get all the data that has been posted from the form
		 $post_data = $request->all();
		
		 $client = new Client();
		 $client->department_id = $post_data['dept'];
		 $client->email = $post_data['email'];
		 $client->password = sha1($post_data['password']);
		 $client->date_registered = date('Y-m-d H:i:s');		 
		 $client->save();
			
	 }
	 
	 public function processLogIn (Request $request){
	 	$post_data = $request->all();
		 
		 $client = Client::where('email','=',$post_data['email'])->first();
		 
		 if ($client->email != null){
		 	if ($client->password == sha1($post_data['password'])){
		 		
				return view("tickets.landingpage");
		 	}
			else {
				return view("tickets.login");
	
			}
			
		 }
		 
		 
	 }
}
