<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shipping;
use App\Models\Payment;
use App\Models\Order;
use App\Models\OrderDetail;
use Session;
use Cart;

class CheckoutController extends Controller
{
    public function Checkout ()
    {
        return view('pages.checkout');
    }

    public function SaveCheckoutCustomer(Request $request)
    {
        // DL bang Shipping
        $shipping_name = $request->input('shipping_name');
        $shipping_phone = $request->input('shipping_phone');
        $shipping_email = $request->input('shipping_email');
        $shipping_address = $request->input('shipping_address');
        $shipping_note = $request->input('shipping_note');

        $shipping = new Shipping;
        $shipping->shipping_name = $shipping_name;
        $shipping->shipping_phone = $shipping_phone;
        $shipping->shipping_email = $shipping_email;
        $shipping->shipping_address = $shipping_address;
        $shipping->shipping_note = $shipping_note;
        $shipping->save();

        // DL bang Payment
        $payment = new Payment;
        $payment_method = $request->input('payment_method');
        $payment->payment_method = $payment_method;
        $payment->payment_status = '0';
        $payment->save();

        // DL bang Order
        $order = new Order;
        $order->customer_id = Session::get('customer_id');
        $order->shipping_id = $shipping->id;
        $order->payment_id = $payment->id;
        $order->order_total = Cart::subtotal();
        $order->order_status = '0';
        $order->save();

        //DL bang OrderDetail
        $content = Cart::content();
        foreach($content as $value_content) {
            $order_detail = new OrderDetail;
            $order_detail->order_id = $order->id;
            $order_detail->product_id = $value_content->id;
            $order_detail->product_name = $value_content->name;
            $order_detail->product_price = $value_content->price;
            $order_detail->product_sales_quantity = $value_content->qty;
            $order_detail->save();
        }
        

        Session::put('shipping_id', $shipping->id);
        return redirect()->route('home');
    }

    public function ManageOrder()
    {
        $orders = Order::all();
        $orderDetail = OrderDetail::all();
        return view('order.manage_order', compact('orders', 'orderDetail'));
    }

    public function OrderDetail($id)
    {
        $orders = Order::find($id);
        $orderDetail = OrderDetail::where('order_id', $id)->get();
        return view('order.order_detail', compact('orders', 'orderDetail'));
    }
}
