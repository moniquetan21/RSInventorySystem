<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientProfile extends Model
{
	public $timestamps = false;
	protected $table = "client_profiles";

	public function client(){
		return $this->belongsTo("App\Client");
	}

}
