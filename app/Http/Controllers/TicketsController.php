<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Client as Client;

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
	 	
		$client = Client::find(1);
		print_r($client);
		
	 	return view("tickets.welcome");
	 }
	 
	   
}
