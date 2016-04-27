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
	 
	  
}
