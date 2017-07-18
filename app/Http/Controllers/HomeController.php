<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Subscriber;

class HomeController extends Controller
{

    public function index()
    {  
        $categories = Category::all();
        $top_solid = Product::where('brand_id' , 1)->orderBy('rating', 'desc')->limit(4)->get();
        $top_hollow = Product::where('brand_id' , 2)->orderBy('rating', 'desc')->limit(4)->get();
        $top_bass = Product::where('brand_id' , 4)->orderBy('rating', 'desc')->limit(4)->get();
        $top_amps = Product::where('brand_id' , 5)->orderBy('rating', 'desc')->limit(4)->get();
        $top_products = [$top_solid, $top_hollow, $top_bass, $top_amps];
        foreach ($top_products as $top_product) {
            foreach ($top_product as $product) {
                $product_images = $product->images()->first();
                $images[] = $product_images;
            }
        }
        return view('home', compact('top_products', 'categories', 'images'));
    }

    public function add(Request $request)
    {
        if (!empty($request)) {
            $uniq_email = Subscriber::where('email', $request['email'])->get();
            if(count($uniq_email) == 1) {
                $status = ' Этот email уже есть в базе';
                $uniq_email = 0;
            } else {
                $new_subcriber = Subscriber::insert(array('email' => $request['email']));
                $status = 'Ваш email успешно добавлен!';
                $uniq_email = 0;
            }
        }
     return $status;
    }
}
