<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;
use App\Comment;
use App\ProductImage;

class SingleController extends Controller
{
    public function index($alias)
    {
        $product = Product::where('alias' ,$alias)->first();
        $comments = Comment::where('product_id', $product->id)->get();
        $discount_price = (int) ($product->price/(1-$product->discount));
        $comments_count = 0;
        foreach ($comments as $comment) {
            $comments_count += 1;
        }
        $images = ProductImage::where('product_id', $product->id)->get();
        return view('single', compact('product', 'comments','discount_price', 'comments_count', 'images'));
    }

    public function update($alias, Request $request)
    {  
        $this->validate($request, [
            'parent_id' => 'nullable',
            'title' => 'required|max:255',
            'text' => 'required|max:255',
            'name' => 'required|max:255',
            'img' => 'required|max:255',
            'email' => 'required|max:255',
            'rating' => 'required|numeric',
            'product_id' => 'required|numeric',
        ]);
        //Через fillable и create не заполнялись подкоментарии, хотя в requeste они были. Пришлось так.
        Comment::insert(['parent_id' => $request->parent_id, 'title'=> $request->title, 'text'=> $request->text, 'name'=> $request->name,'img'=>$request->img,'email'=>$request->email,'rating'=>$request->rating,'product_id'=>$request->product_id]);
        $product = Product::where('alias' ,$alias)->first();
        $updated_rating = ($product->rating + request('rating')) / 2;
        Product::where('alias', $alias)->update(['rating' => $updated_rating]);
        $comments = Comment::where('product_id', $product->id)->get();
        return redirect()->back();
    }
}
