<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
    'name',
    'price',
    'sponsered',
  ];

	public function order(){
		return $this->belongsTo('App\Order');
	}

	public function listing(){
	    return $this->belongsTo('App\Listing');
	}
}
