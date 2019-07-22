<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
    'name',
    'email',
    'title',
    'category_id',
    'URL',
    'description',
    'meta_description',
    'keyword',
    'verified_by',
    'verified_on',
    'package_id',
    'order_id'
  ];

  public function user(){
    return $this->belongsTo('App\User');
  }
  public function orders(){
    return $this->belongsTo('App\Order');
  }
  public function category(){
    return $this->belongsTo('App\Category');
  }
  public function package(){
    return $this->belongsTo('App\Package');
  }
  public function latestpage(){
    return $this->belongsTo('App\Latestpage');
  }
}
