<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	public function user(){
		return $this->belongsTo('App\User');
	}
	public function listings(){
		return $this->belongsTo('App\Listing');
	}
	public function package(){
		return $this->belongsTo('App\Package');
	}

}
