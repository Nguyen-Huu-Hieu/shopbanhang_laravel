<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Auth;
use DB;
use Session;
use App\Models\Order;
use App\Models\OrderDetail;

class CustomerController extends Controller
{
    public function RegistrationUser()
    {
        return view('customer.registration_user');
    }

    public function SaveRegistration(Request $request)
    {
        $email = $request->input('email');
        $fullname = $request->input('fullname');
        $gender = $request->input('gender');
        $address = $request->input('address');
        $phone = $request->input('phone');
        $password = $request->input('password');
        $re_password = $request->input('re-password');

        $customer = new Customer();

        $customer->email = $email;
        $customer->fullname = $fullname;
        $customer->gender = $gender;
        $customer->address = $address;
        $customer->phone = $phone;
        $customer->password = $password;
        $customer->re_password = $re_password;
        $customer->save();
        return redirect()->route('home');
    }

    public function ListCustomer()
    {
        $list_customer = Customer::all();
        return view('customer.list_customer', compact('list_customer'));
    }

    public function LoginCustomer()
    {
        return view('customer.login_customer');
    }

    public function Login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        // if(Auth::attempt([
        //     'email' =>$email,
        //     'password' => $password,
        // ])) {
        //     $customer = Customer::where('email', $email)->first();
        //     Auth::login($customer);
        //     return redirect()->route('pages.home');
        // } else {
        //     echo 'fdg';
        // }

        $result = DB::table('customers')->where('email', $email)->where('password', $password)->first();
        if($result) {
            Session::put('customer_name', $result->fullname);
            Session::put('customer_id', $result->id);
            return redirect()->route('home');
            
        } else {
            Session::put('customer_login_message', 'Email hoặc mật khẩu không đúng');
            return redirect()->route('LoginCustomer');
        }
    }

    public function Account()
    {
        return view('customer.account_customer');
    }

    public function Logout()
    {
        // $customer_name = Session::get('customer_name');
        Session::put('customer_name', null);
        return redirect()->route('home');
    }

    public function AccountOrder()
    {
        $customer_id = Session::get('customer_id');
        $orders_detail = OrderDetail::all();
        $orders = Order::where('customer_id', $customer_id)->get();
        return view('order.account_order', compact('orders', 'orders_detail'));
    }

    public function InfoAccount()
    {
        $customer_id = Session::get('customer_id');
        $customer = Customer::find($customer_id);
        return view('customer.account_info', compact('customer'));
    }

    public function ChangePassword()
    {
        return view('customer.change_password');
    }

    public function SaveChangePassword(Request $request)
    {
        $old_password = $request->input('old_password');
        $new_password = $request->input('new_password');
        $re_new_password = $request->input('re_new_password');
        $customer_id = Session::get('customer_id');
        $customer = Customer::find($customer_id);
        if($customer->password == $old_password && $new_password == $re_new_password) {
            $customer->password = $new_password;
            $customer->re_password = $new_password;
            $customer->save();
            return back()->withSuccess('Đổi mật khẩu thành công');
        } else {
            return back()->withError('Đổi mật khẩu thất bại.');
        }
    }
}
