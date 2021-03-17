<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Cart;
use Session;
// use App\Http\Requests;
// use lluminate\Support\Facades\Redirect;
// session_start();

class CartController extends Controller
{
    public function SaveProductCart(Request $request)
    {
        //check nếu chưa login thì quay lại trang login
        $customer_name = Session::get('customer_name');
        if(!$customer_name) {
            return redirect()->route('LoginCustomer');
        }
        
        $productId = $request->input('productid_hidden');
        $quantity = $request->input('quantity');

        $product_info = Product::where('id', $productId)->first();
        // echo '<pre>';
        // print_r($data);
        // echo '<pre>';
        // Cart::add('293ad', 'Product 1', 2, 9.99, 550);
        // Cart::destroy();

        $data['id'] =  $product_info->id;
        $data['qty'] =  $quantity;
        $data['name'] =  $product_info->product_name;
        $data['price'] =  $product_info->product_price;
        $data['weight'] = '0' ;
        $data['options']['image'] =  $product_info->product_image;
        Cart::add($data);
        // Cart::destroy();

        return redirect()->back();
    }

    public function ShowCart()
    {
        return view('pages.cart');
    }

    public function DeleteCart($rowId)
    {
        Cart::update($rowId, 0);
        return redirect()->route('show_cart');
    }

    public function CheckCart()
    {
        $customer_name = Session::get('customer_name');
        if($customer_name) {
            return redirect()->route('show_cart');
        } else {
            return redirect()->route('LoginCustomer');
        }
    }
}
