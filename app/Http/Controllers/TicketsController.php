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
	 
<<<<<<< HEAD
	 public function showSignUp(){
	 	return view("tickets.ticketSignUp");
	 }
	 
	 public function showForgotPassword(){
	 	return view("tickets.forgotpassword");
	 }
=======
	  /**
	 * Show the landing page for tickets
	 * 
	 */
	 public function landingPage(Request $request){
	 	return view("tickets.landingPage");
	 }
	 
>>>>>>> LandingPage
	   
}
