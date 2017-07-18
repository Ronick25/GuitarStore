<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = ['name', 'email', 'phone_number', 'payment_method','delivery_method'];
}