<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;
use App\Category;

class SearchController extends Controller
{	
 public function index(Request $request)
    {  
  		$products = Product::all();
    	$categories = Category::all();
    	$search_result = Product::where('name', $request->search)
    										->orWhere('name', 'like', '%' . $request->search . '%')->get();
    	return view('search', compact('search_result', 'categories'));
    }
}
