<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin_login');
    }

    public function show_dashboard()
    {
        return view('admin.admin_layout');
    }

    public function dashboard(Request $request)
    {
        $admin_email = $request->input('admin_email');
        $admin_password = md5($request->input('admin_password'));

        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        if($result) {
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return view('admin.admin_layout');

        } else {
            Session::put('message', 'Tên đăng nhập hoặc mật khẩu không đúng');
            return redirect(route('admin'));

        }
    }

    public function logout()
    {
        //cach 1
        auth()->logout();
        return redirect()->route('admin');

        //cach 2
        // Session::put('admin_name',null);
        // Session::put('admin_id', null);
        // return redirect()->route('admin');
    }
}
