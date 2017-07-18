<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
	public function getRouteKeyName() 
	{
		return 'product/alias';
	}

	public function categories() 
	{
		return $this->belongsToMany('App\Category');
	}

	public function images()
	{
		return $this->hasMany('App\ProductImage');
	}

	public $timestamps = false;
}
