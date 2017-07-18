<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Brand;
use App\Product;

class AdminController extends Controller
{

    public function index()
    {	
    	if (Auth::user()->admin == 1) {
    		$brands = Brand::all();
    		return view('admin', compact("brands"));	
    	} else {
    		$notification = "Вам запрещ доступ суда";
    		return view('notification', compact("notification"));
    	}
    }

     public function update(Request $request)
    {	
    	$this->validate($request, [
        	'name' => 'required|max:255',
        	'alias' => 'required|max:255',
        	'price' => 'required|numeric',
        	'brand_id' => 'required|numeric',
        	'rating' => 'required|numeric',
        	'color' => 'required|max:255',
			'description' => 'required|max:1000',
        	'short_description' => 'required|max:1000',
        	'add_information' => 'required|max:1000',
        	'discount' => 'required|between:0,100',
    	]);
    	$request->discount = $request->discount / 100;
    	Product::insert([
    		'name' => $request->name, 
    		'alias' => $request->alias,
    		'price' => $request->price,
    		'brand_id' => $request->brand_id,
    		'rating' => $request->rating,
    		'color' => $request->color,
    		'description' => $request->description,
    		'short_description' => $request->short_description,
    		'add_information' => $request->add_information,
    		'discount' => $request->discount	
    	]);
    	$notification = "Товар успешно добавлен";
    	return view('notification', compact('notification'));
    }
}
