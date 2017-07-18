<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;
use App\ProductImage;

class GuitarsController extends Controller
{
    public function index(Request $request)
    {   
        $categories = Category::all();
        $brands = Brand::all();
        $category = $categories->where('alias', $request->alias)->first();
        $images = [];
        if ($request->filter){
            $products = $category->products()->where('brand_id', $request->filter)->get();

            foreach ($products as $product) {
   
                $image = ProductImage::where('product_id', $product->id)->first();

                $images[] = $image;
            }
        } else {
            $products = $category->products;
             foreach ($products as $product) {
                $image = ProductImage::where('product_id', $product->id)->first();
                $images[] = $image;
            }
        }
        if ($images == null ) {
            $notification = 'Извините в этой категории нет товаров.';
            return view('notification', compact('notification'));
        }
        return view('guitars', compact('categories', 'products', 'brands','images'));
    }

    public function filter($alias, $brand)
    {   
        $categories = Category::all();
        $brands = Brand::all();
        $category = $categories->where('alias', $alias)->first();
        $brand = $brands->where('alias', $brand)->first();
        $brand_products = $brand->products;
        foreach ($category_products as $category_product) {
            foreach ($brand_products as $brand_product) {
                if ($category_product->id == $brand_product->id) {
                    $products[] = $brand_product;
                }
            }
        }
        return view('guitars', compact('categories', 'products', 'brands'));
    }
}
