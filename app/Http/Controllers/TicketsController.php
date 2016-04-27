<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

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
	 	return view("tickets.welcome");
	 }
	 
	   
}
