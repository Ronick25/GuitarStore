<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Order;
use App\OrderInfo;
use Session;

class CartController extends Controller
{	
    public function checkout(Request $request)
    {   
        if (empty(session('cart'))){
            $notification = "Ваша корзина пуста";
            return view('notification', compact("notification"));
        } else {
            if (!empty($request->name)) {
                $this->validate($request, [
                    'name' => 'required|max:255',
                    'email' => 'required|max:255',
                    'phone_number' => 'required|numeric',
                    'payment_method' => 'required|numeric',
                    'delivery_method' => 'required|numeric',
                ]);
                $new_order = Order::insert(array(
                        'name' => $request['name'],
                        'user_id' => Auth::id(),
                        'email' => $request['email'],
                        'phone_number' => $request['phone_number'],
                        'payment_method' => $request['payment_method'],
                        'delivery_method' => $request['delivery_method']
                    ));
                $order = Order::orderby('id', 'desc')->first();
                foreach (session('cart') as $temp) {
                    $order_info = OrderInfo::insert(array(
                        'product_id' => $temp['id'],
                        'order_id' => $order->id,
                        'quantity'=> $temp['qty'],
                        'name' => $temp['name'],
                        'price' => $temp['price']));
                }
                session()->forget('cart');
                return view ("checkout");
            } else {
                $order_info = array();
                $total_prices = [];
                foreach (session('cart') as $product) {
                    $total_price = $product['price'] * $product['qty'];
                    array_push($total_prices, $total_price);
                }
                for ($i=0; $i < count($total_prices)-1; $i++) { 
                    $total_price += $total_prices[$i];
                }
                return view ("checkout", compact("total_price"));
            }
        }
    }
	public function clear()
    {
		Session()->forget('cart');
		$response = array();
		return $response;
	}

    public function add(Request $request)  
    {	
   
     	$response = array();
    	$product = Product::where('id', $request->id)->first();
    	$temp['cart'] = session('cart');
    	if (session()->has('cart')) {
    		if(isset($temp['cart'][$request->id])) {
    			if ($temp['cart'][$request->id]['id'] == $request->id) {
    				$temp['cart'][$request->id]['qty'] += 1;	
    				session($temp);
    				foreach (session('cart') as $resp) {
    					array_push($response, $resp);	
    				}
    			}
    		} else {
    			$temp['cart'][$request->id] = 
    				[
						'id' =>$request->id, 
						'qty' => 1,
						'price' => $product->price,
						'name' => $product->name
					];
				session($temp); 
				foreach (session('cart') as $resp) {
    				array_push($response, $resp);	
    			}
			}	
    	} else {
    		$temp['cart'][$request->id] = 
    			[
					'id' => $request->id, 
					'qty' => 1,
					'price' => $product->price,
					'name' => $product->name
				];
			session($temp); 
			foreach (session('cart') as $resp) {
    			array_push($response, $resp);	
    		} 
    	}
    	return $response; 
	}	

    public function show() {
        $response = array();
        foreach (session('cart') as $resp) {
            array_push($response, $resp);   
        }
        return $response;  
    }
}
